<?php

namespace App\Services\Users;

// use App\Interfaces\Users\UserRepositoryInterface;

use App\Exceptions\CustomException;
use App\Repositories\Users\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function createUser($data)
    {
        $data['password'] = Hash::make($data['password']);

        return $this->userRepository->create($data);
    }
}
