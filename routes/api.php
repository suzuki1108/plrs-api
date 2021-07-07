<?php

use App\Http\Controllers\DailyQiitaRankController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// CORSを許可
Route::middleware(['cors'])->group(function () {

    Route::get('/test', [TestController::class, 'index']);
    Route::get('/dailyQiitaRank/{days}', [DailyQiitaRankController::class, 'index']);

});