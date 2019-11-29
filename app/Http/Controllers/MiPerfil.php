<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiPerfilController extends Controller
{
    public function toMiPerfil(){

// $db = new DataBase;
// $validator= New validator ($db);
// $auth= new authenticator;
$user= '';
$email = '';
$name= '';
$lastName= '';
$avatar = '';
$newPass= '';
$password='';
$confirmPassword='';
$errores=[];
$resultado='';
$_SESSION= '';


return view('miPerfil',compact('user','email','name','lastName','password','avatar','log','logTittle'));

    }
}
