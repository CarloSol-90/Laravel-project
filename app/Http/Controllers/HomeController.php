<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() //Se puede llamar __invoke cuando el controlador tiene un solo metodo
    {
        return view('home');
    }
}
