<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomVacate extends Model
{
    protected $table = 'room_vacation_req';

    protected $primaryKey = 'vacate_req_id';

    protected $fillable = [
        'student_id',
        'department_id',
        'payment_status',
        'vacate_status',
        'office_status',
        'warden_status',
        'hod_status',
        'hostel_id'
    ];

    public function student() {
        return $this->belongsTo(Student::class, 'student_id', 'student_id');
    }

}
