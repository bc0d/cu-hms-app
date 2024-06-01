<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    protected $primaryKey = 'hostel_id';

    public function blocks()
    {
        return $this->hasMany(Block::class, 'block_id');
    }

    public function fees() {
        return $this->hasMany(Fee::class, 'hostel_id', 'hostel_id');
    }
}
