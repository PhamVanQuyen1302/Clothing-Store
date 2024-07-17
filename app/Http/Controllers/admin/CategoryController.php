<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // private string $fodel = 'admin.categories.';
    const PATH_VIEW = 'admin.categories.';
    public function index()
    {
        $categories = Category::query()->latest('id')->paginate(10);
        return view(self::PATH_VIEW . __FUNCTION__, compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Thêm danh mục';
        return view(self::PATH_VIEW . __FUNCTION__, compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $data = $request->except('_token');

            if ($request->hasFile('image')) {
                $fileName = $request->file('image')->store('upload/categories', 'public');
            } else {
                $fileName = null;
            }

            $data['image'] = $fileName;

            Category::create($data);
            return redirect()->route('admin.categories.index')->with('success', 'Thêm danh mục thành công');
        }
        // Điều hướng ngược lại trong trường hợp phương thức request không phải là POST  
        return redirect()->back()->with('error', 'Yêu cầu không hợp lệ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Cập nhập danh mục";
        $model = Category::query()->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('model', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Category::query()->findOrFail($id);
        if ($request->isMethod('put')) {
            $data = $request->except('_token');

            if ($request->hasFile('image')) {
                $fileName = $request->file('image')->store('upload/categories', 'public');
            } else {
                $fileName = $model->image;
            }

            $data['image'] = $fileName;

            $currentImage = $model->image;

            $model->update($data);

            if ($currentImage && $currentImage !== $fileName && Storage::disk('public')->exists($currentImage)) {
                Storage::disk('public')->delete('upload/categories/',$currentImage);
            }


            return redirect()->route('admin.categories.index')->with('success', 'Cập nhập danh mục thành công');
        }
        // Điều hướng ngược lại trong trường hợp phương thức request không phải là POST  
        return redirect()->back()->with('error', 'Yêu cầu không hợp lệ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Category::query()->findOrFail($id);

        $model->delete();

        if ($model->image && Storage::disk('public')->exists($model->image)) {
            Storage::disk('public')->delete('upload/categories/',$model->image);
        }
        return redirect()->route('admin.categories.index')->with('success', 'Xóa danh mục thành công');
    }
}
