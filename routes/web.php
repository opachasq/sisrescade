<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Auth;


Route::get('/', [Controller::class,'index']);
HomeController::HomeRoutes();
ClienteController::RegisterClientesRoutes();
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

