<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('signup');
})->name('signup');


Route::get('/welcome', function () {
    if(Auth::check()){
        return view('welcome');
    }else{
        return redirect()->intended('/');
    }
});

Route::post('/register', 'App\Http\Controllers\RegistrationController@store');

Route::post('/login', 'App\Http\Controllers\SessionsController@store');

Route::get('/logout', 'App\Http\Controllers\SessionsController@destroy');

Route::get('oauth/{driver}', 'App\Http\Controllers\SocialiteLoginController@redirectToProvider')->name('social.oauth');

Route::get('oauth/{driver}/callback', 'App\Http\Controllers\SocialiteLoginController@handleProviderCallback')->name('social.callback');