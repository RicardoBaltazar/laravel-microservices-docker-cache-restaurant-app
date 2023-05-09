<?php

namespace App\Repositories\Restaurants;

use App\Api\ApiMessages;
use App\Interfaces\RepositoryInterface;
use App\Models\Restaurant;

class RestaurantRepository implements RepositoryInterface
{
    private $restaurants;

    public function __construct(Restaurant $restaurants)
    {
        $this->restaurants = $restaurants;
    }

    public function all()
    {
        try {
            return $this->restaurants->all();

        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json([
                $message->getMessage(),
            ], 400);
        }
    }

    public function create(array $attributes)
    {
        return $this->returnResponse();
    }

    public function find(int $id)
    {
        return $this->returnResponse();
    }

    public function delete(int $id)
    {
        return $this->returnResponse();
    }

    public function update(int $id, array $attributes)
    {
        return $this->returnResponse();
    }

    private function returnResponse()
    {
        return response()->json('This functionality is still under development.', 501);
    }
}
