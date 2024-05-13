
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PengalamanKerjaController;
use App\Http\Controllers\RiwayatTagihanController;
use App\Http\Controllers\PegawaiController;

Route::group(['namemspaace'=> 'Frontend'], function(){
    Route::resource('home', HomeController::class);

});
Route::group(['namemspaace' => 'Backend'], function() {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('pendidikan', PendidikanController::class);
    Route::resource('/pengalaman_kerja', PengalamanKerjaController::class);
    Route::resource('/riwayat_tagihan', RiwayatTagihanController::class);

   

});
Route::get('/session/create', 'App\Http\Controllers\SessionController@create');
Route::get('/session/show', 'App\Http\Controllers\SessionController@show');
Route::get('/session/delete', 'App\Http\Controllers\SessionController@delete');
Route::get('/pegawai/{nama}', 'App\Http\Controllers\PegawaiController@index');
Route::get('/formulir','App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses','App\Http\Controllers\PegawaiController@proses');
Route::get('/upload','App\Http\Controllers\UploadController@upload')->name('upload');
Route::post('/upload/proses','App\Http\Controllers\UploadController@proses_upload')->name('upload.proses');
Route::post('/upload/resize','App\Http\Controllers\UploadController@resize_upload')->name('upload.resize');
Route::get('/dropzone', 'App\Http\Controllers\UploadController@dropzone')->name('dropzone');
Route::post('/dropzone/store','App\Http\Controllers\UploadController@dropzone_store')->name('dropzone.store');
Route::get('/pdf_upload', 'App\Http\Controllers\UploadPdfController@pdf_upload')->name('pdf.upload');
Route::post('/pdf/store', 'App\Http\Controllers\UploadPdfController@pdf_store')->name('pdf.store');
Route::get('/pegawai',[PegawaiController::class, 'index']);
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/cari', [App\Http\Controllers\PegawaiController::class, 'cari'])->name('cari');