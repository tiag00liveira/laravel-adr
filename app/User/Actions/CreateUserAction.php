<?php

namespace App\User\Actions;

use App\User\Domain\Repositories\UserRepository;
use App\User\Domain\Responders\CreateUserResponder;
use Illuminate\Http\Request;

class CreateUserAction
{
    protected $users;
    protected $responder;

    public function __construct(UserRepository $users, CreateUserResponder $responder)
    {
        $this->users = $users;
        $this->responder = $responder;
    }

    public function __invoke(Request $request)
    {
        $user = $this->users->create($request->only(['name', 'email', 'password']));
        return $this->responder->respond($user);
    }
}
