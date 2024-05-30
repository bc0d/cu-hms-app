<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class waterelectric_bill extends Model
{
    use HasFactory;
    protected $primary = 'waterelectric_bills_id';

    protected $fillable = [
        'fee_id',
        'student_id',
        'month_of_fee',
        'paid_status',
        'payment_date',
        'transaction_id',
    ];

    public function student() {

        return $this->belongsTo(Student::class, 'student_id');
    }

    public function fee() {
        return $this->belongsTo(Fee::class,'fee_id');
    }
}
