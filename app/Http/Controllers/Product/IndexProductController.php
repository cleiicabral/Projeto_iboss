<?php

namespace App\Http\Controllers\Product;

use App\Http\Services\Product\IndexProductService;

class IndexProductController
{


    public function index(IndexProductService $service)
    {
         try {
           return $service->execute();
         } catch (\Exception $e) {
             return response()->json(['error'=>$e->getMessage()],400);
         }
    }
}