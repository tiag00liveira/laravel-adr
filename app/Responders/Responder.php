<?php

namespace App\Responders;

use App\Domain\Payloads ValidationPayload;

abstract class Responder
{
    protected $response;

    public function withResponse($response)
    {
        $this->response = $response;

        return $this;
    }
}
