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
// ============DAFTAR MENU UTAMA======================
Route::get('/', function () {
    return view('Home');
});

Route::get('/pageone', function () {
    return view('menu.pageone');
});

Route::get('/tentang', function(){
    return view('menu.tentang');
});

Route::get('Gallery', 'App\Http\Controllers\GalleryController@userview');

Route::get('Artikel' , 'App\Http\Controllers\ArtikelController@userview');

Route::get('/susunan', function(){
    return view('menu.susunan');
});

Route::get('/kontak', function(){
    return view('menu.kontak');
});
Route::get('/masjid', function(){
    return view('menu.lembaga.masjid');
});
// ======================================================



// ============DAFTAR subMENU AGENDA======================
Route::get('/harian', function(){
    return view('menu.agenda.harian');
});
Route::get('/mingguan', function(){
    return view('menu.agenda.mingguan');
});
Route::get('/bulanan', function(){
    return view('menu.agenda.bulanan');
});
Route::get('/tahunan', function(){
    return view('menu.agenda.tahunan');
});
Route::get('/agenda', function(){
    return view('menu.agenda');
});
// =======================================================


// ========== subMenu Madrasah Diniyyah =================

Route::get('/susunanDiniyyah', function(){
    return view('menu.lembaga.madrasah.susunanDiniyyah');
});

Route::get('/daftarkitab', function(){
    return view('menu.lembaga.madrasah.daftarkitab');
});

Route::get('/tenagaPengajar', function(){
    return view('menu.lembaga.madrasah.tenagaPengajar');
});

Route::get('/informasiPendaftaran', function(){
    return view('menu.lembaga.madrasah.informasiPendaftaran');
});

// ========== subMenu Lembaga yg Dikelola =================

Route::get('/kajian', function(){
    return view('menu.lembaga.kajian');
});

Route::get('/tpq', function(){
    return view('menu.lembaga.tpq');
});
// ========================================================




// =========== MENU ADMIN ==================================

Route::get('/admin-yayasan', function(){
    return view('Admin.Menu.adminHome');
});

Route::resource('adminArtikel', 'App\Http\Controllers\ArtikelController');

Route::resource('adminGallery', 'App\Http\Controllers\GalleryController');

