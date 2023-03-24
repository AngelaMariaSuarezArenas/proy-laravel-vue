<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ClientesController;
use App\Http\Controller\ProductosController;
use App\Http\Controller\PostsController;
use App\Http\Controller\CategoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/dashboard/clientes', ClientesController::class);
Route::resource('/dashboard/productos', ProductosController::class);
Route::resource('/dashboard/posts', PostsController::class);
Route::resource('/dashboard/category',CategoryController::class);
