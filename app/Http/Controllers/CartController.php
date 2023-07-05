<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // api get cart
    public function getCart(){
        if (auth('sanctum')->check()) {
            $user_id = auth('sanctum')->user()->id;
            $carts = Carts::where('user_id', $user_id)->get();
            return response()->json($carts);
        }
        else {
            echo "<script>alert('Vui lòng đăng nhập để sử dụng tính năng này !')</script>";
        }
    }


    public function addToCart(Request $request)
    {
        if (Auth::check()) {
            $user_id = Auth::user()->id;
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
                        'status' => 201,
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
        if (auth('sanctum')->check()) {
            $user_id = auth('sanctum')->user()->id;
            $cart = Carts::where('id',$cart_id)->where('user_id',$user_id)->first();

            if ($scope === 'inc') {
                if ($cart->quantity < 10) {
                    $cart -> quantity += 1;
                    $cart -> update();  
                }
            }
            else if ($scope === 'dec') {
                if ($cart->quantity > 1) {
                    $cart -> quantity -= 1;
                    $cart -> update();
                }
            }
            return response()->json([
                'status' => 200,
                'message' => 'Cập nhật số lượng thành công',
            ]);
        }
        else {
            return response()->json([
                'status' => 401,
                'message' => 'Vui lòng đăng nhập để sử dụng tính năng này',
            ]);
        }
    }
    public function Delete($cart_id) {
        $cart = Carts::findOrFail($cart_id);
        $cart->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Đã xóa sản phẩm khỏi giỏ hàng',
        ]);
    }
}
