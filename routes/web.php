<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';

// Hiển thị form quên mật khẩu
Route::get('/forgot-password', 'App\Http\Controllers\ForgotPasswordController@showForm')->name('password.request');
// Gửi email xác nhận quên mật khẩu
Route::post('/forgot-password', 'App\Http\Controllers\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Hiển thị form nhập mật khẩu mới
Route::get('/reset-password/{token}', 'App\Http\Controllers\ResetPasswordController@showResetForm')->name('password.reset');
// Lưu mật khẩu mới
Route::post('/reset-password', 'App\Http\Controllers\ResetPasswordController@reset')->name('password.update');



