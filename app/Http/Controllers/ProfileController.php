<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class ProfileController extends Controller
{
  public function update( Request $req){

    $reglas=[
          'name' => 'required|string|max:255',
          'lastName'=> 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|min:6|confirmed|string',
          'avatar' => 'max:255',
          'is_admin'=> 'boolean|nullable'
      ];
      $mensajes=[
        "string"=>"el campo :attribute debe ser un texto",
        "unique"=>"el campo :attribute ya existe.",
        "min"=>"el campo :attribute debe ser mas largo",
        "max"=>"el campo :attribute debe ser mas corto",
        "numeric"=>"el campo :attribute debe ser un numero",
        "date"=>"el campo :attribute deber ser fecha"
      ];
      $ruta='';
      $fileName=  '';
      $user=  User::find( Auth::user()->id);

  
      $this->validate($req,$reglas,$mensajes);
      if (isset($data['avatar'])) {
        $ruta= $data['avatar']->store('public/avatar');
        $fileName=basename($ruta);

      }
        $user=  User::find( Auth::user()->id);
        dd($user);
        // return 'aca estoy';
      $user->name = $req['name'];
      $user->lastName = $req['lastName'];
      // $user->password = bcrypt($req['password']);
      $user->avatar =$fileName;
      $user->save();
      return back();
          // return redirect()->back();
}
public function edit(){
      $user = Auth::user();
      $title='Mi Perfil';
  return view('/editProfile',compact('user','title'));
}
}
