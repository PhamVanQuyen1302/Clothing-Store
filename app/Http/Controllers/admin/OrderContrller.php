<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\OrderStatus;
use Illuminate\Http\Request;

class OrderContrller extends Controller
{
    const PATH_VIEW = 'admin.orders.';
    public function index()
    {
        $title = "Danh sách đơn hàng";
        $order_status = OrderStatus::query()->get();
        $data = Order::query()->with('user', 'orderDetails', 'orderStatus')->latest('id')->paginate(10);
        return view(self::PATH_VIEW . __FUNCTION__, compact('title', 'data', 'order_status'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Chi tiết đơn hàng";

        // Load thông tin đơn hàng kèm theo thông tin người dùng, chi tiết đơn hàng và trạng thái  
        $model = Order::query()->with(['user', 'orderDetails.product', 'orderStatus'])->findOrFail($id);

        // Sử dụng dữ liệu đã truy vấn từ đơn hàng, không cần gọi lại OrderDetail  
        $order_details = $model->orderDetails; // Lấy danh sách chi tiết đơn hàng  

        return view(self::PATH_VIEW . __FUNCTION__, compact('title', 'model', 'order_details'));
    }
    public function update(Request $request)
    {
        if ($request->isMethod('post')) {
            $order_id = $request->input('id');
            $newStatus = $request->input('new_status');

            $order = Order::query()->findOrFail($order_id);

            // Logic kiểm tra trạng thái  
            switch ($order->order_status_id) {
                case 1: // Đang xử lý  
                    // Có thể cập nhật sang "Đã xác nhận" (2) hoặc "Hủy" (5)  
                    if ($newStatus == 2 || $newStatus == 5) {
                        $order->update(['order_status_id' => $newStatus]);
                        return response()->json(['message' => 'Cập nhật trạng thái thành công!']);
                    }
                    break;

                case 2: // Đã xác nhận  
                    // Không cho phép hủy đơn  
                    if ($newStatus == 5) { // Hủy  
                        return response()->json(['message' => 'Đơn hàng đã xác nhận không thể hủy!'], 400);
                    }
                    // Có thể cập nhật sang "Đang vận chuyển" (3)  
                    if ($newStatus == 3) {
                        $order->update(['order_status_id' => $newStatus]);
                        return response()->json(['message' => 'Cập nhật trạng thái thành công!']);
                    }
                    break;

                case 3: // Đang vận chuyển  
                    // Không cho phép hủy đơn  
                    if ($newStatus == 5) { // Hủy  
                        return response()->json(['message' => 'Đơn hàng đang vận chuyển không thể hủy!'], 400);
                    }
                    // Có thể cập nhật sang "Đã giao hàng" (4)  
                    if ($newStatus == 4) {
                        $order->update(['order_status_id' => $newStatus]);
                        return response()->json(['message' => 'Cập nhật trạng thái thành công!']);
                    }
                    break;

                case 4: // Đã giao hàng  
                    return response()->json(['message' => 'Đơn hàng đã giao không thể thay đổi trạng thái!'], 400);

                case 5: // Hủy đơn  
                    return response()->json(['message' => 'Đơn hàng đã hủy không thể thay đổi trạng thái!'], 400);
            }

            // Nếu không thỏa mãn bất kỳ điều kiện nào để cập nhật  
            return response()->json(['message' => 'Không thể chuyển sang trạng thái này.'], 400);
        }
    }
}
