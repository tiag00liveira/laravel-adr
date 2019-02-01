<?php

namespace App\User\Domain\Responders;

use App\User\Domain\Models\User;

class CreateUserResponder
{
    public function respond(User $user)
    {
        return response()->json($user, 202);
    }
}
