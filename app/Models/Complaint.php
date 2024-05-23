<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $primaryKey = 'complaint_id';

    protected $fillable = [
        'student_id',
        'category',
        'complaint',
        'status',
        'closedby',
        'comment',
    ];
}
