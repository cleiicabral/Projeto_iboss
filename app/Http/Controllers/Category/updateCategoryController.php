<?php

namespace App\Http\Controllers\Category;

use App\Dto\Category\createCategoryDto;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Services\Category\updateCategoryService;
use App\Models\Category;
use Illuminate\Http\Request;


class updateCategoryController
{

    public function update(updateCategoryService $service, UpdateCategoryRequest $request, int $id): ? Category
    {
        
        try {
            $result = $service->execute(new createCategoryDto($request->all()), $id);
           return $result;
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],400);
        }   
    }

}