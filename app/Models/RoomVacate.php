<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomVacate extends Model
{
    protected $table = 'room_vacation_req';

    protected $primaryKey = 'vacate_req_id';

    public function student() {
        return $this->belongsTo(Student::class, 'student_id', 'student_id');
    }

}
