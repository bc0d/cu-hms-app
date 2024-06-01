<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomRent extends Model
{
    protected $table = 'room_rents';
    protected $primaryKey = 'room_rent_id';

    protected $fillable = [
        'fee_id',
        'student_id',
        'month_of_fee',
        'paid_status',
        'payment_date',
        'transaction_id',
        'amount',
    ];

    public function student() {

        return $this->belongsTo(Student::class, 'student_id');
    }

    public function fee() {
        return $this->belongsTo(Fee::class,'fee_id');
    }
}


