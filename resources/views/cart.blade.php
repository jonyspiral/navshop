@extends('layouts/headerFooter')
@section('css')
  <link rel="stylesheet" href="/css/digital_movies.css">
  {{-- <link rel="stylesheet" href="/css/peliculas.css"> --}}
<link rel="stylesheet" href="/css/product.css">
@endsection
@section('main')
  <div class="" style="margin-top:90px; height:90vh; " >
        <section id="grupoTarjeta" class="" style="padding: 1%;">
          @foreach ($carts as $cart)
            <article id="" class="flexCenterH card styleLogin" style="padding: 1%;width: auto;flex-flow: nowrap;">

                            <div id="" class="" style="display: flex;/* overflow: hidden; *//* float:left; */padding: 0;margin: 1%;">
                            <img id="" src="storage/products/{{$cart->image}}" class="logo" style="width: 84px;/* height:50%; */overflow: hidden;float:left;">

                            {{$cart->pivot->quantify}}
                            </div>


                            <div class="card-body" style="padding: 0.5%;/* width:40%; */float:left;">
                                  <h6 name="" class="itemTitle" style="font-size: small;left: 0;margin-top: 0;position: relative;">{{$cart->name}}7</h6>
                            </div>

                            <div class="" style="width: fit-content;float:left;">
                                  <p class="price" style="  display: flex;  display: flex;  justify-items: flex-start;    margin: 1%;  flex-flow: wrap; ">
                                  <span class="priceOld" style=" margin: 0px;">${{$cart->price}}</span>${{$cart->getpriceOff()}}
                                </p>

                          </div>

                        <form action="/deleteProduct" method="post" id= "controlBox" class="card-text" style="display:contents;">
                            {{csrf_field()}}
                            {{-- <input type="hidden" name="id" value="{{$product->id}}"> --}}
                            {{-- <a type="submit" class="btn btn-primary" href="/editProduct/{{$product->id}}">E</a> --}}
                            {{-- <input type="submit"name="borrar" class="btn btn-success" href="/deleteProduct" value="-"> --}}

                            <div id="buttons" style="width: fit-content;float:left;">
                                <div id="buttons" style="width: fit-content;float:left;">
                              <a href="cart.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="/* justify-content: center; */height: 40px;width: 40px;/* color: black; */font-size: 1em;/* text-align: center; */">
                                -</a>
                                <a href="cart.html" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" style="/* justify-content: center; */height: 40px;width: 40px;/* color: black; */font-size: 1em;/* text-align: center; */">
                                  +</a>
                                  </div>
                        </form >
                </article>
          @endforeach
    </section>
  </div>
@endsection
