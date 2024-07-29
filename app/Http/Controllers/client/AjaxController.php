<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AjaxController extends Controller
{
    public function filterData(Request $request)
    {
        $id = $request->query('id');
        $priceFrom = $request->query('price_from');
        $priceTo = $request->query('price_to');
        $sizes = $request->query('sizes');

        // Tạo query để lọc sản phẩm  
        $query = Product::query();


        if ($id) {
            $query->where('category_id', $id);
        }
        // Lọc theo giá  
        if ($priceFrom) {
            $query->where('price', '>=', $priceFrom);
        }

        if ($priceTo) {
            $query->where('price', '<=', $priceTo);
        }

        // Lọc theo kích thước (giả sử bạn có quan hệ với mô hình Size) 

        // Lấy kết quả cuối cùng  
        $products = $query->get();

        if ($products->isEmpty()) {
            // Trả về thông báo nếu không có sản phẩm  
            return response()->json(['output' => '<h2 class="text-center ">Không tìm thấy sản phẩm.</h2>']);
        }

        // Trả về kết quả dưới dạng JSON  
        return response()->json(['output' => view('client.components.product_item', compact('products'))->render()]);
    }

    public function addCart(Request $request)
    {
        try {
            // Check if the user is logged in  
            if (!auth()->check()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Bạn cần đăng nhập để thêm giỏ hàng.'
                ], 401);
            }

            $userId = auth()->id();
            $productId = $request->input('id');
            $quantity = $request->input('quantity');

            // Verify if the product exists in the database  
            $product = Product::find($productId);
            if (!$product) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Không tìm thấy sản phẩm.'
                ], 404);
            }

            // Initial cart setup  
            $cart = session()->get('cart', []);
            $cart[$productId] = isset($cart[$productId]) ?
                ['id'=>$product->id,'quantity' => $cart[$productId]['quantity'] + $quantity, 'name' => $product->name, 'price' => $product->price, 'image' => $product->image] :
                ['id'=>$product->id,'quantity' => $quantity, 'name' => $product->name, 'price' => $product->price, 'image' => $product->image];

            // Save the cart to the session  
            session()->put('cart', $cart);

            // Find or create the user's cart  
            $cart = Cart::firstOrCreate(['user_id' => $userId], ['created_at' => now(), 'updated_at' => now()]);

            // Find or create cart detail  
            $cartDetail = CartDetail::firstOrCreate(['cart_id' => $cart->id, 'product_id' => $productId], ['quantity' => 0, 'created_at' => now(), 'updated_at' => now()]);

            // Update quantity  
            $cartDetail->quantity += $quantity;

            if ($cartDetail->quantity < 1) {
                // Remove product if quantity is less than 1  
                $cartDetail->delete();
            } else {
                $cartDetail->updated_at = now();
                $cartDetail->save();
            }

            // Calculate total quantity of products in cart  
            $totalQuantity = CartDetail::where('cart_id', $cart->id)->sum('quantity');

            return response()->json([
                'status' => 'success',
                'totalQuantity' => $totalQuantity
            ]);
        } catch (\Exception $e) {
            // Log the error  
            Log::error('Error in addToCart: ' . $e->getMessage());

            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while adding to the cart.'
            ], 500);
        }
    }


    public function addToCart()
    {

        return view('client.cart.cart-list');
    }


    public function deleteCart(Request $request) {
        $productId = $request->input('id');  

        // Xóa sản phẩm khỏi session  
        $cart = session()->get('cart', []);  
        if (array_key_exists($productId, $cart)) {  
            unset($cart[$productId]); // Xóa sản phẩm khỏi giỏ hàng trong session  
            session()->put('cart', $cart); // Cập nhật lại session  
        }  

        // Nếu sử dụng cơ sở dữ liệu, xóa sản phẩm từ CartDetail  
        $userId = auth()->id(); // Lấy ID người dùng  
        $cartModel = Cart::where('user_id', $userId)->first();  

        if ($cartModel) {  
            $cartDetail = CartDetail::where('cart_id', $cartModel->id)  
                ->where('product_id', $productId)  
                ->first();  

            if ($cartDetail) {  
                $cartDetail->delete(); // Xóa sản phẩm khỏi bảng chi tiết giỏ hàng  
                $cartModel->delete();
            }  
        }  

        return response()->json(['status' => 'success', 'message' => 'Product removed from cart.']);  
    }  
}
