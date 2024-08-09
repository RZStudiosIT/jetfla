<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\VuelosController;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

//documento encargado de recibir las peticiones

// / uri es lo qeu escribimos despues del dominio
//error 404 es ruta que no existe
/**VARIOS TIPOS DE PETICIONES:
 * Get = Cuando escribimos una URL y nos redirije a una pagina
 * Post = Hacer desde un formulario para mandar informacion que no sea visible
 * Put = Actualizar
 * Patch = Actualizar
 * Delete = Eliminar un registro
 * 
 * **/

/**Route::post('/post', function () {
    return "Third pagina de jetfla airlines";
});
**/

/**Route::get('/', function () {
    return view('layouts/home'); //retornar una vista
});***/

/**** RUTA CON UN CONTROLLER ****/
Route::get('/', [HomeController::class, '__invoke']);

Route::get('/vuelos', [VuelosController::class, 'index']);
/**** RUTA GET CON FORMULARIO PARA RESERVAR *****/
Route::get('/vuelos/createRes', [VuelosController::class, 'createRes']);
/***
 * CONTENIDO VARIABLE CON 1 PARAMETRO
***/
Route::get('/vuelos/{destino}', [VuelosController::class, 'destinos']);
Route::get('/images/{filename}', [ImageController::class, 'show']);
Route::get('/css/{font}', [ImageController::class, 'font']);

 //ingresar al vuelo 1
// Route::get('/vuelos/vuelo-1', function () {
//     return "Esta pagina muestra el PRIMER vuelo";
// });


// Route::get('/vuelos/vuelo-2', function () {
//     return "Esta pagina muestra el SEGUNDO vuelo";
// });

// Route::get('/vuelos/vuelo-3', function () {
//     return "Esta pagina muestra el TERCER vuelo";
// });

/**RUTAS CON PARAMETROS NOSOTROS ESPECIFICAMOS QUE 
LO QUE VIENE DESPUES ES CONTENIDO VARIABLE

*NOS PUEDE SERVIR PARA ABRIR TODAS NUESTRAS CARDS DEPENDIENDO LO
QUE COLOQUEMOS EN LA URI

*SE PUEDEN PASAR TANTOS PARAMETROS COMO QUIERA
**/


/***
 * CONTENIDO VARIABLE CON 2 PARAMETROS
***/

/**Route::get('/vuelos/{destinos}/{disponi}', function ($destinos, $disponi) {
    return "Este es un vuelo a {$destinos} con {$disponi} vuelos disponibles";
});**/

/***
 * CONTENIDO VARIABLE CON 2 PARAMETROS PERO UNO OPCIONAL
***/

/****
  Route::get('/vuelos/{destinos}/{disponi?}', function ($destinos, $disponi = null) {
    
    if ($disponi) {
        return "Este es un vuelo a {$destinos} con {$disponi} vuelos disponibles";
    }
    return "Este es un vuelo a {$destinos}";
});
****/


































