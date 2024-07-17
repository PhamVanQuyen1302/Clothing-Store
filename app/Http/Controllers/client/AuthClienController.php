<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthClienController extends Controller
{

    const PATH_VIEW = 'client.auth.';
    public function login(Request $request)
    {

        if ($request->isMethod('post')) {
            // Xác thực dữ liệu từ form  
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:8',
            ]);

            // Thực hiện đăng nhập  
            if (Auth::attempt($credentials)) {
                // Regenerate session để tránh tấn công Session Fixation  
                $request->session()->regenerate();

                $user = Auth::user();
                $request->session()->put('id', $user->id);
                $request->session()->put('name', $user->name);
                $request->session()->put('email', $user->email);
                $request->session()->put('avatar', $user->avatar);

                if ($user->role_id == 1) {
                    return redirect()->intended('/');
                } elseif ($user->role_id == 2) {
                    return redirect()->intended('/admin/dashboarh');
                }

                // Chuyển hướng đến trang home hoặc trang mặc định sau khi đăng nhập  
                return redirect()->intended('home.index');
            }

            // Trả về thông báo lỗi nếu đăng nhập thất bại  
            return back()->withErrors([
                'email' => 'Thông tin xác thực được cung cấp không khớp với hồ sơ của chúng tôi',
            ])->onlyInput('email');
        }
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    public function register(Request $request)
    {

        $roles = Roles::query()->pluck('name', 'id')->all();

        if ($request->isMethod('post')) {
            // Kiểm tra và validate dữ liệu từ form, bao gồm cả số điện thoại  
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email|unique:users', // Đảm bảo email là duy nhất  
                'password' => 'required|min:8', // Cần có trường password_confirmation để so khớp  
                'tel' => 'required|regex:/^([0-9\s\-\+$$]*)$/|min:10', // Validate số điện thoại  
            ]);
            // Sử dụng trải nghiệm tiện lợi `create` qua model User và cơ chế mass assignment  
            User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
                'tel' => $validatedData['tel'],
                'role_id' => $request->input('role_id', 1), // Hoặc mặc định role_id là 1 nếu không chọn  
            ]);

            return redirect()->route('auth.login')->with('status', 'Đăng ký thành công');
        }

        return view(self::PATH_VIEW . __FUNCTION__, compact('roles'));
    }

    public function forgotpassword()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home.index');
    }
}
