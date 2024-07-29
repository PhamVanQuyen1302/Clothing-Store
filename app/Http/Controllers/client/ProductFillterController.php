<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductFillterController extends Controller
{
    const PATH_VIEW = 'client.';

    public function productFiller(string $id)
    {

        $model = Category::query()->findOrFail($id);

        $url = url()->current();
        $parts = explode('/', parse_url($url, PHP_URL_PATH));
        // Calculate the middle index
        $middleIndex = floor(count($parts) / 2);

        // Get the middle element
        $currentId = $parts[$middleIndex];
        $categories = Category::query()->get();

        return view(self::PATH_VIEW . __FUNCTION__, compact('categories', 'currentId', 'model'));
    }
}
