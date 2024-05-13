<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ApiPendidikanController;
use App\Model\Pendidikan;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'App\Http\Controllers\Backend'], function () {
    Route::get('api_pendidikan', 'ApiPendidikanController@getAll');
    Route::get('api_pendidikan/{id}', 'ApiPendidikanController@getPen');
    Route::post('api_pendidikan', 'ApiPendidikanController@createPen'); // Perbaikan: Ubah method menjadi POST
    Route::put('api_pendidikan/{id}', 'ApiPendidikanController@updatePen'); // Perbaikan: Ubah method menjadi PUT
    Route::delete('api_pendidikan/{id}', 'ApiPendidikanController@deletePen'); // Perbaikan: Ubah method menjadi DELETE
});