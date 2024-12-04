<?php

use App\Http\Controllers\Api\V1\AnimalsController;
use App\Http\Controllers\Api\V1\EnclosuresController;
use App\Http\Controllers\Api\V1\SpeciesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/', function() {
    \App\Models\User::create([
        'name'=>'Nouredine',
        'email' => "nouredine.moussa@ynov.com",
        'password' => \Illuminate\Support\Facades\Hash::make('123456789')
    ]);
    return 'utilisateur créé';
});

Route::apiResource('animals', AnimalsController::class);
Route::apiResource('species', SpeciesController::class);
Route::apiResource('enclosures', EnclosuresController::class);

Route::patch('/animals-to-enclosures', [AnimalsController::class,'assign_enclosure']);