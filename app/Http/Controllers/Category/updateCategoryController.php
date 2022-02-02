<?php

namespace App\Http\Controllers\Category;

use App\Http\Services\Category\updateCategoryService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;


class updateCategoryController
{

    public function update(updateCategoryService $service, Request $request, int $id): ?Collection
    {
        try {
           return $service->execute($request, $id);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],400);
        }   
    }

}