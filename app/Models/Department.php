<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $prmaryKey = 'department_id';

    protected $fillable = [
        'department_name',
        'hod',
        'section_officer',
        'contact_no',
    ];

    public function roomAlloc() {

        return $this->hasMany(RoomAllocation::class, 'department_id');
    }
    
    public function course()
    {
        return $this->hasMany(Course::class, 'department_id', 'department_id');
    }
    public function student() {

        return $this->hasMany(Student::class, 'department_id', 'department');
    }
}
