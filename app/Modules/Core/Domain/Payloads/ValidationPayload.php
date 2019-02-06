<?php

namespace App\Modules\Core\Domain\Payloads;

use App\Modules\Core\Domain\Payloads\Payload;

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
