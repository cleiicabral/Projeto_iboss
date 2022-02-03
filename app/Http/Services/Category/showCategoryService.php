<?php

namespace App\Http\Services\Category;

use App\Models\Category;
use App\Repositories\Interfaces\Category\CategoryRepositoryInterface;
use Exception;

class showCategoryService
{

    private  $repository;

    public function __construct(CategoryRepositoryInterface $repository)
    {
        return $this->repository = $repository;
    }

    public function execute(int $id): ?Category
    {  
        $categories = $this->repository->show($id);
        if (!$categories)
            throw new Exception("Nenhuma categoria encontrada");

        return $categories;
    }
}
