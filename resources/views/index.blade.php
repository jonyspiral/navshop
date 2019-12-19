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
@foreach ($categories as $category )
  <article class="card" >
    <img src="img/categories/{{$category->image}}" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">{{$category->name}}</h5>
      <p class="card-text">{{$category->description}}</p>
      <a href="/categoryList/{{$category->id}}" class="btn btn-primary">ir a...</a>
    </div>
  </article>
@endforeach
</section>
@endsection
