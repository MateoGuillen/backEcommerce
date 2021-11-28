<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //asignar controlador a una ruta use App\Http\Controllers\HomeController;
    //Route::get('/', HomeController::class);
    //en en web.php
    public function __invoke(){
        return "hello world from laravel :p";
    }

    public function index($id){
        return view('home.index',['id' => $id]);
    }
    public function create(){
        return "create page";
    }
    public function show(){
        return "show page";
    }
}
