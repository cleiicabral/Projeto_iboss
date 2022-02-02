<?php

namespace App\Http\Controllers\Category;

use App\Http\Services\Category\showCategoryService;
use Illuminate\Database\Eloquent\Collection;


class showCategoryController
{

    public function show(showCategoryService $service, int $id): ?Collection
    {
        try {
           return $service->execute($id);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],400);
        }   
    }

}