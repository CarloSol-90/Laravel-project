<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::match(['get', 'post'], '/', HomeController::class);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);


/*
Route::get('/posts/{post}/{category}', function ($post, $category) {
    return "Aquí se mostrarán el post {$post} de la categoria {$category}";
});
*/

/*
post con entrada opcional - el parametro junto con ? y en la funcion añadirle el tipo.
Route::get('/posts/{post}/{category?}', function ($post, $category = null) {
    if ($category) {
        return "Aquí se mostrarán el post {$post} de la categoria {$category}";
    }
    return "Aquí se mostrarán el post {$post}";
});
*/

/*Peticiones{
GET     - cuando pasamos una url o clicamos en algun enlace
POST    - cuando hacemos peticiones desde un formulario sin que la peticion sea visible
PUT     - Son peticiones POST para actualizar un registro
PATCH   - 
DELETE  - Petición POST para eliminar un registro
}
*/