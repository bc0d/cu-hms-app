<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsFilterExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $students;

    public function __construct($students)
    {
        $this->students = $students;
    }

    public function collection()
    {
        return $this->students->map(function ($student) {
            return [
                'Student Id' => $student->student_id,
                'Name' => $student->first_name . ' ' . $student->second_name,
                'DOB' => $student->dob,
                'Phone' => $student->phone,
                'Email' => $student->email,
                'Address' => $student->house . ', ' . $student->street . ', ' . $student->post . 'P.O, ' . $student->district . ', ' . $student->state . ', ' . $student->country . ', PIN-' . $student->pin,
                'Guardian' => $student->guardian,
                'Guardian Phone' => $student->guardian_phone,
                'Category' => $student->reservation,
                'PWD' => $student->pwd,
                'Hostel' => optional($student->bed->room->block->hostel)->hostel_name,
                'Block' => optional($student->bed->room->block)->block_name,
                'Room' => optional($student->bed->room)->room_name,
                'Bed' => optional($student->bed)->bed_name,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Student Id',
            'Name',
            'DOB',
            'Phone',
            'Email',
            'Address',
            'Guardian',
            'Guardian Phone',
            'Category',
            'PWD',
            'Hostel',
            'Block',
            'Room',
            'Bed',
        ];
    }
}
