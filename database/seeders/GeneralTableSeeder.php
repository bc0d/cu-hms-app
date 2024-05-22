<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'hod' => 'Dr Lajish VL',
                'section_officer' => 'Telma',
                'contact_no' => '0487-253473',
            ],

            [
                
                'department_name' => 'Department Of Mathematics',
                'hod' => 'Dr Preethi Kuttipulakkal',
                'section_officer' => 'Praveen KV',
                'contact_no' => '0494-2407428',
            ],

            [
               
                'department_name' => 'Department of Statistics',
                'hod' => 'dr S D Krishnarani',
                'section_officer' => 'Anas Muhammad Karim',
                'contact_no' => '0494-2407341',
            ],

            [
                
                'department_name' => 'Department of Education',
                'hod' => 'Prof. (Dr.). BINDHU. C.M',
                'section_officer' => 'Nisharani',
                'contact_no' => '0494-2407510',
            ],

            [
                
                'department_name' => 'Department of Malayalam & Kerala Studies ',
                'hod' => 'Dr. P.Somanadhan',
                'section_officer' => 'Lakshmanan A',
                'contact_no' => '0494-2407255',
            ],

            [
                
                'department_name' => 'Department of Commerce and Management Studies',
                'hod' => 'Dr. Sreesha C H',
                'section_officer' => 'Ms. Santhi K.J',
                'contact_no' => '0494-2407363',
            ]
        ]);
        DB::table('courses')->insert([
            [
                'department_id' => '1',
                'course_name' => 'MSc Computer Science'
            ],

            [
                'department_id' => '2',
                'course_name' => 'MSc Mathematics'
            ],

            [
                'department_id' => '3',
                'course_name' => 'MSc Statistics'
            ],

            [
                'department_id' => '4',
                'course_name' => 'MEd'
            ],

            [
                'department_id' => '5',
                'course_name' => 'MA Malayalam'
            ],

            [
                'department_id' => '6',
                'course_name' => 'MCom'
            ],

            [
                'department_id' => '6',
                'course_name' => 'MBA'
            ]

            ]);
            
    }
}
