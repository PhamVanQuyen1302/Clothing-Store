<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     const PATH_VIEW = 'admin.payments.';
    public function index()
    {
        $data = Payment::query()->get();
        $title = "Danh sách phương thức thanh toán";
        return  view(self::PATH_VIEW . __FUNCTION__,compact('data','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm phương thức thanh toán";
        return  view(self::PATH_VIEW . __FUNCTION__,compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PaymentRequest $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->except('_token');

            Payment::create($data);

            return redirect()->route('admin.payments.index')->with('success','Thêm thành công');
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Cập nhập phương thức thanh toán";
        $model = Payment::query()->findOrFail($id);

        return view(self::PATH_VIEW . __FUNCTION__,compact('title','model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PaymentRequest $request, string $id)
    {
        $model = Payment::query()->findOrFail($id);


        if ($request->isMethod('put')) {

            $data = $request->except('_token');

            $model->update($data);

            return redirect()->route('admin.payments.index')->with('success','Cập nhập thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Payment::query()->findOrFail($id);

        $model->delete();

        return redirect()->route('admin.payments.index')->with('success','Xóa thành công');
    }
}
