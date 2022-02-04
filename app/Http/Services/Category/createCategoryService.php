<?php

namespace App\Http\Services\Category;

use App\Dto\Category\createCategoryDto;
use App\Models\Category;
use App\Repositories\Interfaces\Category\CategoryRepositoryInterface;
use Exception;


class createCategoryService 
{
protected $repository;

    public function __construct(CategoryRepositoryInterface $repository)
    {
        return $this->repository = $repository;
    }

    public function execute(createCategoryDto $categoryDto) : ?Category
    {
        
        $categories = $this->repository->create($categoryDto);
        if (!$categories)
            throw new Exception("Nenhuma categoria encontrada");
            
        return $categories;
    }

}



