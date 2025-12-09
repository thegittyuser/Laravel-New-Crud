<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class authUser extends Model
{
    protected $fillable = [
        'username',
        'email',
        'password',
        'phone',
    ];
}
