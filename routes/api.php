<?php

use App\Http\Controllers\Api\ChangeBackgroundController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get( 'change-background', [ ChangeBackgroundController::class, 'changeBackgroundPage' ] );

Route::get('/users-login', [\App\Http\Controllers\ReportsController::class, 'getUserLogin'])->name('get.user.login');
Route::get('/users-online', [\App\Http\Controllers\ReportsController::class, 'usersOnline'])->name('get.user.online');
Route::get('/books-count', [\App\Http\Controllers\ReportsController::class, 'countBooks'])->name('get.books.count');

