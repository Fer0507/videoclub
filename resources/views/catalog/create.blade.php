@extends('layouts.master')

@section('content')
    <h1>Añadir Película</h1>

    <form action="#" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="year">Año</label>
            <input type="text" name="year" id="year" class="form-control">
        </div>

        <div class="form-group">
            <label for="director">Director</label>
            <input type="text" name="director" id="director" class="form-control">
        </div>

        <div class="form-group">
            <label for="poster">Poster</label>
            <input type="text" name="poster" id="poster" class="form-control">
        </div>

        <div class="form-group">
            <label for="synopsis">Resumen</label>
            <textarea name="synopsis" id="synopsis" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Añadir película</button>
    </form>
@endsection
