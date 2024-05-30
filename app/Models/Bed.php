<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bed extends Model
{
    protected $primaryKey = 'bed_id';

    public function room() {

        return $this->belongsTo(Room::class, 'room_id');
    }
}
