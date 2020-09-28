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

// Route::get('/', function () {
//   return view('welcome');
// });
Route::get('/', function () {
    return ('Selamat Datang');
});
Route::get('/about', function () {
    return ('1931710112 Tsania Risqi El Istiqomah');
});
Route::get('/artikel/{id}', function ($id){
    return ("Halaman artikel dengan id " .$id);
});