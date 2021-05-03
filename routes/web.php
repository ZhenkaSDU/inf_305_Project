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
use App\Http\Controllers\MemberController;
use App\Http\Controllers\All_controllers_functions;
use App\Http\Controllers\All_controllers_procedures;

Route::get('/index', function () {
    return view('index');
});
Route::get('/info', function(){
    return view('info');
});

Route::get('/ACF', [All_controllers_functions::class, 'bestThree']);
Route::get('/ACF', [All_controllers_functions::class, 'limitation']);
Route::get('/ACF', [All_controllers_functions::class, 'year']);
Route::get('/ACF', [All_controllers_functions::class, 'findMovieByCountry']);

Route::get('/ACP', [All_controllers_procedures::class, 'print_film']);
Route::get('/ACP', [All_controllers_procedures::class, 'Update']);
Route::get('/ACP/{NAME}', [All_controllers_procedures::class, 'welcome_msg']);
Route::get('/ACP/{country}', [All_controllers_procedures::class, 'findMovieByCountry']);

Route::get('/data_edit', [MemberController::class, 'list']);
Route::get('/list', [MemberController::class, 'list']);
Route::get('/index/title', [TestController::class, 'test_title']);
Route::get('/index/year', [TestController::class, 'test_year']);
Route::get('/index/duration', [TestController::class, 'test_duration']);
Route::get('/index/country', [TestController::class, 'test_country']);

Route::get('/delete/{show_id}', [MemberController::class, 'delete']);
Route::get('/update/{show_id}', [MemberController::class, 'showData']);
Route::post('update', [MemberController::class, 'update']);
Route::post('/update', [MemberController::class, 'update']);
Route::post('update', [MemberController::class, 'update']);
