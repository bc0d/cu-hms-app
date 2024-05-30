<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{

    protected $primaryKey = 'fee_id';

    protected $fillable = [
        'hostel_id',
        'room_type',
        'fee_name',
        'amount',
        'updatedby',
    ];

    public function hostel() {

        return $this->belongsTo(Hostel::class, 'hostel_id');
    }

   
}
