<?php
namespace App\Http\Controllers\API;

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

/* Route::any('proxy/{url}', function ($url) {
    $proxyUrl = urldecode($url);
    $response = Http::withHeaders(request()->header())
        ->withoutVerifying()
        ->send(request()->method(), $proxyUrl, [
            'timeout' => 30,
        ]);

    return $response->body();
})->where('url', '.*'); */

Route::middleware(['cors'])->group(function () {
    Route::get('/columns/getColumnsByBoard/{id}', [ColumnController::class, 'getColumnsByBoard']);
    Route::get('/tasks/getTasksByColumn/{id}', [TaskController::class, 'getTasksByColumn']);
    Route::resource('/boards', BoardController::class);
    Route::resource('/columns', ColumnController::class);
    Route::resource('/tasks', TaskController::class);
});

