<?php

use App\Http\Controllers\AdminShopController;
use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;



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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
// get user
Route::get('/get-one-user',[APIController::class,'getOneUser']);

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
Route::get('/get-cart',[CartController::class,'getCart']);
Route::post('/add-to-cart',[CartController::class,'addToCart']);
Route::put('/update-quantity/{cart_id}/{scope}',[CartController::class,'updateQuantity']);
Route::delete('/delete/{cart_id}',[CartController::class,'Delete']);

// đăng ký account
Route::post('/register',[UserController::class,'Register']);
Route::post('/login',[UserController::class,'Login']);
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout',[UserController::class,'Logout']);
});


// payment
Route::post('/payment/{radioValue}/{totalPrice}',[PaymentController::class,'payment_VnPay']);
Route::post('/thankfull/{radioValue}/{totalPrice}',[PaymentController::class,'payment_VnPay']);
Route::post('/order',[PaymentController::class,'OrderVnpay']);

// admin shop
Route::get('/get-product-AdminShop',[AdminShopController::class,'getProductAdminShop']);
Route::post('/add-product',[AdminShopController::class,'addProduct']);
Route::delete('/delete-product/{id}',[AdminShopController::class,'deleteProduct']);
Route::post('/update-product/{id}',[AdminShopController::class,'updateProduct']);
Route::get('/get-order',[AdminShopController::class,'Order']);


