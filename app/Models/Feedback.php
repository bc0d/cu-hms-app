<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User\Student;

class Feedback extends Model
{
    protected $primaryKey = 'feedback_id';

    protected $fillable = [
        'student_id',
        'review',
    ];

    public function student() {
        
        return $this->belongsTo(Student::class, 'student_id');
    }
}
