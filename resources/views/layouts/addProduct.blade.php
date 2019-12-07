@extends('layouts/headerFooter')
{{-- @section('css')
<link rel="stylesheet" href="/css/product.css">
@endsection --}}
@section('main')

      <form method="post" action="">

        <input type="hidden" name="id" value="">

          <div class="form-group">
            <div>
                <label for="name">modelo</label>
                <input type="text" name="name" id="name"/>
            </div>
            <div>
                <label for="image">imagen</label>
                <input type="image" name="image" id="image"/>
            </div>
            <div>
                <label for="category_id">categoria</label>
                <input type="radio" name="category_id" id="category_id"/>
            </div>
            <div>
                <label for="stock">Stock</label>
                <input type="number" name="stock" id="stock"/>
            </div>

            <div>
                <label for="description">Descripcion</label>
                <input type="text" name="description" id="description"/>
            </div>
            <div>
                <label for="price">Precio venta</label>
                <input type="text" name="price" id="price"/>
            </div>
            <div>
                <label for="discount"> Descuento</label>
                <input type="number" name="discount" id="discount"/>
            </div>

            <input type="submit" value="Agregar producto" name="submit"/>
        </form>

@endsection
