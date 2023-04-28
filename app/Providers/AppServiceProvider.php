<?php

namespace App\Providers;

use App\Interfaces\Users\UserRepositoryInterface;
use App\Repositories\Users\UserRepository;
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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
