<?php

use App\Http\Controllers\APIController;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-shops',[APIController::class,'getShops']);
Route::get('/get-shops/{id}',[APIController::class,'getOneShops']);

Route::get('/get-categories/{id}',[APIController::class,'getCategories']);
Route::get('/get-products/{id}',[APIController::class,'getProductsBaseOnShop']);

Route::get('/get-cart',[APIController::class,'getCart']);
Route::post('/add-to-cart',[APIController::class,'addToCart']);

