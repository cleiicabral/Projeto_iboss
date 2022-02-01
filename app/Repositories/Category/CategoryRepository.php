<?php

namespace App\Repositories\Category;

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
    
    public function show($id): ?Collection
    {
        return $this->model->find($id);
    }

    public function create(Request $request): ? Category
    {
        return $this->model->create($request);
    }

    public function update(Request $request, int $id): ?Category
    {
        return $this->model->find($id)->update();
    }

    public function destroy(int $id): ?Category
    {
        return $this->model->find($id)->delete();
    }
}
