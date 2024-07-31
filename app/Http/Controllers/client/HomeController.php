<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Order;
use App\Models\OrderStatus;
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


        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
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

    public function productDetail(string $id)
    {

        $model = Product::query()->with('image')->findOrFail($id);


        $comments = Comment::query()->with('user')->where('product_id', $id)->get();

        return view(self::PATH_VIEW . __FUNCTION__, compact('model', 'comments'));
    }

    public function yourOrder(Request $request, string $id)
    {
        // Lấy dữ liệu đơn hàng của người dùng cùng với các chi tiết đơn hàng  
        $data = Order::query()
            ->with(['orderDetails.product.image']) // Giả định rằng có mối quan hệ images trong model Product  
            ->where('user_id', $id)
            ->get();

        $order_status = OrderStatus::query()->get();
        $title = "Đơn hàng của bạn";

        return view(self::PATH_VIEW . __FUNCTION__, compact('data', 'title', 'order_status'));
    }

    public function cancel(String $id)
    {

        $userId = auth()->id();

        $order = Order::where('id', $id)->where('user_id', $userId)->first();

        $order->order_status_id = 5;
        $order->save();

        return redirect()->route('home.yourOrder', $userId)->with('success', 'hủy đơn hàng thành công');
    }
}
