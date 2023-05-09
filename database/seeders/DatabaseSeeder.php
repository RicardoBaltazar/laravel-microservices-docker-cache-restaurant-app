<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\MenuFactory;
use Database\Factories\RestaurantFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        RestaurantFactory::new()->count(3)->create();
        MenuFactory::new()->count(3)->create();
    }
}
