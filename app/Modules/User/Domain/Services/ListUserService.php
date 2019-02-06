<?php

namespace App\Modules\User\Domain\Services;

use App\Modules\User\Domain\Repositories\ListUserRepository;
use App\Modules\Core\Domain\Services\ServiceInterface;
use App\Modules\Core\Domain\Payloads\GenericPayload;
use App\Modules\Core\Domain\Payloads\ValidationPayload;

class ListUserService implements ServiceInterface
{
    protected $users;

    public function __construct(ListUserRepository $users)
    {
        $this->users = $users;
    }

    public function handle($data = [])
    {
        return new GenericPayload($this->users->all());
    }
}
