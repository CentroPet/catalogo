<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProductController;
use App\Models\Product;

// ############# route para categoria ###############
use App\http\Controllers\CategoriaController;

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
    $productos=Product::all();
    return view('welcome',compact("productos"));
})->name("home");

Route::get("produx",[ProductController::class,"index"])->name("listar_products"); // panel principal
Route::get("product/create",[ProductController::class,'create'])->name("product.crear"); // para crear producto
Route::get("product/edita/{product}",[ProductController::class,"edit"])->name("product.editar"); // para editar producto
Route::PATCH("product/update/{product}",[ProductController::class,"actualizar"])->name("product.update"); // esto actualiza
Route::post("product/guardar",[ProductController::class,"store"])->name("product.store"); // esta ruta es para guardar 
Route::get("product/show/{product}",[ProductController::class,"show"])->name("product.mostrar");// este es el ojo
Route::get("product/eliminar",[ProductController::class,"destroy"])->name("product.destroy");// este esta ruta q  elimina.
    
//get conseguir informacion

//$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$   Routs para categoria  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
Route::get("cate",[CategoriaController::class,"index"])->name("panel_categoria"); // panel principal
Route::get("categoria/create",[CategoriaController::class,'create'])->name("categoria.crear"); // para crear categoria
Route::get("categoria/edita/{categoria}",[CategoriaController::class,"edit"])->name("categoria.editar"); // para editar categoria
Route::PATCH("categoria/update/{categoria}",[CategoriaController::class,"actualizar"])->name("categoria.update"); // esto actualiza
Route::post("categoria/store",[CategoriaController::class,"store"])->name("categoria.guardar"); // esta ruta es para guardar categoria

//$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$  guardado con ajax  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
Route::get("guardar/categoria/ajax",[CategoriaController::class,"guardadoajax"])->name("guardar.categoria.ajax"); // esta ruta es para guardar categoria con ajax
Route::get("jalar/categorias",[CategoriaController::class,"entrgaCategorias"])->name("jalar.categorias"); // esta ruta es para guardar categoria con ajax


Route::get("categoria/show/{categoria}",[CategoriaController::class,"show"])->name("categoria.mostrar");// para mostrar categoria
Route::get("categoria/eliminar",[CategoriaController::class,"destroy"])->name("categoria.destroy");// este esta ruta q  elimina categoria