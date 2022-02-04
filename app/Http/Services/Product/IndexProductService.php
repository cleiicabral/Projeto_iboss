<?php

namespace App\Http\Services\Product;

use App\Repositories\Interfaces\Product\ProductRepositoryInterface;
use Exception;

class IndexProductService
{

    protected $repository;

    public function __construct(ProductRepositoryInterface $repository)
    {
        return $this->repository = $repository;
    }

    public function execute()
    {
        $products = $this->repository->index();

        if(!$products){
            throw new Exception('Nenhum produto encontrado');
        }

        return $products;
    }
}