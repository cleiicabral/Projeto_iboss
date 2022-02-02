<?php

namespace App\Http\Controllers\Category;

use App\Http\Services\Category\indexCategoryService;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class indexCategoryController
{
    
    public function index(indexCategoryService $service): ? Collection
    {
        try {
           return $service->execute();
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],400);
        }   
    }

}