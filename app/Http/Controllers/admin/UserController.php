<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = 'admin.users.';

    public function index()
    {
        $users = User::query()->get();

        return view(self::PATH_VIEW . __FUNCTION__, compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm tài khoản";
        $roles = Roles::query()->pluck('name', 'id')->all();
        return view(self::PATH_VIEW . __FUNCTION__, compact('title', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {

            $data = $request->except('_token');

            if ($request->hasFile('avatar')) {
                $fileName = $request->file('avatar')->store('upload/users', 'public');
            } else {
                $fileName = null;
            }

            $data['avatar'] = $fileName;

            User::create($data);

            return redirect()->route('admin.users.index')->with('success', 'Thêm tài khoản thành công');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Chi tiết tài khoản";
        $model = User::query()->with('role')->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('model', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Cập nhập tài khoản";
        $roles = Roles::query()->pluck('name', 'id')->all();
        $model = User::query()->with('role')->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('title', 'roles', 'model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = User::query()->with('role')->findOrFail($id);

        if ($request->isMethod('put')) {

            $data = $request->except('_token');

            if ($request->hasFile('avatar')) {
                $fileName = $request->file('avatar')->store('upload/users', 'public');
            } else {
                $fileName = $model->avatar;
            }

            $data['avatar'] = $fileName;

            $currentImage = $model->avatar;

            $model->update($data);

            if ($currentImage && $currentImage !== $fileName && Storage::disk('public')->exists($currentImage)) {
                Storage::disk('public')->delete('upload/users/', $currentImage);
            }

            return redirect()->route('admin.users.index')->with('success', 'Cập nhập tài khoản thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Lấy model User cùng với role liên quan  
        $model = User::query()->with('role')->findOrFail($id);

        // Kiểm tra nếu role_id là 2 (giả sử role_id 2 là admin)  
        if ($model->role_id == 2) {
            return redirect()->route('admin.users.index')->with('error', 'Không thể xóa tài khoản Admin');
        }

        // Thực hiện xóa tài khoản người dùng  
        $model->delete();

        // Xóa avatar từ bộ nhớ nếu tồn tại  
        if ($model->avatar && Storage::disk('public')->exists($model->avatar)) {
            Storage::disk('public')->delete('upload/users/' . $model->avatar);
        }

        return redirect()->route('admin.users.index')->with('success', 'Xóa tài khoản người dùng thành công');
    }
}
