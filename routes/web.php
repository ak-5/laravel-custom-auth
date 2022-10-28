<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;
// use \App\Models\Banks;
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


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');
Route::get('register', [AuthController::class, 'register_frm'])->name('register');
Route::post('register', [AuthController::class, 'register_data'])->name('register.post');
Route::get('home', [AuthController::class, 'show_dashboard'])->name('home');
Route::get('logout', [AuthController::class, 'logout']);




// Route::get('/', [TestController::class, 'index']);
Route::get('/', function () {

    // return DB::connection('mysql_1')->table('customer_pre_emis')->first();

    return view('welcome');
});

Route::get('banks', function () {
    return Mobi::getBrand();
    // $b=Banks::first();
    // echo url()->full();
});
Route::get('flexbox-tutorial', function() {

    return view('flexbox_tutorial');
});

// Route::get('bank/name', function() {

//     $instance = new \App\Services\Information;

//     return $instance->example();

// })