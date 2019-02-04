<?php

namespace App\User\Domain\Responders;

use App\User\Domain\Models\User;
use App\Interfaces\ResponderInterface;

class CreateUserResponder implements ResponderInterface
{
    public function respond($data)
    {
        return response()->json($data, 202);
    }
}
