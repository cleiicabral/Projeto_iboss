<?php

namespace App\Http\Services\Category;

use App\Dto\Category\createCategoryDto;
use App\Models\Category;
use App\Repositories\Interfaces\Category\CategoryRepositoryInterface;
use Exception;
use Illuminate\Database\Eloquent\Collection;

class updateCategoryService
{

    protected $repository;

    public function __construct(CategoryRepositoryInterface $repository)
    {
        return $this->repository = $repository;
    }

    public function execute(createCategoryDto $categoryDto, $id): ? Category
    {
        $categories = $this->repository->update($categoryDto, $id);
        if (!$categories)
            throw new Exception("Não foi possível atualizar a categoria");

        return $categories;
    }
     
}
