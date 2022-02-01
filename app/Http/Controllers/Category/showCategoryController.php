<?php

namespace App\Http\Controllers;

use App\Http\Services\Category\CategoryService;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class CategoryController
{

    protected $service;

    public function __construct(CategoryService $service)
    {
        return $this->service = $service;
    }

    public function index(): ?Collection
    {
        try {
           return $this->service->index();
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],400);
        }   
    }

}