<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

//  Route::get('/user/{id?}/{aktif?}', function ($id = 1, $aktif = "Y") {
//     // return view('welcome');
//     return "<h1> ini project pertama saya $id $aktif </h1>";
// })->where('id','[0-9]*') ;

Route::view('/','dashboard'); 

// Route::post('simpan', function () {
//         return"data berhasil disimpan";
// });

// Route::get('crud', function(){
//     return view('crud',['nama' => 'zahra']);
// });

// Route::prefix('master-data2')->group(function(){
//     Route::get('/data-karyawan',[CrudController::class,'index'])->name('dashboard');
//     Route::get('/data-kerja',[CrudController::class,'edit'])->name('dashboard');

// });
// Route::name('master-data2')->group(function(){
//     Route::get('/data-karyawan',[CrudController::class,'index'])->name('dashboard');
//     Route::get('/data-kerja',[CrudController::class,'edit'])->name('dashboard');

// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
