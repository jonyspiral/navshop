<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class navshop extends Controller
{

public function getHeaderFooter(){

  // require_once('clases/Autoload.php');
  //require_once('/app\Http\Controllers\DataBase.php');
  //require_once('/app\Http\Controllers\Validator.php');
  //require_once('/app\Http\Controllers\DataBase.php');
  $db = new DataBase;
  $validator= New Validator ($db);
  if ($validator->estaElUsuarioLogeado()){
  $log= 'logout';
  $logTittle='Log out';
  $avatar='';/*$_SESSION['avatar'];*/
  }else{
  $log= 'login';
  $logTittle='Log in';
  $avatar='default.png';
  return view('index',compact('log','logTittle','avatar'));
}

}
public function login(){

    $email='';
  $errores=[];

  //require_once('clases/Autoload.php');
//   $usuario= null;
//
// //  $conexion = new Conexion();
//   $db= new DataBase;
  // $validator= ''/*New Validator ($db);*/
//   $auth = new Authenticator;

  //$email = '';
  //$password = '';
  //$errores = [];
  // $sql = ("SELECT * from usuarios");
  // $stmt = $conexion->prepare($sql);
  // $stmt->execute();
  // $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
  // var_dump($resultado);

//   if ($validator->estaElUsuarioLogeado()){
//       header('location:miPerfil');
//     }else{
//       if (isset($_COOKIE['mantener'])) {
// $usuario= $validator->buscarUsuarioEmail($_COOKIE['mantener']);
//         $auth->loguear($usuario);
//         header('location:miPerfil');
//     }
//   }
// if ($_POST) {
// $email = ($_POST['email']);
// $password = $_POST['password'];
// $errores = $validator->validarLogin($email,$password);
// //determino errores con la clase Validador
//   if (!$errores) {
//     $usuario = $bd->buscarUsuarioEmail($email);
//   //iniciar session
//     $auth->loguear($usuario);
//     header('location:miPerfil');

  // }
 return view('login',compact('email','errores'));
  }




}
