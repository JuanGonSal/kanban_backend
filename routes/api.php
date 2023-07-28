<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

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
Route::group([
    'middleware' => 'cors',
    'prefix' => 'auth'
    ], function () {
        Route::post('login', [AuthController::class, 'login']);
        Route::post('register', [AuthController::class, 'register']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::get('user-profile', [AuthController::class, 'userProfile']);
});

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::group([
    'middleware' => 'auth:sanctum'
    ], function () {
        Route::get('/users_inactive', [UserController::class, 'getUsersInactive']);
        Route::resource('/users', UserController::class);
        Route::resource('/roles', RoleController::class);
        Route::resource('/teams', TeamController::class);

    Route::get('/columns/getColumnsByBoard/{id}', [ColumnController::class, 'getColumnsByBoard']);
    Route::get('/tasks/getTasksByColumn/{id}', [TaskController::class, 'getTasksByColumn']);
    Route::resource('/boards', BoardController::class);
    Route::resource('/columns', ColumnController::class);
    Route::resource('/tasks', TaskController::class);
    Route::resource('/tags', TagController::class);
});

