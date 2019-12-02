@extends('layouts/headerFooter')
@section('css')
<link rel="stylesheet" href="css/product.css">
@endsection
@section('main')
  @foreach ($products as $product )
    {{-- <ul>
      <li>{{$product->name}}  </li>
    </ul> --}}

 <article class="card styleLogin" style="">

    <div id="imagenCard" class="" style="">
              <h6 class="center" style=" ">{{$product->name}}</h6>

                    <img id="" src="https://images.fravega.com/s500/d8b3078dcc3eedcb4547b50ba1dc3a8f.jpg" class="" style="width: 100%;border-radius: 15px;" alt="...">
            <div id="containerButton"class="center" style="">

                      <a id="buttonCard1" href="cart" class=" btn btn-primary buttonCard btn-lg active " role="button" aria-pressed="true"><img src="https://img.icons8.com/ios-filled/50/000000/add-shopping-cart.png"></a>
                      <a id="buttonCard1" href="details" target="_blank" class=" btn btn-primary btn-lg active" role="button" aria-pressed="true" style="cursor: zoom-in"><img  src="https://img.icons8.com/ios-filled/50/000000/zoom-to-extents.png"></a>
                      <img id="cuotas" src="img/12cuotas.png" alt="12-cuotas-sin-interes" style="">
            </div>
     </div>
     <div id="containerPrice" class="center" style="">
        <span class="priceOld">{{$product->price}}</span>
        <span class="price">{{$product->price}}</span>
        <span class="discount">{{$product->discount}}% Off</span>
    </div>
     <div id="containerDescript" class="center" style="">
       <span class="" >{{$product->description}}</span>
    </div>
</article>
@endforeach
      {{--
  <article class="card styleLogin" style="">

      <div id="imagenCard" class="" style="">
                <h6 class="center" style=" ">Smart TV 4K 50" Samsung UN50MU6100</h6>

                      <img id="" src="https://images.fravega.com/s250/5987443294170d201de0e5d4d7202dab.jpg" class="" style="width: 100%;border-radius: 15px;" alt="...">
              <div id="containerButton"class="center" style="">

                        <a id="buttonCard1" href="cart" class=" btn btn-primary buttonCard btn-lg active " role="button" aria-pressed="true"><img src="https://img.icons8.com/ios-filled/50/000000/add-shopping-cart.png"></a>
                        <a id="buttonCard1" href="details" target="_blank" class=" btn btn-primary btn-lg active" role="button" aria-pressed="true" style="cursor: zoom-in"><img  src="https://img.icons8.com/ios-filled/50/000000/zoom-to-extents.png"></a>
                        <img id="cuotas" src="img/12cuotas.png" alt="12-cuotas-sin-interes" style="">
              </div>
       </div>
       <div id="containerPrice" class="center" style="">
          <span class="priceOld">$ 49.999</span>
          <span class="price">$ 42.999</span>
          <span class="discount">17% Off</span>
      </div>
       <div id="containerDescript" class="center" style="">
         <span class="" width:100%="">Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!</span>
      </div>

  </article>
  <article class="card styleLogin" style="">

          <div id="imagenCard" class="" style="">
                    <h6 class="center" style=" ">Smart TV 43" Full HD Philips 43PFG5813/77</h6>

                          <img id="" src="https://images.fravega.com/s250/1fbf1bfdf688349a2d0a064e92ffbc8c.jpg" class="" style="width: 100%;border-radius: 15px;" alt="...">
                  <div id="containerButton"class="center" style="">

                            <a id="buttonCard1" href="cart" class=" btn btn-primary buttonCard btn-lg active " role="button" aria-pressed="true"><img src="https://img.icons8.com/ios-filled/50/000000/add-shopping-cart.png"></a>
                            <a id="buttonCard1" href="details" target="_blank" class=" btn btn-primary btn-lg active" role="button" aria-pressed="true" style="cursor: zoom-in"><img  src="https://img.icons8.com/ios-filled/50/000000/zoom-to-extents.png"></a>
                            <img id="cuotas" src="img/12cuotas.png" alt="12-cuotas-sin-interes" style="">
                  </div>
           </div>
           <div id="containerPrice" class="center" style="">
              <span class="priceOld">$39.999</span>
              <span class="price">$32.999</span>
              <span class="discount">17% Off</span>
          </div>
           <div id="containerDescript" class="center" style="">
             <span class="" width:100%="">Este tele se la rebanca.Podes ver nefli y escuchar spotify. Si tu viejo es zapatero zarpale la lata!!!</span>
          </div>

</article>  --}}


{{-- </section><!-- TERMINA grupoTarjeta --> --}}

  @endsection
