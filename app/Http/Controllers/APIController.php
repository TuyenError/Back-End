<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Categories;
use App\Models\Users;
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

        $response = Http::get('http://localhost:3000/products');

        $data = $response->json();



        foreach ($data as $productData) {
            // dd($productData);

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

            dd($product);

            // $product->save();

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
    // api get all category
    public function getAllCategory()
    {
        $categories = Categories::all();
        return response()->json($categories);
    }
    // api get categpries
    public function getCategoriesBaseOnShop($id)
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
    public function getOneProducts($id)
    {
        $products = Products::where('id', $id)->first();
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

    public function getProductsFlowCategory($category_id)
    {
        $products = DB::select("
            SELECT * FROM products
            WHERE category_id = $category_id
        ");
    }

    public function getUsers()
    {
        $products = Users::all();
        return response()->json($products);
    }

    // api get cart
    public function getCart(){
        Session::put('user', 1);
        if (Session::has('user')) {
            $user_id = Session::get('user');

            // $carts = DB::select("
            //     SELECT * FROM products
            //     WHERE id IN (
            //     SELECT product_id FROM carts WHERE user_id = $user_id )
            // ");
            $carts = Carts::where('user_id', $user_id)->get();
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

            $shop_id = Products::where('id', $product_id)->select('shop_id')->first();
            $oldShop_id = Products::where('id', function ($query) use ($user_id) {
                $query->select('product_id')
                    ->from('carts')
                    ->where('user_id', $user_id)
                    ->limit(1);
            })->value('shop_id');

            if ($shop_id->shop_id === $oldShop_id || !$oldShop_id) {
                $cart = Carts::where('user_id', $user_id)
                ->where('product_id', $product_id)
                ->first();
                if ($cart) {
                    $product_qty += 1;
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
                Carts::where('user_id', $user_id)->delete();
                $cart = new Carts();
                    $cart->user_id = $user_id;
                    $cart->product_id = $product_id;
                    $cart->quantity = $product_qty;
                    $cart->save();
                return response()->json([
                    'status' => 409,
                    'message' =>'Những sản phẩm tại giỏ hàng của shop cũ sẽ không còn tồn tại',
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

    public function updateQuantity($cart_id, $scope) {
        $cart = Carts::where('id',$cart_id)->first();
        if ($scope === 'inc') {
            $cart -> quantity += 1;
            $cart -> update();
        }
        else if ($scope === 'dec') {
            $cart -> quantity -= 1;
            $cart -> update();
        }
        return response()->json([
            'status' => 200,
            'message' => 'Cập nhật số lượng thành công',
        ]);
    }

}
