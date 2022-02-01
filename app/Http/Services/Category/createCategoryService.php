<?php

namespace App\Http\Services\Category;

use App\Models\Category;
use App\Repositories\Interfaces\Category\CategoryRepositoryInterface;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class createCategoryService 
{
protected $repository;

    public function __construct(CategoryRepositoryInterface $repository)
    {
        return $this->repository = $repository;
    }

    public function create($request): ? Category
    {
        $categories = $this->repository->create($request);
        if (!$categories)
            throw new Exception("Nenhuma categoria encontrada");
            
        return $categories;
    }

}



