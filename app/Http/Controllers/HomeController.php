<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CatalogController;

class HomeController extends Controller
{
    public function getHome()
    {
        // Redirige al listado de películas
        return redirect()->action([CatalogController::class, 'getIndex']);
    }
}
