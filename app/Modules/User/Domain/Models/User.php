<?php

namespace App\Modules\User\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class User extends Model
{
    public $incrementing = false;

    protected $time;

    protected $primaryKey = 'user_id';

    protected $hidden = [
        'password',
        'email_verified_at',
        'remember_token',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'password'
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->user_id = Uuid::uuid4();
            $model->password = password_hash($model->password, PASSWORD_ARGON2ID);
        });
    }
}
