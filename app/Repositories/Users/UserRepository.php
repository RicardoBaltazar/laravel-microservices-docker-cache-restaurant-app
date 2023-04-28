<?php

namespace App\Repositories\Users;

use App\Api\ApiMessages;
use App\Interfaces\Users\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function create($data)
    {
        try {
            $this->user->create($data);

            return response()->json('User created successfully');

        } catch (\Exception $e) {
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 400);
        }
    }
}
