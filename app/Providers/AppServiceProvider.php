<?php

namespace App\Providers;

use App\Interfaces\RepositoryInterface;
use App\Interfaces\Users\UserRepositoryInterface;
use App\Repositories\Restaurants\RestaurantRepository;
use App\Repositories\Users\UserRepository;
use App\Services\Restaurants\RestaurantService;
use App\Services\Users\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->when(UserService::class)
        ->needs(UserRepositoryInterface::class)
        ->give(UserRepository::class);

        app()->when(RestaurantService::class)
        ->needs(RepositoryInterface::class)
        ->give(RestaurantRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
