<?php

namespace App\Providers;

use App\ServiceInterfaces\CategoriesServiceInterface;
use App\ServiceInterfaces\UsersServiceInterface;
use App\Services\CategoriesService;
use App\Services\UsersService;
use Illuminate\Support\ServiceProvider;

class ServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CategoriesServiceInterface::class,CategoriesService::class);
        $this->app->bind(UsersServiceInterface::class,UsersService::class);
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
