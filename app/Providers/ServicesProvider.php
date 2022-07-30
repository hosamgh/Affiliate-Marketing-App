<?php

namespace App\Providers;

use App\ServiceInterfaces\CategoriesServiceInterface;
use App\ServiceInterfaces\InvitationUsersServiceInterface;
use App\ServiceInterfaces\TransactionsServiceInterface;
use App\ServiceInterfaces\UsersServiceInterface;
use App\ServiceInterfaces\VisitorsServiceInterface;
use App\Services\CategoriesService;
use App\Services\InvitationUsersService;
use App\Services\TransactionsService;
use App\Services\UsersService;
use App\Services\VisitorsService;
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
        $this->app->bind(VisitorsServiceInterface::class,VisitorsService::class);
        $this->app->bind(InvitationUsersServiceInterface::class,InvitationUsersService::class);
   $this->app->bind(TransactionsServiceInterface::class,TransactionsService::class);
   
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
