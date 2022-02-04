<?php

namespace App\Repositories\Category;

use App\Dto\Category\createCategoryDto;
use App\Models\Category;
use App\Repositories\Interfaces\Category\CategoryRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class CategoryRepository implements CategoryRepositoryInterface
{

    protected Category $model;

    public function __construct()
    {
        return $this->model = new Category;
    }

    public function index(): ?Collection
    {
        try {
            return $this->model->all();
        } catch (\Throwable $th) {
            return null;
        }
        
    }
    
    public function show(int $id): ? Category
    { 
        try {
         return $this->model::find($id);
        } catch (\Throwable $th) {
           return null;
        }
    }

    public function create(createCategoryDto $categoryDto): ? Category
    {
        return $this->model->create($categoryDto->toArray());
    }

    public function update(createCategoryDto $categoryDto, int $id): ? Category
    {
        try {
            $result =$this->model->find($id); 
            $result->update($categoryDto->toArray());
        } catch (\Throwable $th) {
            return null;
        }
        
        return  $result;
    }

    public function destroy(int $id): ? Category
    {
        try {
            $result =  $this->model->find($id);
            $result->delete();
        } catch (\Throwable $th) {
            return null;
        }
        
        return $result;
    }
}
