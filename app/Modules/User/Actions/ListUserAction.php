<?php

namespace App\Modules\User\Actions;

use App\Modules\User\Domain\Services\ListUserService;
use App\Modules\User\Responders\ListUserResponder;
use Illuminate\Http\Request;

class ListUserAction
{
    protected $service;
    protected $responder;

    public function __construct(ListUserService $service, ListUserResponder $responder)
    {
        $this->service = $service;
        $this->responder = $responder;
    }

    public function __invoke(Request $request)
    {
        $users = $this->service->handle();
        return $this->responder->withResponse($users)->respond();
    }
}
