@extends('layouts/headerFooter')
{{-- @section('css')
<link rel="stylesheet" href="/css/product.css">
@endsection --}}
@section('main')


      <form method="post" action="">

        <input type="hidden" name="movie_id" value="">

          <div class="form-group">
            <div>
                <label for="titulo">Titulo</label>
                <input type="text" name="title" id="title"/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" id="rating"/>
            </div>
            <div>
                <label for="premios">Premios</label>
                <input type="text" name="awards" id="awards"/>
            </div>
            <div>
                <label for="length">Duracion</label>
                <input type="text" name="length" id="length"/>
            </div>

            <div>
                <label for="duracion">Extreno</label>
                <input type="date" name="release_date" id="release_date"/>
            </div>

            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>

@endsection
