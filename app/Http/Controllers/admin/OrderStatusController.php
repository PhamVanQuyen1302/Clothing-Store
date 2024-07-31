<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderStatusRequest;
use App\Models\OrderStatus;
use Illuminate\Http\Request;

class OrderStatusController extends Controller
{

    const PATH_VIEW = 'admin.order-status.';
    public function index()
    {
        $title = "Danh sách trạng thái đơn hàng";
        $data = OrderStatus::query()->get();

        return view(self::PATH_VIEW . __FUNCTION__,compact('data','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm trạng thái đơn hàng";

        return view(self::PATH_VIEW . __FUNCTION__,compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderStatusRequest $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->except('_token');

            OrderStatus::create($data);

            return redirect()->route('admin.order-status.index')->with('success','Thêm thành công');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Cập nhập trạng thái đơn hàng";
        $model = OrderStatus::query()->findOrFail($id);

        return view(self::PATH_VIEW . __FUNCTION__,compact('title','model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrderStatusRequest $request, string $id)
    {
        $model = OrderStatus::query()->findOrFail($id);

        if ($request->isMethod('put')) {

            $data = $request->except('_token');

            $model->update($data);

            return redirect()->route('admin.order-status.index')->with('success','Cập nhập thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = OrderStatus::query()->findOrFail($id);

        $model->delete();

        return redirect()->route('admin.order-status.index')->with('success','Xóa thành công');
    }
}
