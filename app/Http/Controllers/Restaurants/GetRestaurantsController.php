<?php

namespace App\Http\Controllers\Restaurants;

use App\Http\Controllers\Controller;
use App\Services\Restaurants\RestaurantService;

class GetRestaurantsController extends Controller
{
    private $restaurantService;

    public function __construct(RestaurantService $restaurantService)
    {
        $this->restaurantService = $restaurantService;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return $this->restaurantService->getRestaurants();
    }
}
