@extends('layouts/headerFooter')
@section('css')
  <link rel="stylesheet" href="/css/login.css">
@endsection
@section('main')
<div id="padre"  class="contPadreFlex" style=" margin-top:90px; overflow:hidden;">
  <div class=" padd2"style=" display:contents;">
    <div class="containerDentro" >
        <img src="storage\avatar\default.png" alt="Me" class="center logo" style="height:150px; " >
    </div>
    <div class="">
        <form class="" action="" method="post" enctype="multipart/form-data">
          @csrf

        <div class="form-group row">
            <div class="col-md-6">
                <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}"  autocomplete="avatar" autofocus>
                @error('avatar')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
      <div class="form-group row">
          <div class="col-md-6">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}"
                name="email" value="{{ old('email') }}"  autocomplete="email">
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="form-group row">
          <div class="col-md-6">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                name="name" value="{{ old('name') }}"  autocomplete="name" placeholder="{{ __('Name') }}"autofocus>
              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="form-group row">
          <div class="col-md-6">
              <input id="name" type="text" class="form-control @error('lastName') is-invalid @enderror"
                name="lastName" value="{{ old('lastName') }}"  autocomplete="lastName" placeholder="{{ __('lastName') }}"autofocus>
              @error('lastName')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
      <div class="form-group row">
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
                <input id="password-confirm" type="password" class="form-control"
                name="password_confirmation"  autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
            </div>
        </div>
        <div class="form-group row">
          <div class="col-md-6 " style="display:inline-flex;">
            <input type="checkbox" name="mantener" class="" id="mantener"style="width:10%">
            <label class="form-check-label" for="mantener">Dejarme Conectado</label>
          </div>
        </div>
          <div class="form-group row" >

              <div class="col-md-6 " style="display:inline-flex;">
              <input id="is_admin" type="checkbox" class="form-control @error('is_admin') is-invalid @enderror"
                name="is_admin" value="{{ old('is_admin') }}"  autocomplete="is_admin" autofocus id="mantener"style="width:10%">
              <label for="is_admin" class="col-md-4 col-form-label text-md-right">{{ __('Administrador') }}</label>
              @error('is_admin')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              </div>
          </div>


            <div class="">
              <button class="center btn-primary btn"  type="submit" ;>Send</button>
            </div>
          </form>
        </div>
      </div>
  </div>
@endsection
