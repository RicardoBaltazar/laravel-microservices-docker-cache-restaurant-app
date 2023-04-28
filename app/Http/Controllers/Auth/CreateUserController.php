<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Services\Users\UserService;

class CreateUserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService =$userService;
    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(CreateUserRequest $request)
    {
        $data = $request->all();
        return $this->userService->createUser($data);
    }
}
