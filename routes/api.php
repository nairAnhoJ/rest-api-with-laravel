<?php

use App\Http\Controllers\Api\V1\DepartmentController;
use App\Http\Controllers\Api\V1\SiteController;
use App\Http\Controllers\Api\V1\TicketController;
use App\Http\Controllers\Api\V1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('test', function () {
    return 'API routes are working';
});

// Route::group(['prefix' => 'v1'], function(){
//     Route::apiResource('departments', DepartmentController::class);
//     Route::apiResource('sites', SiteController::class);
//     Route::apiResource('users', UserController::class);
//     Route::apiResource('tickets', TicketController::class);
// });

Route::prefix('v1')->group(function(){
    Route::apiResource('departments', DepartmentController::class);
    Route::apiResource('sites', SiteController::class);
    Route::apiResource('users', UserController::class);
    Route::apiResource('tickets', TicketController::class);
});
