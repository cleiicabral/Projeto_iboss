<?php

namespace App\Http\Controllers\Category;

use App\Http\Services\Category\createCategoryService;
use App\Models\Category;
use Illuminate\Http\Request;


class createCategoryController
{

    public function create(createCategoryService $service, Request $request): ? Category
    {
        try { 
           return $service->execute($request);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],400);
        }   
    }

}