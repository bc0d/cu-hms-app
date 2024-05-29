<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $primaryKey = 'block_id';

    public function hostel() {

        return $this->belongsTo(Hostel::class, 'hostel_id');
    }

    public function rooms() {

        return $this->hasMany(Room::class, 'room_id');
    }

}
