<?php

namespace App\Http\Controllers\Product;

use App\Dto\Product\createProductDto;
use App\Http\Services\Product\CreateProductService;
use Illuminate\Http\Request;

class createProductController{

    public function create(CreateProductService $service, Request $request)
    {
    
        try {
            $product = new createProductDto($request->all());
            $result = $service->execute($product);
            return $product->toArray();
        } catch (\Throwable $th) {
            return response()->json(['error' => $th ->getMessage()],400);
        }
    }
}