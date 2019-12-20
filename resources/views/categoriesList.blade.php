@extends('layouts/headerFooter')
@section('css')
  <link rel="stylesheet" href="/css/digital_movies.css">
  {{-- <link rel="stylesheet" href="/css/peliculas.css"> --}}
<link rel="stylesheet" href="/css/product.css">
@endsection
@section('main')

        <div class="" style="margin-top:90px">
            <h2 class="titulo-nav" style="margin-bottom: auto;">

                <div class=""style="display: -webkit-box; font: -webkit-control;">
                  <ol class="breadcrumb">
                   <li class="breadcrumb-item">
                       <a href="peliculas.php?order=title">nombre</a>
                   </li>
                   <li class="breadcrumb-item">
                       <a href="">precio</a>
                   </li>
                   <li class="breadcrumb-item ">
                       <a href="peliculas.php?order=rating">descuento</a>
                   </li>

                 </ol>

                </div>
                <nav style="margin-bottom: 0%;">
                  {{-- pagination --}}
                  {{$products->links()}}
                </nav>
                @if (Auth::user()->is_admin)
                  <p class="card-text">
                    <a class="btn btn-primary" href="/addProduct/{{$id}}">+</a>
                    </p>
                @endif
              </h2>

              <div class="">
            @foreach ($products as $product )

           <article class="card styleLogin" style="">
             <div class="container center">
               <h6 class="center" style=" ">{{$product->name}}</h6>
             </div>

              <div id="imagenCard" class="contPadreFlex" style="">
                @if (!$product->image)
                  <div class=""  style="width:100%;border-radius: 15px;height:300px;">
                        Imagen No Disponible
                  </div>
                @else
                  <img id="" src="/storage/products/{{$product->image}}" class="" style="width: 100%;border-radius: 15px;" alt="">
                @endif
               </div>
               <div id="containerButton"class="center" style="">
                 <form action="/addCart/{{$product->id}}" method="post" id= "controlBox" class="card-text" style="display:contents;">
                    @csrf
                     <input type="hidden" name="id" value="{{$product->id}}">
                       @if (Auth::user()->is_admin)
                   <a type="submit" href="/editProduct/{{$product->id}}"class="btn btn-primary" >E</a>
                   {{-- <form class="" action="/deleteProduct/{{$product->id}}" method="post"> --}}
                    {{-- <input type="submit"  href="" name="borrar" class="btn btn-success" value="-"> --}}

                              @endif
                       @if  (!$product->stock )
                         <input type="submit" id="buttonCard1"name="add" href="" class=" btn btn-primary buttonCard btn-lg active " role="button"
                          aria-pressed="true" value="Sin Stock "  style="font-size:12px;color:red;">
                       @else
                    <input type="submit" id="buttonCard1"name="add" href="/addCart/{{$product->id}}" class=" btn btn-primary buttonCard btn-lg active "
                     role="button" aria-pressed="true" value="Add cart " style="font-size:12px;color:black;">
                  @endif
                    {{-- <img src="https://img.icons8.com/ios-filled/50/000000/add-shopping-cart.png"></a> --}}
                    <a id="buttonCard1" href="/detailProduct/{{$product->id}}" target="_blank" class=" btn btn-primary btn-lg active" role="button" aria-pressed="true" style="cursor: zoom-in"><img  src="https://img.icons8.com/ios-filled/50/000000/zoom-to-extents.png"></a>
                  </form >
                    <img id="cuotas" src="/img/12cuotas.png" alt="12-cuotas-sin-interes" style="">
               </div>
               <div id="containerPrice" class="center" style="">
                 <div class="center">
                   <label for="">Stock:</label>
                   <h5 class="center" style=" ">{{$product->stock}}</h5>
                 </div>
                  <span class="priceOld dollars">{{$product->price}}</span>
                  <span class="price dollars">{{$product->getpriceOff()}}</span>
                  <span class="discount">{{$product->discount}}% Off</span>
              </div>
               <div id="containerDescript" class="center" style="">
                 <span class="" >{{$product->description}}</span>
              </div>
          </article>
          @endforeach
      </div>
    </div>
  @endsection
