<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/nos-offres', [HomeController::class, 'products']);
Route::get('/qr-code', [UserAuthController::class, 'qrCode'])->name('auth.qr-code');
Route::post('/create', [UserAuthController::class, 'createUser'])->name('auth.create');
Route::post('/check', [UserAuthController::class, 'check'])->name('auth.check');

Route::group(['middleware' => 'isLogged'], function(){
    
    //Routes for User
    
    Route::get('/deconnexion', [UserAuthController::class, 'logout'])->name('auth.logout');
    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/profile', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/payment', [UserController::class, 'index'])->name('user.dashboard');
    
    // Routes for admin
    
    Route::get('/admin/dashboard', [UserController::class, 'index'])->name('user.dashboard');
});

Route::group(['middleware' => 'alreadyLoggedIn'], function(){

    // Routes for User
    
    Route::get('/connexion', [UserAuthController::class, 'login'])->name('auth.login');
    Route::get('/inscription', [UserAuthController::class, 'register'])->name('auth.register');
    
    // Routes Fro Admin
    
    Route::get('/admin/connexion', [UserAuthController::class, 'login'])->name('auth.login');
    Route::get('/admin/inscription', [UserAuthController::class, 'register'])->name('auth.register');
    
});
