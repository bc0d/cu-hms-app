<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $primaryKey = 'course_id';

    protected $fillable = [
        'course_name',
        'department_id',
        'course_duration',
    ];
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
