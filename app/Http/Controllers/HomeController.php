<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }
    public static function HomeRoutes(){
        Route::get('/dashboard',[HomeController::class,'index'])->name('home');
        //Route::get('gestion_pagos/RegistrarPago/{id}', [PagoController::class, 'RegistrarPago']);
        //Route::get('gestion_pagos/altabaja/{estado}/{id}',[PagoController::class,'altabaja']);
    }
}
