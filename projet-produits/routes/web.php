<?php


use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// Remplace la route '/' existante par celle-ci
Route::get('/', [ProductController::class, 'index']);




// Garde aussi la route /products si tu veux
Route::get('/products', [ProductController::class, 'index']);

// Tes autres routes CRUD
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
