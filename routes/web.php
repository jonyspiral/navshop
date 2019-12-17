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

Route::get('/addProduct/{id}','ProductController@loadAdd')->middleware(['auth', 'is_admin']);

Route::post('/addProduct','ProductController@add')->middleware(['auth', 'is_admin']);

Route::get('/detailProduct/{id}','ProductController@show');
Route::get('/editProduct/{id}','ProductController@loadFormEdit')->middleware(['auth', 'is_admin']);

Route::post('/editProduct/{id}','ProductController@update')->middleware(['auth', 'is_admin']);

Route::post('/deleteProduct','ProductController@delete')->middleware(['auth', 'is_admin']);



Route::get('/editProfile','profileController@edit')->middleware('auth');

Route::post('/editProfile','profileController@update')->middleware('auth');

// Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/logout', function(){
   Auth::logout();
   return Redirect::to('login');
});
Route::get('/test', function(){

   return view('test');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
/*
GET  | login                  | Auth\LoginController@showLoginForm
POST | login                  | Auth\LoginController@login
POST | logout                 | Auth\LoginController@logout
POST | password/email         | Auth\ForgotPasswordController@sendResetLinkEmail
GET  | password/reset         | Auth\ForgotPasswordController@showLinkRequestForm
POST | password/reset         | Auth\ResetPasswordController@reset
GET  | password/reset/{token} | Auth\ResetPasswordController@showResetForm
GET  | register               | Auth\RegisterController@showRegistrationForm
POST | register               | Auth\RegisterController@register
*/
