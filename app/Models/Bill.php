<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Bill extends Model
{
    use AuthenticatableTrait;

    protected $primary = 'water_electricity_payment_id';

    protected $fillable = [
        'monthly_fee_id',
        'student_id',
        'month_of_fee',
        'paid_status',
        'month_of_payment',
        'transaction_id',
    ];
}
