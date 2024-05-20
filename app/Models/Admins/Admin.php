<?php

namespace App\Models\Admins;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Admin extends Model implements Authenticatable
{
    use AuthenticatableTrait;

    protected $primaryKey = 'admin_id';

    protected $fillable = [
        'name',
        'department',
        'designation',
        'access',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
