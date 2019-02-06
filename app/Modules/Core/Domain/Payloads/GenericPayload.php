<?php

namespace App\Modules\Core\Domain\Payloads;

use App\Modules\Core\Domain\Payloads\Payload;

class GenericPayload extends Payload
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
