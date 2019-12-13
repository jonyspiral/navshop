
@extends('layouts/headerFooter')
@section('css')
  <link rel="stylesheet" href="/css/login.css">
@endsection
@section('main')
<div id="padre"  class="contPadreFlex" style="width: 100px%; margin-top:90px; overflow:hidden;">
  <div class=" padd2">
    <h1 class="styleTitle center">Bienvenido!</br> {{($user->name.' '.$user->lastName)}}</h1>
  </div>
    <div  class="contPadreFlex" style="width: 26%; margin:2%; " >


            <div id="img" class=" styleLogin padd2" style=" justify-content: center; display: flex; flex-direction: column;align-items: center;">

                  <div id="containerLogo">
                    @if ($user->avatar)
                      <img class=""src="/storage/avatar/{{$user->avatar}}" alt="Yo"style="  ">
                    @else
                      <img class=""src="/storage/avatar/default.png" alt="Yo"style="  ">
                    @endif
                    <input type="file" accept="" name="avatar"  class=" borderRadiusUp file-input" id="avatar"style="width:100%;">
                  </div>
            </div>
    </div>
  <div class=""style="max-width: 40%;>
             <form class="" action="profile" method="post" enctype="multipart/form-data" >

                 <input type="text" class="form-control" id="user" placeholder="Enter user"   name="user" value="{{$user->user}}"  >
                 <label  class="center" name="email"  ><strong> {{$user->email}}</strong> </label>
                 <input type="text" class="form-control" id="name" placeholder="Enter name"   name="name" value="{{$user->name}}"  >
                 <input type="text" class="form-control" id="lastName" placeholder="Enter lastName"   name="lastName" value="{{$user->lastName}}" required>
                  <input class="form-control" name='password' type='password'  placeholder="Enter password"/>
                  <input class="form-control" name='newPass' type='password'   placeholder="Enter new password"/>
                  <input class="form-control" name='confirmPassword' type='password'  placeholder="Confirm new password"/>
                  <input class="center btn-primary btn" type='submit' value='enviar cambios'style="width:300px;" />
                  </form>
                  <div class="" style="margin-bottom:2%">

                  </div>
             <div class="">
                <ul class="center" style="padding-inline-start: 0px;">
                     <li class=" btn-primary btn">
                       Mis Compras
                     </li>
                     <li class=" btn-primary btn" >
                       Favoritos
                     </li>
                </ul>
             </div>
     </div>
</div>
@endsection
