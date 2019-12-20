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

                    </div>
             <form class="" action="editProfile" method="post" enctype="multipart/form-data" >
                   @csrf


                     {{-- <input type="file" accept="" name="avatar"  class=" borderRadiusUp file-input" id="avatar"style="width:100%;" value="{{$user->avatar}}"> --}}
                     <div class="form-group row">
                         <div class="col-md-6">
                             <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar"value="{{$user->avatar}}"  autofocus>
                             @error('avatar')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                     </div>

                   <label  class="center" name="email"><strong> {{$user->email}}</strong> </label>
                   <div class="form-group row">
                       <div class="col-md-6">
                           <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                             name="name" value="{{$user->name}}"  placeholder="{{ __('Name') }}"autofocus>
                           @error('name')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                       </div>
                   </div>
                   <div class="form-group row">
                       <div class="col-md-6">
                           <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror"
                             name="lastName" value="{{$user->lastName}}"  autocomplete="lastName" placeholder="{{ __('lastName') }}"autofocus>
                           @error('lastName')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                       </div>
                   </div>
                  {{-- <div class="form-group row">
                      <div class="col-md-6">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password"  autocomplete="new-password"placeholder="{{ __('Password') }}">
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                    <div class="form-group row" >
                        <div class="col-md-6">
                      <input class="form-control" name='newPass' type='password'   placeholder="Enter new password"/>
                        </div>
                    </div>
                    <div class="form-group row" >
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control"
                            name="password_confirmation"   placeholder="{{ __('Confirm Password') }}">
                        </div>
                    </div>--}}
             <div class="center">
               <input class="center btn-primary btn" type='submit' value='enviar cambios'style="min-width: 200px;" />
             </div>
               </form>
    </div>
  </div>
@endsection
