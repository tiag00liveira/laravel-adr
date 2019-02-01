<?php

namespace App\User\Domain\Repositories;

use App\User\Domain\Models\User;

class UserRepository
{
    public function create(array $data)
    {
        return User::create($data);
    }
}
