<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/user', [UserController::class, 'Get'])->middleware('auth:sanctum');

Route::post('/signup', [AuthController::class, 'SignUp']);
Route::post('/login', [AuthController::class, 'Login']);
