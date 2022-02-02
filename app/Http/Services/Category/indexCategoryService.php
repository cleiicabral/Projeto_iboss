<?php

namespace App\Http\Services\Category;

use App\Models\Category;
use App\Repositories\Interfaces\Category\CategoryRepositoryInterface;
use Exception;
use Illuminate\Database\Eloquent\Collection;

class indexCategoryService
{

    protected $repository;

    public function __construct(CategoryRepositoryInterface $repository)
    {
        return $this->repository = $repository;
    }

    public function execute(): ? Collection
    {
        $categories = $this->repository->index();
        if (!$categories)
            throw new Exception("Nenhuma categoria encontrada");

        return $categories;
    }

}
