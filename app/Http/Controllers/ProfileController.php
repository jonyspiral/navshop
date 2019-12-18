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
  $validaPass = Validator::make($req->all(), [
        'password' => 'required|string',
        'newPass' => 'min:6|string|confirmed',
        'password_confirmation' => 'required|same:password'
        ]);

        if ($validaPass->fails()) {
return "cagamos";
                // redirect('post/create')
                //             ->withErrors($validator)
                //             ->withInput();
            }

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
      }
      // dd($reglas);
      $mensajes=[
        "string"=>"el campo :attribute debe ser un texto",
        "unique"=>"el campo :attribute ya existe.",
        "min"=>"el campo :attribute debe ser mas largo",
        "max"=>"el campo :attribute debe ser mas corto",
        "numeric"=>"el campo :attribute debe ser un numero",
        "date"=>"el campo :attribute deber ser fecha"
      ];

      $ruta='';


  $user=Auth::user();
  // $this->validate($req,$reglas,$mensajes);

  if ($this->validate($req,$reglas,$mensajes)->fails()) {
          return 'cagamos';
          // redirect('post/create')
          //             ->withErrors($validator)
          //             ->withInput();
      }

      if (isset($req['avatar'])) {
        $ruta= $req['avatar']->store('public/avatar');
        $fileName=basename($ruta);
        $user->avatar =$fileName;
      }
      // if (isset($req['password'])){
      //     if (===$user->password && $req['newPass']=== $req['password_confirmation']) {
      //       // code...
      //     }
      //     }
      // }
      // // dd($req);exit;
      $user->name = $req['name'];
      $user->lastName = $req['lastName'];
      // $user->password = bcrypt($req['password']);


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
