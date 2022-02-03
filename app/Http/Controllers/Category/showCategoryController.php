<?php

namespace App\Http\Controllers\Category;

use App\Http\Resources\CategoryResource;
use App\Http\Services\Category\showCategoryService;
use App\Models\Category;
use Illuminate\Http\Request;

class showCategoryController
{

    public function show(showCategoryService $service,Request $request)
    {
        try {
            $result = $service->execute($request->id);
           return new CategoryResource($result);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()],400);
        }   
    }

}