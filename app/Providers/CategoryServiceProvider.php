<?php

namespace App\Providers;

use App\Repositories\Category\CategoryRepository;
use App\Repositories\Interfaces\Category\CategoryRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class Category extends ServiceProvider
{
  
    public function register()
    {
        $this->app->singleton(
            CategoryRepositoryInterface::class,
            CategoryRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
