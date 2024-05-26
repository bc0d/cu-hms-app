<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert([
            [
                
                'department_name' => 'Department Of Computer Science',
                'hod' => '1',
                'section_officer' => 'Telma',
                'contact_no' => '0487-253473',
            ],

            [
                
                'department_name' => 'Department Of Mathematics',
                'hod' => '2',
                'section_officer' => 'Praveen KV',
                'contact_no' => '0494-2407428',
            ],

            [
               
                'department_name' => 'Department of Statistics',
                'hod' => '3',
                'section_officer' => 'Anas Muhammad Karim',
                'contact_no' => '0494-2407341',
            ],

            [
                
                'department_name' => 'Department of Education',
                'hod' => '4',
                'section_officer' => 'Nisharani',
                'contact_no' => '0494-2407510',
            ],

            [
                
                'department_name' => 'Department of Malayalam & Kerala Studies',
                'hod' => '5',
                'section_officer' => 'Lakshmanan A',
                'contact_no' => '0494-2407255',
            ],

            [
                
                'department_name' => 'Department of Commerce and Management Studies',
                'hod' => '6',
                'section_officer' => 'Ms. Santhi K.J',
                'contact_no' => '0494-2407363',
            ]
        ]);

        DB::table('courses')->insert([
            [
                'department_id' => '1',
                'course_name' => 'MSc Computer Science',
                'course_type' => 'PG',
                'course_duration' => '2',
            ],

            [
                'department_id' => '2',
                'course_name' => 'MSc Mathematics',
                'course_type' => 'PG',
                'course_duration' => '2',
            ],

            [
                'department_id' => '3',
                'course_name' => 'MSc Statistics',
                'course_type' => 'PG',
                'course_duration' => '2',
            ],

            [
                'department_id' => '4',
                'course_name' => 'MEd',
                'course_type' => 'PG',
                'course_duration' => '2',
            ],

            [
                'department_id' => '5',
                'course_name' => 'MA Malayalam',
                'course_type' => 'PG',
                'course_duration' => '2',
            ],

            [
                'department_id' => '6',
                'course_name' => 'MCom',
                'course_type' => 'PG',
                'course_duration' => '2',
            ],

            [
                'department_id' => '6',
                'course_name' => 'MBA',
                'course_type' => 'PG',
                'course_duration' => '2',
            ]

        ]);

    }
}
