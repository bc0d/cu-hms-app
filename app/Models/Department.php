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
}
