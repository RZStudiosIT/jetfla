<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VuelosController extends Controller
{
    public function index()
    {
        return view('vuelos.index'); //retornar una vista
    }

    public function createRes()
    {
        return view('vuelos.create'); //retornar una vista
    }

    public function destinos($destino)
    {
        // return view('vuelos.show', [
            //'destino' => 'Mexicali'
        //   'destino' => $destino            
        // ]); //retornar una vista con variable

        
        //SEGUNDA MANERA DE ENVIAR VISTAS CON VARIBLES
        //PHP COMPACT
        return view('vuelos.show', compact('destino'));

    }

}
