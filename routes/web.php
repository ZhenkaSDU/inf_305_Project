<?php

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
use App\Http\Controllers\TestController;
Route::get('/data', [TestController::class, 'test']);

Route::get('/index', function () {
    return view('index');
});
Route::get('/info', function(){
    return view('info');
});
Route::get('/data_edit', function(){
    return view('data_edit');
});
Route::get('/index/title', [TestController::class, 'test_title']);
Route::get('/index/year', [TestController::class, 'test_year']);
Route::get('/index/duration', [TestController::class, 'test_duration']);
Route::get('/index/country', [TestController::class, 'test_country']);


