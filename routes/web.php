<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/reports', [\App\Http\Controllers\ReportsController::class, 'indexReports'])->name('controller.reports');

Route::get('/users-login', [\App\Http\Controllers\ReportsController::class, 'getUserLogin'])->name('get.user.login');


Route::middleware(['auth'])->group( function() {
    /* Route::get(
        '/landing',
        [ LandingController::class, 'index' ]
    )->name('landing'); */
    Route::get(
        '/programa',
        [ LandingController::class, 'indexPrograma' ]
    )->name('programa');
    Route::get(
        '/preescolar',
        [ LandingController::class, 'indexOne' ]
    )->name('day-one');
    Route::get(
        '/primaria',
        [ LandingController::class, 'indexTwo' ]
    )->name('day-two');
    Route::get(
        '/secundaria',
        [ LandingController::class, 'indexThree' ]
    )->name('day-three');

    Route::get(
        '/import-view',
        [ LandingController::class, 'importView' ]
    )->name('import-view');
    Route::post(
        '/import-data',
        [ LandingController::class, 'importData' ]
    )->name('import-data');
});


Route::get('/', function () {
    //return view('/login');
    return redirect('/login');
})->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* Route::middleware(['first', 'second'])->group(function () {
    Route::get(
        '/user/profile',
        [UserProfileController::class, 'show']
    )->name('profile');

    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
}); */
