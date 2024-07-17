<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Roles;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     const PATH_VIEW = 'admin.roles.';
    public function index()
    {
        $title = "Danh sách chức vụ";
        $data = Roles::query()->get();
        return view(self::PATH_VIEW . __FUNCTION__,compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm chức vụ";
        return view(self::PATH_VIEW . __FUNCTION__,compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')) {

            $data = $request->except('_token');

            Roles::create($data);

            return redirect()->route('admin.roles.index')->with('succes','Thêm chức vụ thành công');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Cập nhập chức vụ";
        $model = Roles::query()->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__,compact('title','model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Roles::query()->findOrFail($id);

        if($request->isMethod('put')) {

            $data = $request->except('_token');

           $model->update($data);

            return redirect()->route('admin.roles.index')->with('succes','Cập nhập chức vụ thành công');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Roles::query()->findOrFail($id);

        $model->delete();

        return redirect()->route('admin.roles.index')->with('succes','Xóa chức vụ thành công');
    }
}
