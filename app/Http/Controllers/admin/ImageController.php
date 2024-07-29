<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     const PATH_VIEW = 'admin.images.';
    public function index()
    {
        $title = 'Danh sách hình ảnh';
        $data = Image::query()->with('product')->get();

        return view(self::PATH_VIEW . __FUNCTION__,compact('title','data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Thêm hình ảnh';
        $products = Product::query()->pluck('name','id',)->all();
        return view(self::PATH_VIEW . __FUNCTION__,compact('title','products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')) {
            $data = $request->except('_token');

        

            if($request->hasFile('link_image')) {
                $fileName = $request->file('link_image')->store('upload/images','public');
            } else {
                $fileName = null;
            }

            $data['link_image'] = $fileName;

            Image::create($data);

            return redirect()->route('admin.images.index')->with('success','Thêm ảnh thành công');
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
        $title = 'Cập nhập hình ảnh';
        $model = Image::query()->with('product')->findOrFail($id);
        $products = Product::query()->pluck('name','id',)->all();
        return view(self::PATH_VIEW . __FUNCTION__,compact('title','model','products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Image::query()->with('product')->findOrFail($id);

        if($request->isMethod('put')) {
            $data = $request->except('_token');

            if($request->hasFile('link_image')) {
                $fileName = $request->file('link_image')->store('upload/images','public');
            } else {
                $fileName = $model->link_image;
            }

            $data['link_image'] = $fileName;

            $currentImage = $model->link_image;

            $model->update($data);
            
            if ($currentImage && $currentImage !== $fileName && Storage::disk('public')->exists($currentImage)) {
                Storage::disk('public')->delete('upload/images/',$currentImage);
            }

            return redirect()->route('admin.images.index')->with('success','Cập nhập ảnh thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        $model = Image::query()->with('product')->findOrFail($id);

        $model->delete();

        if ($model->image && Storage::disk('public')->exists($model->image)) {
            Storage::disk('public')->delete('upload/images/',$model->image);
        }
        return redirect()->route('admin.images.index')->with('success', 'Xóa ảnh thành công');
    }
}
