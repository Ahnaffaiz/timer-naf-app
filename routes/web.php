<?php

use App\Http\Controllers\MainController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [MainController::class, 'index']);
// Route::get('/timer', [MainController::class, 'timer']);
// Route::get('/setting', [MainController::class, 'setting']);
// Route::get('/preview', [MainController::class, 'preview']);
// Route::get('/engine', [MainController::class, 'engine']);
// Route::get('/engine-view', [MainController::class, 'engineView']);
Route::get('/timer/{timerCountdown}', [MainController::class, 'timerMulti']);
Route::get('/setting/{timerCountdown}', [MainController::class, 'settingMulti']);
Route::get('/preview/{timerCountdown}', [MainController::class, 'previewMulti']);

