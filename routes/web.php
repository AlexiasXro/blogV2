<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

//importa el orde de la ruta laravel lo lee de ariiba hacia abajo

//EJEMPLO1 Route::get('/posts/create', function ($post) {
//    return "muestra el un formulario para crear post";
//});
//EJEMPLO2 Route::get('/posts/{post}', function ($post) {
//    return "muestra el post {$post}";
//});

Route::get('/', HomeController::class); //ruta principal

//administra cada una de las siguientes rutas
Route::get('/posts/', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{$post}', [PostController::class, 'show']);
