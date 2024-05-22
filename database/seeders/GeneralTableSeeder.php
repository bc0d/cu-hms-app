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
                'session_officer' => 'Telma',
                'contact_no' => '0487-253473',
            ],

            [
                
                'department_name' => 'Department Of Mathematics',
                'hod' => 'Dr Preethi Kuttipulakkal',
                'session_officer' => 'Praveen KV',
                'contact_no' => '0494-2407428',
            ],

            [
               
                'department_name' => 'Department of Statistics',
                'hod' => 'dr S D Krishnarani',
                'session_officer' => 'Anas Muhammad Karim',
                'contact_no' => '0494-2407341',
            ],

            [
                
                'department_name' => 'Department of Education',
                'hod' => 'Prof. (Dr.). BINDHU. C.M',
                'session_officer' => 'Nisharani',
                'contact_no' => '0494-2407510',
            ],

            [
                
                'department_name' => 'Department of Malayalam & Kerala Studies ',
                'hod' => 'Dr. P.Somanadhan',
                'session_officer' => 'Lakshmanan A',
                'contact_no' => '0494-2407255',
            ],

            [
                
                'department_name' => 'Department of Commerce and Management Studies',
                'hod' => 'Dr. Sreesha C H',
                'session_officer' => 'Ms. Santhi K.J',
                'contact_no' => '0494-2407363',
            ]
        ]);
        DB::table('courses')->insert([
            [
            
                'course_name' => 'MSc Computer Science'
            ],

            [
                
                'course_name' => 'MSc Mathematics'
            ],

            [
                
                'course_name' => 'MSc Statistics'
            ],

            [
                
                'course_name' => 'MEd'
            ],

            [
                
                'course_name' => 'MA Malayalam'
            ],

            [
                
                'course_name' => 'MCom'
            ]

            ]);
            DB::table('complaints')->insert([
                [
                    'complaint_id' => '',
                    'student_id' => '',
                    'category' => '',
                    'complaint' => '',
                    'status' => '',
                    'closedby' => ''
                ],

                [
                    'complaint_id' => '',
                    'student_id' => '',
                    'category' => '',
                    'complaint' => '',
                    'status' => '',
                    'closedby' => ''
                ],

                [
                    'complaint_id' => '',
                    'student_id' => '',
                    'category' => '',
                    'complaint' => '',
                    'status' => '',
                    'closedby' => ''
                ],

                [
                    'complaint_id' => '',
                    'student_id' => '',
                    'category' => '',
                    'complaint' => '',
                    'status' => '',
                    'closedby' => ''
                ],

                [
                    'complaint_id' => '',
                    'student_id' => '',
                    'category' => '',
                    'complaint' => '',
                    'status' => '',
                    'closedby' => ''
                ],

                [
                    'complaint_id' => '',
                    'student_id' => '',
                    'category' => '',
                    'complaint' => '',
                    'status' => '',
                    'closedby' => ''
                ],

                [
                    'complaint_id' => '',
                    'student_id' => '',
                    'category' => '',
                    'complaint' => '',
                    'status' => '',
                    'closedby' => ''
                ]

            ]);
    }
}
