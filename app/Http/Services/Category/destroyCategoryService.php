<?php

namespace App\Http\Services\Category;

use App\Models\Category;
use App\Repositories\Interfaces\Category\CategoryRepositoryInterface;
use Exception;

class destroyCategoryService
{

    protected $repository;

    public function __construct(CategoryRepositoryInterface $repository)
    {
        return $this->repository = $repository;
    }

    public function execute($id): ?Category
    {
        $categories = $this->repository->destroy($id);
        if (!$categories)
            throw new Exception("Não foi possível excluir a categoria");
            
        return $categories;
    }
     
}