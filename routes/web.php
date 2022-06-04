<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WatchController;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/watch', function () {
    return view('watch');
});
Route::get('/', [WatchController::class, 'index']);

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
// Route::get('/admin', function () {
//     return view('admin');
// });
Route::post('/admin', [WatchController::class, 'adminlogin']);

Route::get('/admin', function () {
    return view('home');
});

Route::post('delete/{id}', [WatchController::class, 'delete']);

Route::get('delete/{id}', function () {
    return view('home');
});
Route::get('/insert', function () {
    return view('insert');
});
Route::post('store', [WatchController::class, 'store']);
Route::post('edit/{id}', [WatchController::class, 'edit']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
