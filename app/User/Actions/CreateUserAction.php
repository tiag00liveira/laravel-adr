<?php

namespace App\User\Actions;

use App\User\Domain\Services\CreateUserService;
use App\User\Domain\Responders\CreateUserResponder;
use Illuminate\Http\Request;

class CreateUserAction
{
    protected $service;
    protected $responder;

    public function __construct(CreateUserService $service, CreateUserResponder $responder)
    {
        $this->service = $service;
        $this->responder = $responder;
    }

    public function __invoke(Request $request)
    {
        $user = $this->service->handle($request->only(['name', 'email', 'password']));
        return $this->responder->withResponse($user)->respond();
    }
}
