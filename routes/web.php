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
    return view('/Pengunjung/home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/pesan', function () {
    return view('/Pengunjung/pesan');
});

Route::get('/listPemilikKos', function () {
    return view('/Pengunjung/listPemilikKos');
});

Route::get('/mapViewPengunjung', function () {
    return view('/Pengunjung/mapViewPengunjung');
});

Route::get('/potonganHargaPengunjung', function () {
    return view('/Pengunjung/potonganHargaPengunjung');
});

Route::get('/pesan', function () {
    return view('/Pengunjung/pesan');
});
Route::get('/historypengunjung', function () {
    return view('/Pengunjung/historypengunjung');
});
Route::get('/pemilikkost', function () {
    return view('/Pengunjung/pemilikkost');
});

Route::get('/berandaPengguna', function () {
    return view('/Pengguna/berandaPengguna');
});

Route::get('/masaAktifPengguna', function () {
    return view('/Pengguna/masaAktifPengguna');
});

Route::get('/historyKosPengguna', function () {
    return view('/Pengguna/historyKosPengguna');
});

Route::get('/berandaPemilik', function () {
    return view('/Pemilik/berandaPemilik');
});

Route::get('/pesanKosPemilik', function () {
    return view('/Pemilik/pesanKosPemilik');
});

Route::get('/bookingPemilik', function () {
    return view('/Pemilik/bookingPemilik');
});

Route::get('/berandaAdmin', function () {
    return view('/Admin/berandaAdmin');
});

Route::get('/kostAdmin', function () {
    return view('/Admin/kostAdmin');
});
Route::get('/editKostAdmin', function () {
    return view('/Admin/editKostAdmin');
});
Route::get('/tambahKostAdmin', function () {
    return view('/Admin/tambahKostAdmin');
});

Route::get('/pemilikKostAdmin', function () {
    return view('/Admin/pemilikKostAdmin');
});
Route::get('/editPemilikKostAdmin', function () {
    return view('/Admin/editPemilikKostAdmin');
});
Route::get('/tambahPemilikKostAdmin', function () {
    return view('/Admin/tambahPemilikKostAdmin');
});

