<?php

use App\Http\Controllers\Category\createCategoryController;
use App\Http\Controllers\Category\indexCategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Container\BindingResolutionException;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('category/new', [createCategoryController::class,'create']);


Route::get('/teste', function () {
    return response()->json(["message" => "Api painel premialo 1.0"]);
});

Route::get('products/index',[ProductController::class,'index'])->name('product.index');
Route::post('category/new', [createCategoryController::class,'create'])->name('category.create');
Route::get('category/index',[indexCategoryController::class,'index'])->name('category.index');