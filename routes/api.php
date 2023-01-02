<?php

use App\Http\Controllers\Api\PropertyController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('get-properties',[PropertyController::class, 'getProperties']);
Route::post('store-property',[PropertyController::class, 'storeProperty']);
Route::post('update-property',[PropertyController::class, 'updateProperty']);
Route::delete('delete-property',[PropertyController::class, 'deleteProperty']);

