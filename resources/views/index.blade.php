@extends('layouts/headerFooter')
@section('main')

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"style="margin-top:8%">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/tvs.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/mujer.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/cuotas.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--comienzan los cards -->
<section id="grupoTarjeta" class="containerExt">


<article class="card" >
  <img src="https://img.icons8.com/ios-filled/50/000000/retro-tv.png" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Televisores y audio</h5>
    <p class="card-text">Los mejores televisores del mercado, al mejor precio en cuotas y envio gratis.</p>
    <a href="teleAudio" class="btn btn-primary">ir a...</a>
  </div>
</article>

<article class="card" >
  <img src="/img\icons8-varios-smartphones-50.png" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">smartphones</h5>
    <p class="card-text">Los mejores smartphones del mercado, al mejor precio en cuotas y envio gratis.</p>
    <a href="celulares" class="btn btn-primary">ir a...</a>
  </div>
</article>

<article class="card" >
  <img src="/img\icons8-aplicación-para-laptop-50.png" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Notebooks</h5>
    <p class="card-text">Los mejores notebooks del mercado, al mejor precio en cuotas y envio gratis.</p>
    <a href="notebooks" class="btn btn-primary">ir a...</a>
  </div>
</article>
</section>
@endsection
