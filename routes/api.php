<?php

use App\Http\Controllers\ProviderController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('provider/{username}/categories', [ProviderController::class, 'categories']);
Route::get('provider/{service}/dates', [ProviderController::class, 'byServiceGetDates']);
Route::get('provider/{service}/date/{date}', [ProviderController::class, 'byDateGetTimes']);
