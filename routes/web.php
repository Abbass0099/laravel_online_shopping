<?php
use App\Sector;
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
    $sectors = Sector::all();
    return view('home.home', ['sectors' => $sectors]);
});

Route::view('how-it-works', 'home.how_it_works');

Route::get('about-us', function(){
    return view('home.about');
});

// Register route
Route::post('/seller_register', "SellerAuth\RegisterController@register");
// Seller Login
Route::post('/seller_login', 'SellerAuth\LoginController@handle');
Route::get('/seller/profile', 'SellerController@profile');
// Seller routes
Route::get('dashboard', 'SellerController@dash');
Route::get('ads/all', 'SellerController@all_ads');
Route::get('ads/create', 'SellerController@create_form');
Route::post('ads/create', 'SellerController@save_ad');
Route::any('seller/logout', 'SellerController@logout');
// Auth routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
