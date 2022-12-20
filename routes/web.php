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

Route::get('/', function () {
    return view('pagelanding');
});

Route::get('/page3', function () {
    return view('page3');
});

Route::get('/siswa/{id}', function ($id) {
    return "<h1>Nama siswa $id</h1>";
})->where(['id'=> '[0-9]+']);

Route::get('/mainAdmin', function () {
    return view('mainAdmin');
});

Route::get('/adminCust', function () {
    return view('mainAdmin-Cust');
});

Route::get('/adminOrder', function () {
    return view('mainAdmin-Order');
});