<?php

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
Route::prefix('product')->group(function () {
    route::get('edit',function () {return "Bạn đang ở nhom/nhom1";});
    route::get('/','Product@index');
    route::get('add','Product@add');
    route::post('add','Product@store');
});