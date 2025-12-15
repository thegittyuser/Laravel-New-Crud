<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;


class authUser extends Authenticatable
{
    protected $fillable = [
        'username',
        'email',
        'password',
        'phone',
    ];
}
