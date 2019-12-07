<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class MiPerfilController extends Controller
{
    public function toMiPerfil(){
  $Userlog = Auth::user();
  $user= $Userlog->user;
  $email = $Userlog->email;
  $name= $Userlog->name;
  $lastName= $Userlog->lastName;
  $avatar = $Userlog->avatar;
  $newPass= '';
  $password=$Userlog->Password;
  $confirmPassword='';
  $title='Mi Perfil';

  if ($Userlog==null){
    $log= 'login';
    $logTitle='Log in';
    $avatar='/img/avatar/default.png';
    return redirect('login');
  }else{
    $log= 'logout';
    $logTitle='Log out';
    $avatar='/img/avatar/'.$Userlog->avatar;
  }
    return view('miPerfil',compact('user','email','name','lastName','password','log','logTitle','avatar','title'));



}
}
