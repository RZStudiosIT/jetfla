<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{       /*** __invoke cuando se define a la hora 
        de asignarle el control a la ruta solo
        podemos pasarle el controller sin especificar metodo ***/
    public function __invoke()
    {
        return view('layouts/home'); //retornar una vista
    }
}
