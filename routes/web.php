<?php

use Illuminate\Support\Facades\Route;
use App\Models\Persona; // 👈 Asegurate de importar el modelo

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Nueva ruta para mostrar datos de la tabla 'persona'
Route::get('/personas', function () {
    $personas = Persona::all(); // Trae todos los registros de la tabla
    return $personas; // Devuelve en formato JSON automáticamente
});
