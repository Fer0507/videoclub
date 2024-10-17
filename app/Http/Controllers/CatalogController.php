<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    private $arrayPeliculas = [
        [
            'title' => 'The Godfather',
            'year' => 1972,
            'director' => 'Francis Ford Coppola',
            'poster' => 'https://rukminim2.flixcart.com/image/850/1000/keg02a80-0/poster/m/h/f/large-godfather02-large-the-godfather-movie-poster-with-frame-original-imafv4gnkf5crqxg.jpeg?q=90&crop=false',
            'rented' => false,
            'synopsis' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.'
        ],
        // Agrega más películas aquí...
    ];

    public function getIndex()
    {
        return view('catalog.index', ['arrayPeliculas' => $this->arrayPeliculas]);
    }
    public function getShow($id)
    {
        $pelicula = $this->arrayPeliculas[$id];
        return view('catalog.show', ['pelicula' => $pelicula, 'id' => $id]);
    }

    public function getCreate()
    {
        return view('catalog.create');
    }

    public function getEdit($id)
    {
        $pelicula = $this->arrayPeliculas[$id];
        return view('catalog.edit', compact('id', 'pelicula'));
    }
}
