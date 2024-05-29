<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $primaryKey = 'room_id';

    public function block() {

        return $this->belongsTo(Block::class, 'block_id');
    }

    public function beds() {

        return $this->hasMany(Bed::class, 'bed_id');
    }
}
