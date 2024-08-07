<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OderController extends Controller
{
    public function save()
    {

        $userId  = auth()->id();

        $user = User::query()->where('id', $userId)->first();

        $payments = Payment::query()->get();


        return view('client.cart.check-out', compact('user', 'payments'));
    }

    public function processCheckout(Request $request)
    {
        // Xác thực dữ liệu (bỏ chú thích nếu cần)  
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tel' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'payment_id' => 'required|array',
            'payment_id.*' => 'integer',
            'description' => 'nullable|string|max:500',
        ]);

        // Tạo đơn hàng mới  
        $order = new Order();
        $order->code_order = 'ORDER-' . strtoupper(uniqid());
        $order->user_id = Auth::id();
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->tel = $request->input('tel');
        $order->address = $request->input('address');
        $order->booking_date = now();
        $order->totak = 0; // Sẽ cập nhật sau khi tính tổng  
        $order->note = $request->input('note');
        $paymentIds = $request->input('payment_id');
        if (!empty($paymentIds)) {
            $order->payment_id = (int)$paymentIds[0]; // Lưu phương thức thanh toán đầu tiên  
        }
        $order->order_status_id = 1; // Giả định 1 là trạng thái "Đang xử lý"  

        // Lưu đơn hàng  
        $order->save();

        // Tính tổng tiền và lưu chi tiết đơn hàng  
        $totalAmount = 0;
        foreach ($request->input('cartItems', []) as $item) {
            // Giải mã item từ JSON  
            $productData = json_decode($item, true);

            // Kiểm tra và lấy sản phẩm từ cơ sở dữ liệu  
            $product = Product::find($productData['id']);
            if ($product) {
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->product_id = $product->id;
                $orderDetail->quantity = $productData['quantity']; // Số lượng đến từ đối tượng JSON  
                $orderDetail->price = $product->price; // Giá của sản phẩm  
                $orderDetail->into_money = $product->price * $productData['quantity']; // Tổng tiền cho sản phẩm  
                $orderDetail->save();

                $totalAmount += $orderDetail->into_money; // Tính tổng tiền  
            } else {
                // Nếu sản phẩm không tồn tại, có thể báo lỗi hoặc xử lý theo cách khác  
                return redirect()->back()->withErrors(['error' => 'Sản phẩm không tồn tại: ID ' . $productData['id']]);
            }
        }

        // Cập nhật lại tổng tiền cho đơn hàng  
        $order->totak = $totalAmount;
        // dd($order->totak);
        $order->save();

        // Xử lý xóa sản phẩm khỏi giỏ hàng  
        $cart = session()->get('cart', []);
        foreach ($request->input('cartItems', []) as $item) {
            // Giải mã item từ JSON để lấy productId  
            $productData = json_decode($item, true);
            $productId = $productData['id'];

            // Kiểm tra và xóa sản phẩm khỏi giỏ hàng trong session  
            if (array_key_exists($productId, $cart)) {
                unset($cart[$productId]); // Xóa sản phẩm khỏi giỏ hàng trong session  
            }
        }
        session()->put('cart', $cart); // Cập nhật lại session  

        // Nếu sử dụng cơ sở dữ liệu, xóa sản phẩm từ CartDetail  
        $userId = auth()->id(); // Lấy ID người dùng  
        $cartModel = Cart::where('user_id', $userId)->first();

        if ($cartModel) {
            foreach ($request->input('cartItems', []) as $item) {
                $productData = json_decode($item, true);
                $productId = $productData['id']; // Lấy productId từ đối tượng JSON  

                $cartDetail = CartDetail::where('cart_id', $cartModel->id)
                    ->where('product_id', $productId)
                    ->first();

                if ($cartDetail) {
                    $cartDetail->delete(); // Xóa sản phẩm khỏi bảng chi tiết giỏ hàng  
                    $cartModel->delete();
                }
            }
        }

        // Chuyển hướng đến trang thành công với thông báo  
        return redirect()->route('checkout.success')->with('success', 'Đặt hàng thành công!');
    }


    public function success()
    {
        // $data = Order::query()->get();
        return view('client.cart.check-out-success');
    }
}
