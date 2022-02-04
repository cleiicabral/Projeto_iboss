<?php

namespace App\Repositories\Product;

use App\Dto\Product\createProductDto;
use App\Models\Product;
use App\Repositories\Interfaces\Product\ProductRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;


class ProductRepository implements ProductRepositoryInterface
{
    
    protected Product $model;
    
    public function __construct()
    {
        
        return $this->model = new Product;

    }

    public function index(): ?Collection
    {

        try {
            return $this->model->all();
        } catch (\Throwable $th) {
            return null;
        }
    }

    public function show(int $id): ? Product
    {
        
        try {
            return $this->model::find($id);
        } catch (\Throwable $th) {
            return null;
        }
    }

    public function create(createProductDto $productDto): ? Product
    {

        return $this->model->create($productDto->toArray());
    
    }

    public function update(createProductDto $productDto, int $id): ?Product
    {

        try {
            $result = $this->model->find($id);
            $result->update($productDto->all());
            
        } catch (\Throwable $th) {
            return null;
        }

        return $result;

    }

    public function destroy(int $id): ? Product
    {

        try {
            $result = $this->model->find($id);
            $result->delete();
        } catch (\Throwable $th) {
            return null;
        }

        return $result;
    }
}