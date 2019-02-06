<?php

namespace App\Modules\User\Domain\Services;

use App\Modules\User\Domain\Repositories\CreateUserRepository;
use App\Modules\Core\Domain\Services\ServiceInterface;
use App\Modules\Core\Domain\Payloads\GenericPayload;
use App\Modules\Core\Domain\Payloads\ValidationPayload;

class CreateUserService implements ServiceInterface
{
    protected $users;

    public function __construct(CreateUserRepository $users)
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
