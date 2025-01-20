<?php

use App\Http\Controllers\NinjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/azers', function () {
    $azers = [
        ["name" => 'Azer ben azzouz', "skill" => 44, "id" => 1],
        ["name" => 'Amin bejaoui', "skill" => 55, "id" => 2],
        ["name" => 'Amen hentati', "skill" => 66, "id" => 3]
    ];

    return view('azers.index', [
        "hi" => "Hello World",
        "azers" => $azers
    ]);
});

Route::get('/ninjas',  [NinjaController::class, 'index']);

Route::get('/ninjas/create', [NinjaController::class, 'create']);

Route::get('/ninjas/{id}', [NinjaController::class, 'show']);

