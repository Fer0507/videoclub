@extends('layouts.master')

@section('content')
    <h1>Modificar Película</h1>

    <form action="#" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $pelicula['title'] }}">
        </div>

        <div class="form-group">
            <label for="year">Año</label>
            <input type="text" name="year" id="year" class="form-control" value="{{ $pelicula['year'] }}">
        </div>

        <div class="form-group">
            <label for="director">Director</label>
            <input type="text" name="director" id="director" class="form-control" value="{{ $pelicula['director'] }}">
        </div>

        <div class="form-group">
            <label for="poster">Poster</label>
            <input type="text" name="poster" id="poster" class="form-control" value="{{ $pelicula['poster'] }}">
        </div>

        <div class="form-group">
            <label for="synopsis">Resumen</label>
            <textarea name="synopsis" id="synopsis" class="form-control">{{ $pelicula['synopsis'] }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Modificar película</button>
    </form>
@endsection
