<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Users;
use Illuminate\Support\Facades\Http;
use App\Models\Products;
use App\Models\Shops;
use Illuminate\Support\Facades\DB;

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

            $product->product_id = $productData['product_id'];
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
        $shop = Shops::where('shop_id', $shop_id)->first();
        return response()->json($shop);
    }
    // api get all category
    public function getAllCategory()
    {
        $categories = Categories::all();
        return response()->json($categories);
    }
    // api get categpries
    public function getCategories($id)
    {
        $categories = DB::select("
            SELECT * FROM categories
            WHERE category_id IN (
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
        $products = Products::where('product_id', $id)->first();
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

<<<<<<< Updated upstream
    public function getProductsFlowCategory($category_id)
    {
        $products = DB::select("
            SELECT * FROM products
            WHERE category_id = $category_id
        ");
=======
    public function getUsers()
    {
        $products = Users::all();
>>>>>>> Stashed changes
        return response()->json($products);
    }
}
