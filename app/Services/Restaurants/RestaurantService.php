<?php

namespace App\Services\Restaurants;

use App\Exceptions\CustomException;
use App\Interfaces\RepositoryInterface;

class RestaurantService
{
    private $restaurantService;

    public function __construct(RepositoryInterface $restaurantService)
    {
        $this->restaurantService = $restaurantService;
    }

    /**
     * method that lists all restaurants
     *
     */
    public function getRestaurants()
    {
        $restaurants = $this->restaurantService->all();

        if (!$restaurants) {
            throw new CustomException('We did not find any restaurant registered in our database', 401);
        }

        foreach ($restaurants as $restaurant) {
            unset($restaurant['created_at']);
            unset($restaurant['updated_at']);
        }

        return response()->json($restaurants);
    }
}
