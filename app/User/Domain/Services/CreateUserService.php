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

    public function handle(array $data)
    {
        if (($validator = $this->validate($data))->fails()) {
            return new ValidationPayload($validator->getMessageBag());
        }
        return new GenericPayload($this->users->create($data));
    }

    protected function validate($data)
    {
        return validator($data, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
    }
}
