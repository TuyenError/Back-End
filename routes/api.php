<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request)   {
    return $request->user();
});

// user
Route::post('/register',[UserController::class,'Register']);
Route::post('/login',[UserController::class,'Login']);
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout',[UserController::class,'Logout']);
});

// shop
Route::get('/get-shops',[APIController::class,'getShops']);
Route::get('/get-shops/{id}',[APIController::class,'getOneShops']);
Route::get('/get-categories/{id}',[APIController::class,'getCategoriesBaseOnShop']);

Route::get('/get-categories',[APIController::class,'getAllCategory']);

Route::get('/get-products-shop/{id}',[APIController::class,'getProductsBaseOnShop']);

Route::get('/get-products',[APIController::class,'getProducts']);

Route::get('/get-products/{id}',[APIController::class,'getOneProducts']);

// select products theo category
Route::get('/get-products-category/{id}',[APIController::class,'getProductsFlowCategory']);

// cart
Route::get('/get-cart',[APIController::class,'getCart']);
Route::post('/add-to-cart',[APIController::class,'addToCart']);
Route::put('/update-quantity/{cart_id}/{scope}',[APIController::class,'updateQuantity']);


