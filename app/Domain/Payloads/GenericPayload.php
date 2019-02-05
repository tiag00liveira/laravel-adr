<?php

namespace App\Domain\Payloads;

use App\Domain\Payloads\Payload;

class GenericPayload extends Payload;
{
    protected $data;

    protected $status = 200;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getStatus()
    {
        return $this->status;
    }
}
