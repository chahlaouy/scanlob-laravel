<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;

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

// User Routes

Route::get('/qr-code', [UserAuthController::class, 'qrCode'])->name('user.qr-code');
Route::post('/create', [UserAuthController::class, 'createUser'])->name('user.create');
Route::post('/check', [UserAuthController::class, 'check'])->name('user.check');

// Admin Routes

Route::post('/admin/check', [AdminAuthController::class, 'check'])->name('admin.check');

Route::group(['middleware' => 'isLogged'], function(){
    
    //Routes for User
    
    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::post('/ajouter-info', [UserController::class, 'addUserInfo'])->name('user.addInfo');
    Route::get('/commandes', [UserController::class, 'commands'])->name('user.commands');
    Route::get('/cartes', [UserController::class, 'cards'])->name('user.cards');
    Route::get('/qr-code', [UserController::class, 'qrCode'])->name('user.qr-code');
    Route::get('/deconnexion', [UserAuthController::class, 'logout'])->name('user.logout');

    
    // Routes for admin
    
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/admin/gestion-offre', [AdminController::class, 'offers'])->name('admin.offers');
    Route::get('/admin/gestion-commands', [AdminController::class, 'index'])->name('admin.commands');
    Route::get('/admin/deconnexion', [AdminAuthController::class, 'logout'])->name('admin.logout');
});

Route::group(['middleware' => 'alreadyLoggedIn'], function(){

    // Routes for User
    
    Route::get('/connexion', [UserAuthController::class, 'login'])->name('user.login');
    Route::get('/inscription', [UserAuthController::class, 'register'])->name('user.register');
    
    // Routes for Admin
    
    Route::get('/admin/connexion', [AdminAuthController::class, 'login'])->name('admin.login');
    

});
