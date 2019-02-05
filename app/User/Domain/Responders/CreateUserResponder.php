<?php

namespace App\User\Domain\Responders;

use App\User\Domain\Models\User;
use App\Responders\Responder;
use App\Interfaces\ResponderInterface;

class CreateUserResponder extends Responder implements ResponderInterface
{
    public function respond()
    {
        return response()->json($this->response->getData(), $this->response->getStatus());
    }
}
