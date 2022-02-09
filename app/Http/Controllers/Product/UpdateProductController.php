<?php

namespace App\Http\Controllers\Product;

use App\Dto\Product\createProductDto;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Services\Product\UpdateProductService;
use App\Models\Product;
use Illuminate\Http\Request;

class UpdateProductController
{

    public function update(UpdateProductService $service,UpdateProductRequest $request, int $id)
    {
        try {
        
        $result = $service->execute(new createProductDto($request->all()), $id);
        return $result;
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()],400);
        }
        
    }
}