<?php

use App\Http\Controllers\Category\createCategoryController;
use App\Http\Controllers\Category\updateCategoryController;
use App\Http\Controllers\Category\showCategoryController;
use App\Http\Controllers\Category\indexCategoryController;
use App\Http\Controllers\Category\destroyCategoryController;
use App\Http\Controllers\Product\createProductController;
use App\Http\Controllers\Product\DestroyProductController;
use App\Http\Controllers\Product\IndexProductController;
use App\Http\Controllers\Product\UpdateProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('category/new', [createCategoryController::class,'create']);


Route::get('/teste', function () {
    return response()->json(["message" => "Api painel premialo 1.0"]);
});

//Routes for categories
Route::post('category/create', [createCategoryController::class, 'create']);
Route::get('category/index', [indexCategoryController::class, 'index']);
Route::get('category/show/{id}', [showCategoryController::class, 'show']);
Route::post('category/update/{id}', [updateCategoryController::class, 'update']);
Route::delete('category/destroy/{id}', [destroyCategoryController::class, 'destroy']);

//route for products
Route::post('product/create', [createProductController::class,'create']);
Route::put('product/update/{id}', [UpdateProductController::class,'update']);
Route::get('product/index', [IndexProductController::class,'index']);
Route::delete('product/destroy/{id}', [DestroyProductController::class,'destroy']);