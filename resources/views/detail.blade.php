@extends('layouts/headerFooter')
 @section('css')
<link rel="stylesheet" href="/css/login.css">
@endsection
@section('main')

<div class="containerExt styleLogin" style="margin-top:90px; display:flex;" >
    <div class="form-group" style="display: contents;">
        <img src="/storage/{{$product->image}}" alt="" class="navbar-brand" style="width: 50%; border-radius: 5%; margin-right: 9%; margin-left: 1%;"  >
    </div>
        <form class=" flexCenterH" method="post" action="/addProduct" style= "margin-top: 30px; " enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <input   type="hidden" name="id" value="{{$product->id}}">
          <div>
              <label for="name">modelo</label>
              <input    type="text" name="name" id="name" value="{{$product->name}}"/>
          </div>
          <div>
              <label for="image">imagen</label>
              <input type="file" name="image" id="image" value="{{$product->image}}"/>
          </div>
          <div>
              <label for="category_id">categoria</label>
              @if ($product->category)
                <input   type="text" name="category_id" value="{{$product->category->name}}"/>
              @endif

          </div>
          <div>
              <label for="price">Precio venta</label>
              <input  type="number" name="price" id="price"value="{{$product->price}}"/>
          </div>
          <div>
              <label for="discount"> Descuento</label>
              <input type="number" name="discount" id="discount"value="{{$product->discount}}"/>
          </div>
          <div>
              <label   for="stock">Stock</label>
              <input  type="number" name="stock" id="stock"value="{{$product->stock}}"/>
          </div>
          <div>
              <label for="description">Descripcion</label>
              <input type="text" name="description" id="description" value="{{$product->description}}"/>
          </div>



        </form>
        <form action="/deleteProduct" method="post" id= "controlBox" class="card-text" style="top: 110px; display: inline-block; position: absolute; right: 3%;">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$product->id}}">
          <a type="submit" class="btn btn-primary" href="/editProduct/{{$product->id}}">E</a>
          <input type="submit"name="borrar" class="btn btn-success" href="/deleteProduct" value="-">
        </form >

      </div>
</div>
@endsection
