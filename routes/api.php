<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');

});


///////////////// register with facebook using laravel socialite
Route::get('/auth/facebook', SocialiteController::class ,'redirectToFacebook');
Route::get('/auth/facebook/callback', SocialiteController::class ,'handleFacebookCallback');















?>
