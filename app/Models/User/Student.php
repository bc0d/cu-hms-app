<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use App\Models\Feedback;

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
}
