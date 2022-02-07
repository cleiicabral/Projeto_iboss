<?php

namespace App\Http\Services\Product;

use App\Repositories\Interfaces\Product\ProductRepositoryInterface;
use Exception;

class ShowProductService
{


    protected $repository;

    public function __construct(ProductRepositoryInterface $repository){

        return $this->repository = $repository;
    }

    public function execute(int $id){

        $product = $this->repository->show($id);
        
        if(!$product){
            throw new Exception('Nenhum produto encontrado');
        }
        
        return $product;
        
    }

}