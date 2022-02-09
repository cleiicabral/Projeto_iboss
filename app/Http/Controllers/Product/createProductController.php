<?php

namespace App\Http\Controllers\Product;

use App\Dto\Product\createProductDto;
use App\Http\Requests\CreateProductRequest;
use App\Http\Services\Product\CreateProductService;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class createProductController{

    public function create(CreateProductService $service, CreateProductRequest $request)
    {
    
        try {
            $product = new createProductDto($request->all());
            $result = $service->execute($product);

            return $result;
        } catch (\Throwable $th) {
            return response()->json(['error' => $th ->getMessage()],400);
        }
    }
}