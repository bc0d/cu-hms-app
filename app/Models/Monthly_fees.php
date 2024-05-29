<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class monthly_fees extends Model
{
    use AuthenticatableTrait;

    protected $primaryKey = 'monthly_fee_id';

    protected $fillable = [
        'hostel id',
        'room_type',
        'fee_name',
        'amount',
    ];
    
    public function rent_payments() {
        return $this->hasMany(Rent_payments::class,'monthly_fee_id');
    }

    public function water_electricity_payments() {
        return $this->hasMany(Water_electricity_payments::class,'monthly_fee_id');
    }
}
