
@extends('layouts/headerFooter')
@section('css')
  <link rel="stylesheet" href="/css/login.css">
@endsection
@section('main')
<div id="padre"  class="contPadreFlex" style="width: 96%; margin: 2%; overflow:hidden;" >
    <div id="main" class=" styleLogin padd2" style="  margin: 2%;" >
        <div class="containerExt" style=" justify-content: center; display: flex; flex-direction: column;align-items: center;">
              <h1 class="styleTitle center" >Bienvenido!</br> {{($user->name.' '.$user->lastName)}}</h1>
              <div id="containerLogo">
                <img class=""src="{{$user->avatar}}" alt="Yo"style="  ">
              </div>
        <div class="">
           <form class="" action="miPerfil" method="post" enctype="multipart/form-data" >
                 <input type="file" accept="img\avatar\" name="avatar"  class=" borderRadiusUp file-input" id="avatar"style="width:100%;">
                 <p> </p>


               <input type="text" class="form-control" id="user" placeholder="Enter user"   name="user" value="{{$user->user}}"  >
               <p> </p>
               <label  class="center" name="email"  ><strong> {{$user->email}}</strong> </label>
               <p> </p>

               <input type="text" class="form-control" id="name" placeholder="Enter name"   name="name" value="{{$user->name}}"  >
               <p></p>

               <input type="text" class="form-control" id="lastName" placeholder="Enter lastName"   name="lastName" value="{{$user->lastName}}" required>
               <p></p>

                 <div class="" style="margin-bottom:2%">

                   <button class="center btn-primary btn"  type="submit" style="width:300px;">Enviar cambios</button>
                 </div>

             </form>
        </div>
        <div class="">
          <form method='post' >
                   <td><input class="form-control" name='password' type='password'  placeholder="Enter password"/></td>
                   <p> </p>
               <tr>


                   <td><input class="form-control" name='newPass' type='password'   placeholder="Enter new password"/></td>
                     <p></p>


                   <td><input class="form-control" name='confirmPassword' type='password'  placeholder="Confirm new password"/></td>
                   <p></p>
                   <td> <input class="center btn-primary btn" type='submit' value='Change Password'style="width:300px;" /></td>
                   <p> </p>
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
