<?php

namespace App\Http\Controllers\Category;

use App\Http\Services\Category\destroyCategoryService;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;


class destroyCategoryController
{

    public function destroy(destroyCategoryService $service, int $id)
    {
        try {
           return $service->execute($id);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],400);
        }   
    }

}