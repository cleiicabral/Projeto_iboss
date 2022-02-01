<?php

namespace App\Http\Services\Category;

use App\Models\Category;
use App\Repositories\Interfaces\Category\CategoryRepositoryInterface;
use Exception;

class updateCategoryService
{

    protected $repository;

    public function __construct(CategoryRepositoryInterface $repository)
    {
        return $this->repository = $repository;
    }

    public function execute($request, $id): ?Category
    {
        $categories = $this->repository->update($request, $id);
        if (!$categories)
            throw new Exception("Não foi possível atualizar a categoria");

        return $categories;
    }
     
}
