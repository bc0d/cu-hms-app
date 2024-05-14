<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

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
        'guardian',
        'guardian_phone',
        'pwd',
        'course_duration',
        'adm_date',
        'course_type',
        'reservation',
        'image'
    ];



    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'email';
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getAttribute('email');
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->getAttribute('password');
    }

    // You may need to implement other methods if required by your application

}
