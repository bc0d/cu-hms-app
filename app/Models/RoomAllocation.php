<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomAllocation extends Model
{
    protected $table = 'room_allocation_req';
    protected $primaryKey = 'allocate_req_id';

    protected $fillable = [
        'student_id',
        'department_id',
        'dep_verification_status',
        'payment_status',
        'transaction_id',
        'allocation_status',
    ];

    public function student() {

        return $this->belongsTo(Student::class, 'student_id');
    }

    public function department() {
        
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function transaction() {

        return $this->belongsTo(Transaction::class, 'transaction_id');
    }
}
