<?php

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
Route::get('/admin', 'ArticleController@showArticleTable');
Route::get('/admin/article', 'ArticleController@showArticleTable');
Route::get('/admin/insert', 'ArticleController@showInsertArticleForm');
Route::get('/admin/update/{id}', 'ArticleController@showUpdateArticleForm');
Route::get('/admin/user', 'ProfileController@showUser');
Route::get('/detail/{id}', 'ArticleController@showDetail');
Route::post('/admin/post', 'ArticleController@addArticle');
Route::put('/admin/{id}', 'ArticleController@updateArticle');
Route::get('/member/delete/{id}', 'ProfileController@deleteProfile');
Route::get('/article/delete/{id}', 'ArticleController@deleteArticle');
Route::get('/profile/{id}', 'ProfileController@showProfile');
Route::get('/profile/history/{id}', 'ProfileController@showUserHistory');
Route::get('/formInput', 'MainController@showFormInput');
Route::post('/formInput', 'MainController@updateTinggiBeratBadan');
Route::get('/idealBadan', 'MainController@showKondisiBadan');
Route::get('/nutrisi', 'MainController@showKebutuhanGizi');
Route::get('/polaMakan', 'MainController@showPolaMakan');
Route::get('/', 'ArticleController@index');

Route::get('/login', 'LoginController@showLoginForm')->name('login')->middleware('guest');
Route::post('/login', 'LoginController@login')->middleware('guest');
Route::post('/logout', 'LoginController@logout')->middleware('auth');
Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'RegisterController@register');
// Auth::routes();
Route::get('/test', function () {
    return view('BuatArtikel');
});
Route::get('/home', 'ArticleController@index')->name('home');

Route::get('/testKondisiBadan', 'MainController@kondisiBadan');
Route::get('/testKebutuhanGizi', 'MainController@kebutuhanGizi');
Route::post('/testPolaMakan', 'MainController@testingPolaMakan');
