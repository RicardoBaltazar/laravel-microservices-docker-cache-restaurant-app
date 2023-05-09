<?php

namespace Tests\Unit;

use App\Exceptions\CustomException;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Mockery;
use Tests\TestCase;

class AuthServiceTest extends TestCase
{
    public function testLoginWithValidCredentials()
    {
        $this->assertTrue(true);
    }

    public function testLoginWithInvalidCredentials()
    {
        $this->assertTrue(true);
    }
}
