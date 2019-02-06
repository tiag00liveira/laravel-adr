<?php

namespace App\Modules\Core\Responders;

use App\Modules\Core\Domain\Payloads\ValidationPayload;

abstract class Responder
{
    protected $response;

    public function withResponse($response)
    {
        $this->response = $response;

        return $this;
    }
}
