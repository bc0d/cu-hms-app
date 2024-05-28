<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $primaryKey = 'transaction_id';

    protected $fillable = [

        'student_id',
        'purpose',
        'amount',
        'status',
    ];

    public function student() {

        return $this->belongsTo(Student::class, 'student_id');
    }

    public function roomAllocation() {

        return $this->hasOne(RoomAllocation::class, 'transaction_id');
    }
}
