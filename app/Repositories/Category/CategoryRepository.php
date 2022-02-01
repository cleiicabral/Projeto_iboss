<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\Interfaces\Category\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryRepository implements CategoryRepositoryInterface
{


    public function create(Request $request): ?Category
    {
        
    }
}
