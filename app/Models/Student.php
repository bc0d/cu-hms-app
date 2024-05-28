<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
<<<<<<< HEAD:app/Models/Student.php
=======
use App\Models\Feedback;
use App\Models\Course;
>>>>>>> main:app/Models/User/Student.php

class Student extends Model implements Authenticatable
{
    use AuthenticatableTrait;

    protected $primaryKey = 'student_id';

    protected $fillable = [
        'first_name',
        'second_name',
        'gender',
        'department',
        'adm_no',
        'dob',
        'phone',
        'email',
        'password',
        'distance',
        'house',
        'street',
        'post',
        'district',
        'state',
        'country',
        'pin',
        'guardian',
        'guardian_phone',
        'pwd',
        'course',
        'adm_date',
        'reservation',
        'image',
        'bed_id',
    ];

    protected $hidden = [
        'password',
    ];

    public function feedbacks() {

        return $this->hasMany(Feedback::class, 'student_id');
    }

<<<<<<< HEAD:app/Models/Student.php
    public function transactions() {

        return $this->hasMany(Transaction::class, 'student_id');
=======
    public function course()
    {
        return $this->belongsTo(Course::class, 'course', 'course_id');
>>>>>>> main:app/Models/User/Student.php
    }
}
