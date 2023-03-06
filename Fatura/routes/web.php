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
    return view('auth.login');
});


Auth::routes();
//Auth::routes(['register'=> false]); // to close users register
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::resource('faturalar', 'FaturalarController');//faturalar listesi sunmak icin


Route::resource('faturalar', 'App\Http\Controllers\FaturalarController');
Route::resource('bolumler', 'App\Http\Controllers\BolumlerController');
Route::resource('urunler', 'App\Http\Controllers\UrunlerController');
//Route::get('/bolum/{id}', 'FaturalarController @geturunler');

//Route::get('bolum/{id}', [App\Http\Controllers\FaturalarController::class ,'geturunler']);




Route::get('bolum/{id}', [FaturalarController::class,'@geturunler']);



use App\Http\Controllers\AdminController;
Route::get('/{page}', 'App\Http\Controllers\AdminController@index');
