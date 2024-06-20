<?php

use App\Http\Controllers\ReferralLinkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CatgoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.index');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'IsAdmin']], function () {
    Route::get('/dashboard', function () {
        return view('admin.layout');
    });
    Route::resource('/users', UserController::class);  // users route
    Route::resource('/category', CatgoryController::class); //category route
    Route::resource('/referral_links', ReferralLinkController::class);  // referral routes
});

Auth::routes();

Route::group(['prefix' => 'user', 'middleware' => ['auth', 'IsUser']], function () {
    Route::get('/dashboard', function () {
        return view('frontend.pages.dashboard');
    });
});
