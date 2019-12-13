@extends('layouts/headerFooter')
 @section('css')
<link rel="stylesheet" href="/css/login.css">
@endsection

@section('main')
  <div class="containerExt styleLogin" style="margin-top:90px; display:flex;" >
      <div class="form-group" style="display: contents;">
        @if (isset($product->image))
          <img src="/storage/products/{{$product->image}}" alt="" class="navbar-brand" style="width: 50%; border-radius: 5%; margin-right: 9%; margin-left: 1%;"  >
@else
  <img src="/storage/products/default.png" alt="" class="navbar-brand" style="width: 50%; border-radius: 5%; margin-right: 9%; margin-left: 1%;"  >

        @endif
      </div>
<ul class="errores">
  @foreach ($errors->all() as $error)
    <li style= " color:red;">
      {{$error}}
    </li>
  @endforeach
</ul>
<div class="form-group">
  <div class="form-group" style="display: contents;">
    @if (isset($req))
      <img src="/storage/{{$product->image}}" alt="" class="navbar-brand" style="width: 50%; border-radius: 5%; margin-right: 9%; margin-left: 1%;"  >
@else
<img src="default.png" alt="" class="navbar-brand" style="width: 50%; border-radius: 5%; margin-right: 9%; margin-left: 1%;"  >

    @endif
  </div>
  <form class=" flexCenterH" method="post" action="/editProduct/{{$product->id}}" style= "margin-top: 30px; " enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group">
    <input class ="form-control"  type="hidden" name="id" value="{{old($product->id)}}">
  <div>
      <label for="name">modelo</label>
      <input class ="form-control"   type="text" name="name" id="name" value="{{$product->name}}"/>
  </div>
  <div>
      <label for="image">imagen</label>
      <input  class ="form-control" type="file" name="image" id="image" value="{{$product->image}}"/>
  </div>
  <label   for="category">categoria</label>
  <select class ="form-control" name="category_id" >
    @foreach ($categories as $category)
      @if($category->id==$product->category_id)
       <option  value="{{$category->id}}" selected>{{$category->name}}</option> --}}
     @else
       <option  value="{{$category->id}}" >{{$category->name}}</option> --}}
     @endif
    @endforeach

</select>

  <div>
      <label for="price">Precio venta</label>
      <input class ="form-control" type="number" name="price" id="price"value="{{$product->price}}"/>
  </div>
  <div>
      <label for="discount"> Descuento</label>
      <input class ="form-control" type="number" name="discount" id="discount"value="{{$product->discount}}"/>
  </div>
  <div>
      <label   for="stock">Stock</label>
      <input class ="form-control"  type="number" name="stock" id="stock"value="{{$product->stock}}"/>
  </div>
  <div>
      <label for="description">Descripcion</label>
      <input class ="form-control" type="text" name="description" id="description" value="{{$product->description}}"/>
  </div>

<input type="submit" value="guardar" name="guardar"href=""/>
<a type="submit" value="cerrar" name="cerrar" href="/categoryList/{{$product->category_id}}"/>cerrar</a>
</form>

</div>
</div>
@endsection
