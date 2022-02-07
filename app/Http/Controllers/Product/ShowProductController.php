<?php
namespace App\Http\Controllers\Product;

use App\Http\Services\Product\ShowProductService;

class ShowProductController
{

    public function show(ShowProductService $service, int $id)
    {
        try {
            return $service->execute($id);
        } catch (\Exception $e) {
            return response()->json(['error'=>$e->getMessage()],400);
        }

    }





}