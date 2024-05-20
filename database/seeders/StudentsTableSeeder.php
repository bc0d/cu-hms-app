<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade
use Illuminate\Support\Facades\Hash; // Import the Hash facade

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'first_name' => 'andre',
                'second_name' => 'iniesta',
                'gender' => 'male',
                'department' => 'cs',
                'adm_no' => '1345',
                'dob' => '1992-04-11',
                'phone' => '5689234567',
                'email' => 'andreiniesta@gmail.com',
                'password' => Hash::make('password'),
                'distance' => '40',
                'house' => '12B',
                'street' => 'kolathara',
                'post' => 'kolathara',
                'district' => 'kozhikode',
                'state' => 'kerala',
                'country' => 'india',
                'guardian' => 'mustafa',
                'guardian_phone' => '898989898989',
                'pwd' => 'no',
                'course_duration' => '2',
                'adm_date' => '2023-07-19',
                'course_type' => 'pg',
                'reservation' => 'obc',
                'image' => 'users/img/profile/1815121959-andre.jpg',
            ],
            [
                'first_name' => 'abhi',
                'second_name' => 'rajan',
                'gender' => 'male',
                'department' => 'cs',
                'adm_no' => '1305',
                'dob' => '1997-08-22',
                'phone' => '9090909090',
                'email' => 'abhirajan@gmail.com',
                'password' => Hash::make('password'),
                'distance' => '30',
                'house' => 'meleparamb',
                'street' => 'kunnamangalam',
                'post' => 'kunnamangalam',
                'district' => 'kozhikode',
                'state' => 'kerala',
                'country' => 'india',
                'guardian' => 'rajan',
                'guardian_phone' => '8908908907',
                'pwd' => 'no',
                'course_duration' => '2',
                'adm_date' => '2023-07-26',
                'course_type' => 'pg',
                'reservation' => 'obc',
                'image' => 'users/img/profile/1915121959-abhi.jpg',
            ],
        ]);
    }
}
