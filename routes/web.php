<?php

use App\Http\Controllers\ReferralLinkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CatgoryController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//public routes
Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/terms_condition/{id}', 'terms_condition')->name('terms_condition');
    Route::get('/referral_code', 'referral_code')->name('referral_code');
    Route::get('/how_it_works', 'how_it_works')->name('how_it_works');
    Route::get('/user_profile/{id}','user_profile_public')->name('user_profile');
});


//admin routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'IsAdmin']], function () {
    Route::get('/dashboard', function () {
        return view('admin.layout');
    });
    Route::resource('/users', UserController::class);  // users route
    Route::resource('/category', CatgoryController::class); //category route
    Route::resource('/referral_links', ReferralLinkController::class);  // referral routes
});

Auth::routes();

//user routes protected
Route::group(['prefix' => 'user', 'middleware' => ['auth', 'IsUser']], function () {
    Route::get('/profile_dashboard', [FrontendController::class, 'profile_dashboard'])->name('profile_dashboard');
    Route::get('/edit_profile/{id}', [FrontendController::class, 'edit_profile_get_details'])->name('edit_profile');
    Route::post('/update_profile/{id}',[FrontendController::class,'update_profile'])->name('update_profile');

    // Route::get('/dashboard', function () {
    //     return view('frontend.pages.dashboard');
    // });
});
