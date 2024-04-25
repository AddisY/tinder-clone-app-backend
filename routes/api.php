<?php

use App\Http\Controllers\PeopleController;
use Illuminate\Support\Facades\Route;

Route::get('/people', [PeopleController::class, 'index']);
Route::post('/people/{id}/like', [PeopleController::class, 'like']);
Route::post('/people/{id}/dislike', [PeopleController::class, 'dislike']);
Route::get('/liked', [PeopleController::class, 'liked']);

