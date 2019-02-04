<?php

namespace App\User\Domain\Services;

use App\User\Domain\Repositories\UserRepository;
use App\Interfaces\ServiceInterface;

class CreateUserService implements ServiceInterface
{
    protected $users;

    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    public function handle(array $data) : \App\User\Domain\Models\User
    {
        return $this->users->create($data);
    }
}
