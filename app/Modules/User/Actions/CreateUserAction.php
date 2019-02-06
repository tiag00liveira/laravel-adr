<?php

namespace App\Modules\User\Actions;

use App\Modules\User\Domain\Services\CreateUserService;
use App\Modules\User\Responders\CreateUserResponder;
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
