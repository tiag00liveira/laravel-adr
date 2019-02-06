<?php

namespace App\Modules\User\Responders;

use App\Modules\Core\Responders\Responder;
use App\Modules\Core\Responders\ResponderInterface;

class CreateUserResponder extends Responder implements ResponderInterface
{
    public function respond()
    {
        return response()->json($this->response->getData(), $this->response->getStatus());
    }
}
