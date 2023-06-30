<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Categories;
use Illuminate\Support\Facades\Http;
use App\Models\Products;
use App\Models\Shops;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class APIController extends Controller
{
    public function importFromAPI()
    {
        $response = Http::get('https://localhost:3000/products');
        $data = $response->json();
        foreach ($data as $productData) {
            $product = new Products();
            $product->id = $productData['product_id'];
            $product->name = $productData['name'];
            $product->price = $productData['price'];
            $product->image = $productData['image'];
            $product->promotion_price = $productData['promotion_price'];
            $product->isActive = $productData['isActive'];
            $product->category_id = $productData['category_id'];
            $product->shop_id = $productData['shop_id'];
            $product->save();
        }

        return response()->json(['message' => 'Import successful']);
    }

    //  api get shoops
    public function getShops()
    {
        $shops = Shops::all();
        return response()->json($shops);
    }

    public function getOneShops($shop_id)
    {
        $shop = Shops::where('id', $shop_id)->first();
        return response()->json($shop);
    }

    // api get categpries
    public function getCategories($id)
    {
        $categories = DB::select("
            SELECT * FROM categories
            WHERE id IN (
                SELECT category_id FROM products WHERE shop_id = $id
            )
        ");
        return response()->json($categories);
    }

    // api get products
    public function getProducts()
    {
        $products = Products::all();
        return response()->json($products);
    }
    public function getProductsBaseOnShop($shop_id)
    {
        $products = DB::select("
            SELECT * FROM products
            WHERE shop_id = $shop_id
        ");
        return response()->json($products);
    }

    // api get cart 
    public function getCart(){
        Session::put('user', 1);
        if (Session::has('user')) {
            $user_id = Session::get('user');
            
            $carts = DB::select("
                SELECT * FROM products
                WHERE id IN (
                SELECT product_id FROM carts WHERE user_id = $user_id )
            ");
            return response()->json($carts);
        }
        else {
            echo "<script>alert('Vui lòng đăng nhập để sử dụng tính năng này !')</script>";
        }
    }

    public function addToCart(Request $request)
    {

        Session::put('user', 1);

        if (Session::has('user')) {
            $user_id = Session::get('user');
            $product_id = $request->product_id;
            $product_qty = $request->product_qty;
            
            $cart = Carts::where('user_id', $user_id)
                ->where('product_id', $product_id)
                ->first();

            if ($cart) {
                $product_qty += 1;
                // $cart->save();
                Carts::where('user_id', $user_id)
                    ->where('product_id', $product_id)
                    ->update(['quantity' => $product_qty]);
                return response()->json([
                    'status' => 409,
                    'message' =>'Sản phẩm này đã tồn tại trong giỏ hàng ! Cập nhật số lượng thành công',
                ]);
            } else {
                $cart = new Carts();
                $cart->user_id = $user_id;
                $cart->product_id = $product_id;
                $cart->quantity = $product_qty;
                $cart->save();
                return response()->json([
                    'status' => 201,
                    'message' => 'Thêm vào giỏ hàng thành công',
                ]);
            }
        }
        else {
            return response()->json([
                'status' => 401,
                'message' => 'Vui lòng đăng nhập để sử dụng tính năng này',
            ]);
        }
    }
}
