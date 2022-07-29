<?php

namespace App\Providers;

use App\Repositories\CategoriesRepository;
use App\Repositories\UsersRepository;
use App\RepositoryInterfaces\CategoriesRepositoryInterface;
use App\RepositoryInterfaces\UsersRepositoryInterface;
use App\ServiceInterfaces\UsersServiceInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->app->bind(CategoriesRepositoryInterface::class,CategoriesRepository::class);
        $this->app->bind(UsersRepositoryInterface::class,UsersRepository::class);
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
