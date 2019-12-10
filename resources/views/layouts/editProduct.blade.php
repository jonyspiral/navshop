@extends('layouts/headerFooter')
 @section('css')
<link rel="stylesheet" href="/css/login.css">
@endsection
@section('main')
  <div class="containerExt styleLogin" style="margin-top:90px; display:flex;" >
      <div class="form-group" style="display: contents;">
        @if (isset($req))
          <img src="/storage/{{$product->image}}" alt="" class="navbar-brand" style="width: 50%; border-radius: 5%; margin-right: 9%; margin-left: 1%;"  >
@else
  <img src="/storage/default.png" alt="" class="navbar-brand" style="width: 50%; border-radius: 5%; margin-right: 9%; margin-left: 1%;"  >

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
  <form class=" flexCenterH" method="post" action="/addProduct" style= "margin-top: 30px; " enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="form-group">
    <input   type="hidden" name="id" value="{{old($product->id)}}">
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
        <input   type="text" name="category_id" value="{{$product->id}}"/>
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

<input type="submit" value="guardar" name="guardar"href=""/>
<input type="submit" value="cerrar" name="cerrar" href=""/>
</form>
      {{-- <form class="  flexCenterH" method="post" action="/addProduct" style= "margin-top: 30px; " enctype="multipart/form-data">
        {{csrf_field()}}
        {{-- <input type="hidden" name="id" value="">

            <div>
                <label for="name">modelo</label>
                <input type="text" name="name" id="name" value="{{old('name')}}"/>
            </div>
            <div>
                <label for="image">imagen</label>
                <input type="file" name="image" id="image" value="{{old('image')}}"/>
            </div>
            <div>
                <label for="category_id">categoria</label>
                <input type="text" name="category_id" value="{{$Product->category->id}}"id="category_id"/>
            </div>

            <div>
                <label for="stock">Stock</label>
                <input type="number" name="stock" id="stock" value="{{old('stock')}}"/>
            </div>

            <div>
                <label for="description">Descripcion</label>
                <input type="text" name="description" id="description"value="{{old('description')}}"/>
            </div>
            <div>
                <label for="price">Precio venta</label>
                <input type="number" name="price" id="price"value="{{old('price')}}"/>
            </div>
            <div>
                <label for="discount"> Descuento</label>
                <input type="number" name="discount" id="discount"{{old('discount')}}/>
            </div>

            <input type="submit" value="Agregar producto" name="submit"/>
        </form> --}}
</div>
</div>
@endsection
