<?php

namespace App\Http\Services\Category;

use App\Repositories\Interfaces\Category\CategoryRepositoryInterface;
use Exception;
use Illuminate\Database\Eloquent\Collection;

class showCategoryService
{

    protected $repository;

    public function __construct(CategoryRepositoryInterface $repository)
    {
        return $this->repository = $repository;
    }

    public function execute($id): ?Collection
    {
        $categories = $this->repository->show($id);
        if (!$categories)
            throw new Exception("Nenhuma categoria encontrada");

        return $categories;
    }
     
}
