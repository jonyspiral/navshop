<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register extends Controller
{
  public function register(){

   // $conexion= new Conexion;
   $db = new DataBase;
   $validador= New Validator ($db);
     if ($validador->estaElUsuarioLogeado()){
         header('location:miPerfil');
     }

   $user ='';
   $email= '';
   $name ='';
   $lastName='';
   $password= '';
   $confirmPassword = '';
   $errores =[];
   $avatar='default.png';
   // if ($_POST) {
   //   	//verifico si el archivo se subio a temporal de php
   //     if (isset($_FILES['avatar'])){
   //         if ($_FILES['avatar']['error'] === 0) {
   //       $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
   //             if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
   //             $errores['avatar']= 'Formato de archivo invalido';
   //             } else {
   //             $avatar = $bd->subirAvatar($_FILES['avatar'], $email);
   //       //$avatar=$_FILES['avatar']['tmp_name']; // no se como hacer una preview de la imagen
   //             }
   //         }
   //     }
   //       //armo $variables
   //      $user = $_POST ['user'];
   //      $email = $_POST['email'];
   //      $name = $_POST['name'];
   //      $lastName= $_POST['lastName'];
   //      $password = $_POST['password'];
   //      $confirmPassword = $_POST['confirmPassword'];
   //             //comienzo a validar
   //
   //           $errores = $validador->validarRegistro($user,$email,$name,$lastName,$password,$confirmPassword,$avatar);//
   //
   //            /*verifico errores , guardo y redirijo a mi perfil*/
   //             if (!$errores) {
   //               $bd->guardarUsuario($user,$email,$name,$lastName,$password,$avatar);
   //               $usuario= $bd->buscarUsuarioEmail($email);
   //               $auth = new Autenticador;
   //               $auth->loguear($usuario);
   //               header('location:miPerfil.php');
   //             }
    return view('register',compact('user','email','name','lastName','password'));
    return view('miPerfil');
  }
}
