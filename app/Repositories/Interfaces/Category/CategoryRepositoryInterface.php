<?php

namespace App\Repositories\Interfaces\Category;

use App\Dto\Category\createCategoryDto;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

interface CategoryRepositoryInterface
{

    public function index(): ?Collection;
    public function show(int $id): ? Category;
    public function create(createCategoryDto $categoryDto): ?Category;
    public function update(createCategoryDto $categoryDto, int $id): ? Category;
    public function destroy(int $id): ?Category;

}



