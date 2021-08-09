<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::view('dashboard/','dashboard'); 
// Route::view('/','pages.auth.login'); 
// Auth::routes();

Route::get('/', [App\Http\Controllers\Auth\LoginController::class,'showLoginForm'])->name('login');
Route::post('/', [App\Http\Controllers\Auth\LoginController::class,'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');
Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class,'index']);
    // Route::get('/dashboard', [App\Http\Controllers\UploadJadwalController::class,'index']);
    Route::get('/member', [App\Http\Controllers\MemberController::class,'index']);
}); 

Route::get('/home',[App\Http\Controllers\HomeController::class,'index'])->name('home');
