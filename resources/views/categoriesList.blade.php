@extends('layouts/headerFooter')
@section('css')
  <link rel="stylesheet" href="/css/digital_movies.css">
  {{-- <link rel="stylesheet" href="/css/peliculas.css"> --}}
<link rel="stylesheet" href="/css/product.css">
@endsection
@section('main')

        <div class="" style="margin-top:90px">
            <h2 class="titulo-nav">

                <div class=""style="display: -webkit-box; font: -webkit-control;">
                  <ol class="breadcrumb">
                   <li class="breadcrumb-item">
                       <a href="peliculas.php?order=title">Title</a>
                   </li>
                   <li class="breadcrumb-item">
                       <a href="">Genre</a>
                   </li>
                   <li class="breadcrumb-item ">
                       <a href="peliculas.php?order=rating">Rating</a>
                   </li>
                   <li class="breadcrumb-item active">
                       <a href="peliculas.php?order=awards">Awards</a>
                   </li>
                 </ol>

                </div>
                <nav >
                  {{-- pagination --}}
                  {{$products->links()}}
                </nav>
                <p class="card-text">
                  <a class="btn btn-primary" href="/addProduct/{{$id}}">+</a>
                  {{-- <a class="btn btn-success" href=""></a> --}}
                  </p>
              </h2>

              <div class="">
            @foreach ($products as $product )

           <article class="card styleLogin" style="">

              <div id="imagenCard" class="" style="">
                        <h6 class="center" style=" ">{{$product->name}}</h6>

                              <img id="" src="https://images.fravega.com/s500/d8b3078dcc3eedcb4547b50ba1dc3a8f.jpg" class="" style="width: 100%;border-radius: 15px;" alt="...">
                      <div id="containerButton"class="center" style="">

                                <a id="buttonCard1" href="cart" class=" btn btn-primary buttonCard btn-lg active " role="button" aria-pressed="true"><img src="https://img.icons8.com/ios-filled/50/000000/add-shopping-cart.png"></a>
                                <a id="buttonCard1" href="details" target="_blank" class=" btn btn-primary btn-lg active" role="button" aria-pressed="true" style="cursor: zoom-in"><img  src="https://img.icons8.com/ios-filled/50/000000/zoom-to-extents.png"></a>
                                <img id="cuotas" src="/img/12cuotas.png" alt="12-cuotas-sin-interes" style="">
                      </div>
               </div>
               <div id="containerPrice" class="center" style="">
                  <span class="priceOld dollars">{{$product->price}}</span>
                  <span class="price dollars">{{$product->getpriceOff()}}</span>
                  <span class="discount">{{$product->discount}}% Off</span>
              </div>
               <div id="containerDescript" class="center" style="">
                 <span class="" >{{$product->description}}</span>
              </div>
          </article>
          @endforeach
           {{-- <img class="card-img-top" src="images/default.png" alt="Card image cap">
           <div class="card-body">
             <h5 class="card-title">title</h5>
             <p class="card-text">genre</p>
             <p class="card-text">Rating:</p>
             <p class="card-text">Awards: </p>
             <p class="card-text">
               <a class="btn btn-primary" href="">Ver Mas</a>
               <a class="btn btn-success" href="">Editar</a>
               </p>
           </div> --}}
      </div>
    </div>




  @endsection
