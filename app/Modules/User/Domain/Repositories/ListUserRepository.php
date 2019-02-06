<?php

namespace App\Modules\User\Domain\Repositories;

use App\Modules\User\Domain\Models\User;
use Illuminate\Database\Eloquent\Collection;

class ListUserRepository
{
    public function all() : Collection
    {
        return User::orderBy('name', 'ASC')->take(10)->get();
    }

    public function find(string $uuid) : User
    {
        return User::findOrFail($uuid);
    }
}
