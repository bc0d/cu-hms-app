<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $primaryKey = 'feedback_id';

    protected $fillable = [
        'student_id',
        'review',
    ];
}
