<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $primaryKey = 'rule_id';
    protected $fillable = [
        'title',
        'description',
        'updatedby',
    ];
}
