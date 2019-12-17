@extends('layouts/headerFooter')
 @section('css')
<link rel="stylesheet" href="/css/login.css">
@endsection

@section('main')
  <div class="containerExt styleLogin" style="margin-top:90px; display:flex; flex-direction: column;" >
      <div class="form-group center" style="margin-top:5%;">
        @if (isset($product->image))
          <img src="/storage/products/{{$product->image}}" alt="" class="responsive" style=""  >
@else
        <img src="/storage/products/default.png" alt="" class="responsive" style=""  >

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
  <form class="" method="post" action="/editProduct/{{$product->id}}" style= " " enctype="multipart/form-data">
  {{csrf_field()}}
<div class="containerFlex">
    <input class ="form-control"  type="hidden" name="id" value="{{old($product->id)}}">
    <div class="">
        {{-- <label for="image">imagen:</label> --}}
        <input  class ="form-control" type="file" name="image" id="image" value="{{$product->image}}"/>
    </div>
    <div>
        <label for="name">modelo:</label>
        <input class ="form-control"   type="text" name="name" id="name" value="{{$product->name}}"/>
    </div>
    <div>
      <label   for="category">categoria:</label>
      <select class ="form-control" name="category_id" >
        @foreach ($categories as $category)
          @if($category->id==$product->category_id)
            <option  value="{{$category->id}}" selected>{{$category->name}}</option> --}}
          @else
            <option  value="{{$category->id}}" >{{$category->name}}</option> --}}
          @endif
        @endforeach
      </select>
    </div>
    <div>
        <label for="price">Precio venta:</label>
        <input class ="form-control" type="number" name="price" id="price"value="{{$product->price}}"/>
    </div>
    <div class="contenedorFlex"  style="flex-flow: nowrap;"  >
    <div >
      <label for="discount"> Descuento:</label>
      <input class ="form-control" type="number" name="discount" id="discount"value="{{$product->discount}}"/>
    </div>
    <div  >
        <label   for="stock">Stock:</label>
        <input class ="form-control"  type="number" name="stock" id="stock"value="{{$product->stock}}"/>
    </div>
    </div>
    <div>
        <label for="description">Descripcion:</label>
  <textarea class ="form-control"name="description"id="description"
   rows="4" cols="80" >{{$product->description}}"</textarea>
    </div>
    <div>
      <button class="btn btn-prymary" type="submit" name="save" href="" >Actualizar</button>
      <a  class="btn btn-prymary" type="submit" name="close" href="/categoryList/{{$product->category_id}}">Cerrar</a>
    </div>
</div>
</form>

</div>
</div>

@endsection
