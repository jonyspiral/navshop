
@extends('layouts/headerFooter')
@section('css')
  <link rel="stylesheet" href="/css/login.css">
@endsection
@section('main')
<div id="padre"  class="contPadreFlex" style=" margin-top:90px; overflow:hidden;">
  <div class=" padd2"style=" display:contents;">
    <h1 class="styleTitle center">Bienvenido!</br> {{($user->name.' '.$user->lastName)}}</h1>
  </div>
    <div  class="contPadreFlex center" style=" max-width:200px; " >
            <div id="img" class=" styleLogin padd2 center" style=" margin-bottom:2%; j display: flex; flex-direction: column;">
                  <div id="containerLogo">
                    @if ($user->avatar)
                      <img class=""src="/storage/avatar/{{$user->avatar}}" alt="Yo"style="  ">
                    @else
                      <img class=""src="/storage/avatar/default.png" alt="Yo"style="  ">
                    @endif
                  </div>
    <input type="file" accept="" name="avatar"  class=" borderRadiusUp file-input" id="avatar"style="width:100%;">
            </div>


             <form class="" action="profile" method="post" enctype=" multipart/form-data" >
                   <input type="text" class="form-control" id="user" placeholder="Enter user"   name="user" value="{{$user->user}}"  >
                   <label  class="center" name="email"><strong> {{$user->email}}</strong> </label>
                   <input type="text" class="form-control" id="name" placeholder="Enter name"   name="name" value="{{$user->name}}"  >
                   <input type="text" class="form-control" id="lastName" placeholder="Enter lastName"  name="lastName" value="{{$user->lastName}}" required>
                  <input class="form-control" name='password' type='password'  placeholder="Enter password"/>
                  <input class="form-control" name='newPass' type='password'   placeholder="Enter new password"/>
                  <input class="form-control" name='confirmPassword' type='password'  placeholder="Confirm new password"/>
             <div class="center">
               <input class="center btn-primary btn" type='submit' value='enviar cambios'style="min-width: 200px;" />
             </div>
               </form>
    </div>
  </div>


@endsection
