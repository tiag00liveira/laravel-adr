<?php

namespace App\Modules\Core\Domain\Services;

interface ServiceInterface
{
    public function handle(array $data);
}
