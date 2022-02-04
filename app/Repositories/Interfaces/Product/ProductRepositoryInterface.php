<?php

namespace App\Repositories\Interfaces\Product;


use App\Dto\Product\createProductDto;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

interface ProductRepositoryInterface
{

    public function index(): ?Collection;
    public function show(int $id): ?Product;
    public function create(createProductDto $productDto): ?Product;
    public function update(createProductDto $productDto, int $id): ?Product;
    public function destroy(int $id): ?Product;

}