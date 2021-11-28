<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/', HomeController::class);
//Route::get('/', 'HomeController'); laravel 7

Route::get('/users/{id}', [HomeController::class, 'index']);
Route::get('/users/create', [HomeController::class, 'create']);
//Route::get('/', 'HomeController@create'); laravel 7


//el simbolo ? dentro de las llaves significa que el id2 es un parametro opcional
Route::get('/holamundo/{id}/{id2?}', function ($id, $id2) {
    return "hola $id hola2 $id2";
});



//php artisan r:l
//make routes 
Route::resource('customers', CustomerController::class);

