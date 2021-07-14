<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DailyQiitaRankController;
use App\Http\Controllers\DailyGithubRankController;
use App\Http\Controllers\LanguageDetailController;
use App\Http\Controllers\WeeklyQiitaRankController;
use App\Http\Controllers\MonthlyQiitaRankController;
use App\Http\Controllers\WeeklyGithubRankController;
use App\Http\Controllers\MonthlyGithubRankController;

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

    Route::get('/dailyQiitaRank/{days}', [DailyQiitaRankController::class, 'index']);
    Route::get('/weeklyQiitaRank/{week}', [WeeklyQiitaRankController::class, 'index']);
    Route::get('/monthlyQiitaRank/{month}', [MonthlyQiitaRankController::class, 'index']);

    Route::get('/dailyGithubRank/{days}', [DailyGithubRankController::class, 'index']);
    Route::get('/weeklyGithubRank/{week}', [WeeklyGithubRankController::class, 'index']);
    Route::get('/monthlyGithubRank/{month}', [MonthlyGithubRankController::class, 'index']);

    Route::get('/getLanguageDetail/{languageId}', [LanguageDetailController::class, 'index']);
});