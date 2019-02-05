<?php

namespace App\Domain\Payloads;

use App\Domain\Payloads\Payload;

class ValidationPayload extends Payload
{
    protected $data;

    protected $status = 422;

    public function getData()
    {
        return [
            'errors' => $this->data
        ];
    }
}
