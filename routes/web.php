<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('halaman');
});

Route::get('/halamanregister', function () {
    return view('halamanregister');
});
Route::get('/halamanlogin', function () {
    return view('halamanlogin');
});
Route::get('/halamanpenjualan', function () {
    return view('halamanpenjualan');
});
Route::get('/halamanpenjualan', function () {
    return view('halamanpenjualan');
});
Route::get('/halamantentangkami', function () {
    return view('halamantentangkami');
});
Route::get('/halamanpelatihan1', function () {
    return view('halamanpelatihan1');
});
Route::get('/halamanpelatihan2', function () {
    return view('halamanpelatihan2');
});
Route::get('/halamanebook', function () {
    return view('halamanebook');
});
Route::get('/halamankeranjang', function () {
    return view('halamankeranjang');
});
