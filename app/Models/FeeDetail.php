<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeeDetail extends Model
{
    protected $table = 'fee_details';
    protected $primaryKey = 'fee_id';

    protected $fillable = [

        'fee_title',
        'amount',
    ];
}
