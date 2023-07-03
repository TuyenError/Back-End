<?php
namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Categories;
use Illuminate\Support\Facades\Http;
use App\Models\Products;
use App\Models\Shops;
use App\Models\User;
use App\Models\Users;
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


    // API: Lấy danh sách shop
    public function getShops()
    {
        $shops = Shops::all();
        return response()->json($shops);
    }

    // API: Lấy thông tin của một shop
    public function getOneShop($shop_id)
    {
        $shop = Shops::where('id', $shop_id)->first();
        return response()->json($shop);
    }
    public function deleteShop($shop_id)
    {
        $shop = Shops::findOrFail($shop_id);  
        if ($shop) {
            $shop->delete();
            return response()->json(['message' => 'Shop deleted']);
        }
        return response()->json(['error' => 'Shop not found'], 404);
    }
    
    // API: Lấy danh sách danh mục
    public function getAllCategories()
    {
        $categories = Categories::all();
        return response()->json($categories);
    }

    // API: Lấy danh sách danh mục theo shop
    public function getCategoriesByShop($shop_id)
    {
        $categories = DB::select("
            SELECT * FROM categories
            WHERE id IN (
                SELECT category_id FROM products WHERE shop_id = $shop_id
            )
        ");
        return response()->json($categories);
    }

    // API: Lấy danh sách sản phẩm
    public function getProducts()
    {
        $products = Products::all();
        return response()->json($products);
    }

    // API: Lấy thông tin của một sản phẩm
    public function getOneProduct($product_id)
    {
        $product = Products::where('id', $product_id)->first();
        return response()->json($product);
    }

    // API: Lấy danh sách sản phẩm theo shop
    public function getProductsByShop($shop_id)
    {
        $products = DB::select("
            SELECT * FROM products
            WHERE shop_id = $shop_id
        ");
        return response()->json($products);
    }

    // API: Lấy danh sách sản phẩm theo danh mục
    public function getProductsByCategory($category_id)
    {
        $products = DB::select("
            SELECT * FROM products
            WHERE category_id = $category_id
        ");
        return response()->json($products);
    }
    public function getUser(){
        $user = User::all();
        return response()->json($user);
    }

    public function updateUser($id_user) {
        $user = Users::where('user_id',$id_user)->first();
        $user->isActive = 0;
        // $user->update();
        $user->save();
        return response()->json([
            'status' => 200,
            'message' => 'Xóa người dùng thành công',
        ]) ;
    }
}
