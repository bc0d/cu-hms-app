<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomChange extends Model
{
    protected $table = 'room_change';
    protected $primaryKey = 'roomchange_id';

    protected $fillable = [
        'student_id',
        'current_room',
        'request',
        'reason',
        'status',
        'updatedby',
    ];

    public function student() {
        return $this->belongsTo(Student::class, 'student_id', 'student_id');
    }

    public function room() {
        return $this->belongsTo(Room::class, 'current_room', 'room_id');
    }

}
