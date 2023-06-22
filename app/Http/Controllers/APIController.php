<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\Products;
use App\Models\Shops;

class APIController extends Controller
{
    public function importFromAPI()
    {
        $response = Http::get('https://localhost:3000/products');
        $data = $response->json();
        foreach ($data as $productData) {
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
        }

        return response()->json(['message' => 'Import successful']);
    }

    public function getShops() {
        $shops = Shops::all();
        return response()->json($shops);
    }
    public function getOneShops($shop_id) {
        // $shop = Shops::find($shop_id);
        $shop = Shops::where('shop_id', $shop_id)->first();
        return response()->json($shop);
    }
}
