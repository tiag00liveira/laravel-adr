<?php

namespace App\Domain\Payloads;

class ValidationPayload
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
