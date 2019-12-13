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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('','IndexController@loadIndex');
Route::get('/menu','CategoryController@menu');

// Route::get('/register','Register@register');
// Route::post('/register','Register@add');


Route::get('/categoriesList','CategoryController@getCategories');
Route::get('/categoryList/{id}','CategoryController@getRoute');
Route::get('/addProduct/{id}','ProductController@loadForm');
Route::post('/addProduct','ProductController@add');
Route::get('/detail/{id}','ProductController@loadFormDetail');
Route::get('/editProduct/{id}','ProductController@loadFormEdit');
Route::post('/editProduct/{id}','ProductController@update');
Route::post('/deleteProduct','ProductController@delete');


Route::get('/profile','profileController@show');
Route::get('/editProfile','profileController@update');

// Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
