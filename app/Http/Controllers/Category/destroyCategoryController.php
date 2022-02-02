<?php

namespace App\Http\Controllers\Category;

use App\Http\Services\Category\destroyCategoryService;
use Illuminate\Database\Eloquent\Collection;


class destroyCategoryController
{

    public function destroy(destroyCategoryService $service, int $id): ?Collection
    {
        try {
           return $service->execute($id);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],400);
        }   
    }

}