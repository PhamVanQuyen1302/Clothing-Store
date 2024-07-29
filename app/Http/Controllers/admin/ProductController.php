<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    const PATH_VIEW = 'admin.products.';
    public function index()
    {
        $title = "Danh sách sản phẩm";
        $data = Product::query()->with('category')->latest('id')->paginate(10);

        return view(self::PATH_VIEW . __FUNCTION__, compact('data', 'title'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm sản phẩm";
        $categories = Category::query()->pluck('name', 'id')->all();

        return view(self::PATH_VIEW . __FUNCTION__, compact('title', 'categories'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        if ($request->isMethod('post')) {

            $data = $request->except('_token');

            $product = Product::create($data);

            if ($request->hasFile('image')) {
                $images = $request->file('image'); // Lấy mảng hình ảnh  
                $imageData = []; // Khởi tạo mảng để lưu thông tin hình ảnh  

                foreach ($images as $item) {
                    $fileName = $item->store('upload/images', 'public'); // Lưu hình ảnh  
                    $imageData[] = [
                        'product_id' => $product->id, // Gán ID sản phẩm  
                        'link_image' => $fileName, // Lưu tên hình ảnh  
                    ];
                }

                // Ghi tổng hợp tất cả hình ảnh vào cơ sở dữ liệu một lần  
                Image::query()->insert($imageData);
            }

            return redirect()->route('admin.products.index')->with('success', 'Thêm sản phẩm thành công');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Chi tiết sản phẩm";
        $model = Product::query()->with('category')->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('title', 'model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Cập nhập sản phẩm";
        $categories = Category::query()->pluck('name', 'id')->all();
        $model = Product::query()->with('category')->findOrFail($id);

        return view(self::PATH_VIEW . __FUNCTION__, compact('title', 'categories', 'model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Product::query()->with('category')->findOrFail($id);

        if ($request->isMethod('put')) {
            $data = $request->except('_token');

            $model->update($data);

            return redirect()->route('admin.products.index')->with('success', 'Cập nhập sản phẩm thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Product::query()->with('category')->findOrFail($id);

        $model->delete();

        return redirect()->route('admin.products.index')->with('success', 'Xóa sản phẩm thành công');
    }
}
