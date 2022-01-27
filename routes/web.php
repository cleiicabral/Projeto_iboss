<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

//products
Route::get('products/index',[ProductController::class,'index'])->name('product.index');
Route::get('products/new', [ProductController::class,'create'])->name('products.create');
Route::post('products/store',[ProductController::class,'store'])->name('products.store');
Route::get('products/show/{id}',[ProductController::class,'show'])->name('products.show');


//categories
Route::put('category/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::get('category/index',[CategoryController::class,'index'])->name('category.index');
Route::get('category/new', [CategoryController::class,'create'])->name('category.create');
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('category/show',[CategoryController::class , 'show'])->name('category.show');
Route::delete('category/destroy/{id}',[CategoryController::class,'destroy'])->name('category.destroy');

Route::get('/', function () {
    return view('welcome');
});
