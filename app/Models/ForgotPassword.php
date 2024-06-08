<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ForgotPassword extends Model
{
    protected $fillable = [
        'email',
        'key',
        'expires_at',
    ];
}
