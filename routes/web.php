<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\services\ProductService;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [ProductoController::class, 'index'])->name('home');
Route::get('/proveedor', [ProveedorController::class, 'index'])->name('proveedor');
Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria');

Route::post('/home/add', [ProductoController::class, 'createProducto'])->name('add_product');
Route::get('/home/edit/{id}', [ProductoController::class, 'updateProducto'])->name('editar_producto');
Route::get('/home/delte{id}', [ProductoController::class, 'deleteProducto'])->name('eliminar_producto');

Route::post('/proveedor/add', [ProveedorController::class, 'createProveedor'])->name('add_proveedor');
Route::get('/proveedor/edit/{id}', [ProveedorController::class, 'updateProveedorView'])->name('editar_proveedor_view');
Route::post('/proveedor/edit/{id}', [ProveedorController::class, 'updateProveedor'])->name('editar_proveedor');
Route::get('/proveedor/delte{id}', [ProveedorController::class, 'deleteProveedor'])->name('eliminar_proveedor');

// Crear una categoría
Route::post('/categoria/add', [CategoriaController::class, 'createCategory'])->name('add_categoria');

// Mostrar el formulario para editar una categoría
Route::get('/categoria/edit/{id}', [CategoriaController::class, 'updateCategoryView'])->name('editar_categoria_view');

// Actualizar una categoría
Route::put('/categoria/edit/{id}', [CategoriaController::class, 'updateCategory'])->name('editar_categoria');

// Eliminar una categoría
Route::delete('/categoria/{id}', [CategoriaController::class, 'deleteCategory'])->name('eliminar_categoria');


Route::get('/register', function () {
    return view('regsiter');
})->middleware(['auth', 'verified'])->name('regsiter');

Route::middleware('auth')->group(function () {
    
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

require __DIR__.'/auth.php';
