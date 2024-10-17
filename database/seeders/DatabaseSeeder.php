<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;

class DatabaseSeeder extends Seeder
{
    // Copia aquí el array de películas como una variable privada.
    private $arrayPeliculas = [
        [
            'title' => 'Oppenheimer',
            'year' => '	2023',
            'director' => 'Christopher Nolan',
            'poster' => 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQXgsVDRdRxUmjZBtGFzz66IhmH7tDkPaFCts-1BnUlkEj-TKtv',
            'rented' => false,
            'synopsis' => 'Oppenheimer una calificación perfecta cuatro de cuatro estrellas, describiéndola como "magnífica" y "una de las mejores películas del siglo 21'
        ],
        [
            'title' => 'The Godfather',
            'year' => '1972',
            'director' => 'Francis Ford Coppola',
            'poster' => 'https://rukminim2.flixcart.com/image/850/1000/keg02a80-0/poster/m/h/f/large-godfather02-large-the-godfather-movie-poster-with-frame-original-imafv4gnkf5crqxg.jpeg?q=90&crop=false',
            'rented' => false,
            'synopsis' => 'The aging patriarch of an organized crime dynasty...'
        ],


        [
            'title' => 'Bad Boys for Life',
            'year' => '2020',
            'director' => 'Adil El Arbi ,Bilall Fallah',
            'poster' => 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQdTJl17J5_VdMVx85Krry9e2j2KZKkuuE92ejNVAtHsNGN-3l8',
            'rented' => false,
            'synopsis' => 'Cargado de acción y con una doble dosis de carisma de líder, Bad Boys for Life revitaliza esta franquicia largamente inactiva jugando directamente a sus puntos fuertes'
        ],
        // Añade aquí el resto de películas...
    ];

    public function run()
    {
        // Llama al método de llenado del catálogo.
        self::seedCatalog();
        $this->command->info('Tabla catálogo inicializada con datos!');
    }

    private function seedCatalog()
    {
        // Elimina todos los registros existentes en la tabla movies.
        DB::table('movies')->delete();

        // Recorre el array de películas y crea un nuevo registro para cada una.
        foreach ($this->arrayPeliculas as $pelicula) {
            $p = new Movie();
            $p->title = $pelicula['title'];
            $p->year = $pelicula['year'];
            $p->director = $pelicula['director'];
            $p->poster = $pelicula['poster'];
            $p->rented = $pelicula['rented'];
            $p->synopsis = $pelicula['synopsis'];
            $p->save();
        }
    }
}
