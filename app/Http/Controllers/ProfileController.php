<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\User;
use Auth;
class ProfileController extends Controller
{
  public function update( Request $req){
    $ruta='';
    $user=Auth::user();
    $reglas=[
          'name' => 'required|string|max:255',
          'lastName'=> 'required|string|max:255',
          'avatar' => ['nullable','image'],
          // 'is_admin'=> 'boolean|nullable'
          ];
        if (isset($req['newPass'])) {
          $reglas['password']= 'required|string';
          $reglas['newPass'] = 'min:6|string|confirmed';
          $reglas['password_confirmation'] = 'required|same:password' ;
          $validaNewPass = Validator::make($req->all(),$reglas);
              if ($validaNewPass->fails()) {
              // echo'estoy aca';
                    $validaPass = Validator::make($req->all(),[
                      'password'=> 'required|confirmed |string'

                    ]);                // redirect('post/create')
                  if (!$validaPass->fails()){
return 'llego a la ultima valida';
                    $user->password = bcrypt($req['password']);
                    dd($user);
                  }
              }
      }
      $mensajes=[
        "string"=>"el campo :attribute debe ser un texto",
        "unique"=>"el campo :attribute ya existe.",
        "min"=>"el campo :attribute debe ser mas largo",
        "max"=>"el campo :attribute debe ser mas corto",
        "numeric"=>"el campo :attribute debe ser un numero",
        "date"=>"el campo :attribute deber ser fecha"
      ];

  $this->validate($req,$reglas,$mensajes);

      if (isset($req['avatar'])) {
        $ruta= $req['avatar']->store('public/avatar');
        $fileName=basename($ruta);
        $user->avatar =$fileName;
      }
        $user->name = $req['name'];
      $user->lastName = $req['lastName'];
  return'ahora estoy aca che';
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
