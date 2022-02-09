<?php

namespace App\Http\Controllers\Category;

use App\Dto\Category\createCategoryDto;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Services\Category\createCategoryService;
use Illuminate\Http\Request;


class createCategoryController
{

    public function create(createCategoryService $service, CreateCategoryRequest $request)
    {
        try { 
            $result = $service->execute(new createCategoryDto($request->all()));
           return $result;
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],400);
        }   
    }

}