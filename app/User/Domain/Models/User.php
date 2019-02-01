<?php

namespace App\User\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class User extends Model
{
    public $incrementing = false;
    protected $time;
    protected $primaryKey = 'user_id';
    protected $hidden = ['password'];
    protected $fillable = ['user_id', 'name', 'email', 'password'];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->user_id = Uuid::uuid4();
            $model->password = password_hash($model->password, PASSWORD_ARGON2ID);
        });
    }
}
