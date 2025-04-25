<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\AuthController;

// 🛠️ Authentification API (login)
Route::post('/login', [AuthController::class, 'login']);

// 🔒 Routes protégées par Sanctum
Route::middleware('auth:sanctum')->group(function () {

    // 🔐 Infos de l'utilisateur connecté
    Route::get('/user', [AuthController::class, 'user']);

    // 🔐 Déconnexion
    Route::post('/logout', [AuthController::class, 'logout']);

    // 🔐 Accès aux projets et tâches seulement si connecté
    Route::apiResource('projects', ProjectController::class);
    Route::apiResource('tasks', TaskController::class);
});
