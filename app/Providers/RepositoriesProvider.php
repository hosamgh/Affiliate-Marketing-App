<?php

namespace App\Providers;

use App\Repositories\CategoriesRepository;
use App\Repositories\InvitationUsersRepository;
use App\Repositories\TransactionsRepository;
use App\Repositories\UsersRepository;
use App\Repositories\VisitorsRepository;
use App\RepositoryInterfaces\CategoriesRepositoryInterface;
use App\RepositoryInterfaces\InvitationUsersRepositoryInterface;
use App\RepositoryInterfaces\TransactionsRepositoryInterface;
use App\RepositoryInterfaces\UsersRepositoryInterface;
use App\RepositoryInterfaces\VisitorsRepositoryInterface;
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
        $this->app->bind(VisitorsRepositoryInterface::class,VisitorsRepository::class);
        $this->app->bind(InvitationUsersRepositoryInterface::class,InvitationUsersRepository::class);
    $this->app->bind(TransactionsRepositoryInterface::class,TransactionsRepository::class);
    
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
