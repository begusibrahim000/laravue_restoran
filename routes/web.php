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

// akses halaman login
Route::get('/', 'RestoranController@index')->middleware('keamanan.halaman.login');
// akses logic login di middleware dan fungsi login
Route::get('/login', 'RestoranController@login')->middleware('cek.akun.customer');
// akses halaman restoran jika customer berhasil login
Route::get('/restoran', 'RestoranController@restoran')->middleware('keamanan.halaman.restoran');
Route::get('/tambahOpsi', 'RestoranController@tambahOpsi')->middleware('keamanan.halaman.restoran');
Route::get('/tambahkanKeProduk', 'RestoranController@tambahKeProduk')->middleware('keamanan.halaman.restoran');
// akses logic logout
Route::get('/logout', 'RestoranController@logout');