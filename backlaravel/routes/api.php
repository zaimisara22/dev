<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->get('/test-connection', function () {
    return response()->json(['message' => 'Connexion réussie avec React!'], 200);
});