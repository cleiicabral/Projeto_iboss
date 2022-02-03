<?php

namespace App\Http\Controllers\Category;

use App\Http\Services\Category\showCategoryService;
use App\Models\Category;
use Illuminate\Http\Request;

class showCategoryController
{

    public function show(showCategoryService $service,Request $request)
    {
        try {
           return $service->execute($request->id);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()],400);
        }   
    }

}