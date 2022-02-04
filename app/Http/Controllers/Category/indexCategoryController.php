<?php

namespace App\Http\Controllers\Category;

use App\Http\Resources\CategoryResource;
use App\Http\Services\Category\indexCategoryService;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class indexCategoryController
{
    
    public function index(indexCategoryService $service)
    {
        try {
            return $service->execute();
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()],400);
        }   
    }

}