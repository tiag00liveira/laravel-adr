<?php

namespace App\Traits;

use Ramsey\Uuid\Uuid;

trait Uuid
{
    public static function bootUuid()
    {
        static::creating(function ($model) {
            $model->id = Uuid::uuid4();
        });
    }
}
