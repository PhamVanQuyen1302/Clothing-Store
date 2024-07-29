<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    const PATH_VIEW = 'client.';

    public function index()
    {

        $data = Product::query()->with('image')->get();

        
        return view(self::PATH_VIEW . __FUNCTION__,compact('data'));
    }

    public function userInfor(string $id)
    {
        $model = User::query()->with('role')->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('model'));
    }

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

            return redirect()->route('home.infor', $model->id)->with('success', 'Cập nhập tài khoản thành công');
        }
    }

    public function productDetail(string $id) {

        $model = Product::query()->with('image')->findOrFail($id);

        return view(self::PATH_VIEW . __FUNCTION__ ,compact('model'));
    }
}
