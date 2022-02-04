<?php

namespace App\Http\Services\Product;

use App\Dto\Product\createProductDto;
use App\Models\Product;
use App\Repositories\Interfaces\Product\ProductRepositoryInterface;
use Exception;

class CreateProductService
{

    protected $repository;

    public function __construct(ProductRepositoryInterface $repository)
    {

        return $this->repository = $repository;

    }

    public function execute(createProductDto $productDto) : ?Product
    {
        $products = $this->repository->create($productDto);

        if(!$products)
        {
            throw new Exception("Nenhum produto encontrado");
        }

        return $products;
    }
}