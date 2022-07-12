<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SocialShareButtonsController;

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



Auth::routes();


Route::get('/' , [SiteController::class,'index'])->name('index');
Route::get('p/{id}' , [SiteController::class,'p'])->name('p');

Route::prefix('admin')->name('admin.')->middleware(['auth','is_admin'])->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('index');

    Route::resource('Post', PostController::class);


});

Route::get('/social-media-share', [SocialShareButtonsController::class,'ShareWidget']);
