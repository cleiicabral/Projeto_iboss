<?php

namespace App\Repositories\Interfaces\Category;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

interface CategoryRepositoryInterface
{

    public function index(): ?Collection;
    public function getCategoryAll(): ?Collection;
    public function create(Request $request): ?Category;
    public function update(Request $request, int $id): ?Category;
    public function destroy(int $id): ?Category;

}



