<?php

namespace App\Repositories;

use App\Interfaces\AuthenticationInterface;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticationRepository implements AuthenticationInterface
{
    public function login(array $data)
    {
        return Auth::attempt($data);
    }

    public function registration(array $data)
    {
        return User::create($data);
    }
}

