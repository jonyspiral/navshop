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
Route::get('/','IndexController@loadIndex');
Route::get('/menu',function () {
  return view('/partials/menu')
});

Route::get('/register','Register@register');
Route::post('/register','Register@add');

Route::get('/login','IndexControlle@loadLogin');
Route::get('/categoriesList','CategoryController@getCategories');
Route::get('/categoryList/{id}','CategoryController@getRoute');
Route::get('/addProduct','ProductController@add');
Route::get('/miPerfil','MiPerfilController@toMiPerfil');




  /* $log= 'logout';
  $logTittle='Log out';
  $avatar='';


  $user= '';
  $email = '';
  $name= '';
  $lastName= '';

  $newPass= '';
  $password='';
return view('miPerfil',compact('user','email','name','lastName','password','avatar','log','logTittle',));*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
