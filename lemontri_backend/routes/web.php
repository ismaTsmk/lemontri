<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\qrCodeController;

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
    return view('welcome');
});

Route::get("/qr_code/{qr}",[qrCodeController::class,"qrCodeGenerator"])->name('qr.generator');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
