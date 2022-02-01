<?php

namespace App\Http\Controllers;

use App\Http\Services\Category\indexCategoryService;
use Illuminate\Database\Eloquent\Collection;

class indexCategoryController
{

    public function index(indexCategoryService $service): ?Collection
    {
        try {
           return $this->service->execute();
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],400);
        }   
    }

}