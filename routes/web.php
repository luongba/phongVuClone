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
//FrontEnd
Route::get('/', function () {
    return view('FrontEnd.Trang-Chu.index');
});
Route::get('/Chi-Tiet-San-Pham', function () {
    return view('FrontEnd.Chi-Tiet-San-Pham.index');
});
