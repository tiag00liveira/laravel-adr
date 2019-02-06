<?php

namespace App\Modules\User\Domain\Repositories;

use App\Modules\User\Domain\Models\User;

class UserRepository
{
    public function create(array $data) : User
    {
        return User::create($data);
    }
}
