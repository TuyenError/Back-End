<?php


namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Shops;
use Illuminate\Http\Request;

class AdminShopController extends Controller
{
    public function getProductAdminShop() {
        if (auth('sanctum')->check()) {
            $user_id = auth('sanctum')->user()->id;
            $products = Products::whereIn('shop_id', function ($query) use ($user_id) {
                $query->select('id')->from('shops')->where('user_id', $user_id);
            })->get();

            return response()->json($products);
        }
        
    }
    public function addProduct(Request $request) {
        if (auth('sanctum')->check()) {
            $user_id = auth('sanctum')->user()->id;
            $shopId = Shops::where('user_id', $user_id)->pluck('id');

            $product = new Products();
            $product->name = $request->name;
            $product->price = $request->price;
            $product->promotion_price = $request->promotion_price;
            $product->image = $request->image;
            $product->category_id = $request->category;
            $product->isActive = true;
            $product->shop_id = $shopId[0];
            $product->save();
            return response()->json([
                'status' => 200,
                'message' =>'Thêm sản phẩm thành công',
            ]);
        }
    }
    public function deleteProduct($id) {
        $product = Products::findOrFail($id);
        $product->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Đã xóa sản phẩm khỏi danh sách sản phẩm',
        ]);
    }
    public function updateProduct(Request $request, $id) {
        if (auth('sanctum')->check()) {
            $user_id = auth('sanctum')->user()->id;
            $shopId = Shops::where('user_id', $user_id)->pluck('id');

            $product = Products::findOrFail($id);
            $product->name = $request->name;
            $product->price = $request->price;
            $product->promotion_price = $request->promotion_price;
            $product->image = $request->image;
            $product->category_id = $request->category_id;
            $product->isActive = true;
            $product->shop_id = $shopId[0];

            $product->update();
            return response()->json([
                'status' => 200,
                'message' => 'Sản phẩm đã được cập nhật',
            ]);
        }
    }
}
