<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::get("/cycle/{id}",[ApiController::class,"getCycle"])->name('cycle.show');

Route::get("/consigne",[ApiController::class,"getAllConsign"])->name('consign.index');
Route::get("/consigne/{id}/cycle",[ApiController::class,"getcycleConsign"])->name('consign.show.cycle');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
