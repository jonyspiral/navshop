@extends('layouts/headerFooter')
@section('main')
<div id="padre"  class="contPadreFlex" style="width: 96%; margin: 2%; overflow:hidden;" >
   <div id="main" class=" styleLogin padd2" style="  margin: 2%;" >


     <div class="containerExt" style=" justify-content: center; display: flex; flex-direction: column;align-items: center;">
 <h1 class="styleTitle center" >Bienvenido!</br> <?=($name.' '.$lastName) ?></h1>

         <div id="containerLogo">

           <img class=""src="img\avatar\<?=$avatar?>" alt="Yo"style="  ">
         </div>
<div class="">


     <form class="" action="miPerfil" method="post" enctype="multipart/form-data" >
          @csrf
         <input type="file" accept="img\avatar\<?=$avatar?>" name="avatar"  class=" borderRadiusUp file-input" id="avatar"style="width:100%;">
         <p> <?php /*(isset($errores) ? $errores : '') */?></p>


       <input type="text" class="form-control" id="user" placeholder="Enter user"   name="user" value="<?= $user ?>"  >
       <p> <?= (isset($errores['user']) ? $errores['user'] : '') ?></p>

       <label  class="center" name="email"  ><strong> <?= $email ?></strong> </label>
       <p> <?= (isset($errores['email']) ? $errores['email'] : '' ) ?></p>

       <input type="text" class="form-control" id="name" placeholder="Enter name"   name="name" value="<?= $name ?>"  >
       <p></p>

       <input type="text" class="form-control" id="lastName" placeholder="Enter lastName"   name="lastName" value="<?= $lastName ?>" required>
       <p></p>

   <div class="" style="margin-bottom:2%">

     <button class="center btn-primary btn"  type="submit" style="width:300px;">Enviar cambios</button>
   </div>

 </form>
</div>
<div class="">
 <form method='post' >

               <!-- <td>Old Password:</td> -->
                   <td><input class="form-control" name='password' type='password'  placeholder="Enter password"/></td>
                   <p> <?= (isset($errores['password']) ? $errores['password'] : '') ?></p>
               <tr>

                   <!-- <td>New Password:</td> -->
                   <td><input class="form-control" name='newPass' type='password'   placeholder="Enter new password"/></td>
                     <p> <?= (isset($errores['newPass']) ? $errores['newPass'] : '') ?></p>


                   <td><input class="form-control" name='confirmPassword' type='password'  placeholder="Confirm new password"/></td>
                   <p> <?= (isset($errores['confirmPassword']) ? $errores['confirmPassword'] : '') ?></p>
                   <td> <input class="center btn-primary btn" type='submit' value='Change Password'style="width:300px;" /></td>
                   <p> <?= (isset($resultado) ? $resultado : '') ?></p>
               </tr>
                </form>
</div>

 <div class="">
       <ul class="center" style="padding-inline-start: 0px;">
         <li class=" btn-primary btn">
           Mis Compras
         </li>
         <li class=" btn-primary btn" >
           Favoritos
         </li>
           <li class=" btn-primary btn" >
           Envios
         </li>
       </ul>

     </div>

     </div>
</div>
</div>
@endsection
