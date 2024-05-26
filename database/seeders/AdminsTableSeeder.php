<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade
use Illuminate\Support\Facades\Hash; // Import the Hash facade

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([

            [
                'name' => 'Dr Lajish VL',
                'department' => 'Department Of Computer Science',
                'designation' => 'hod',
                'access' => 'all',
                'email' => 'dcs@gmail.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'Dr Preethi Kuttipulakkal',
                'department' => 'Department Of Mathematics',
                'designation' => 'hod',
                'access' => 'all',
                'email' => 'dm@gmail.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'Dr S D Krishnarani',
                'department' => 'Department of Statistics',
                'designation' => 'hod',
                'access' => 'all',
                'email' => 'ds@gmail.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'Dr Bindhu C M',
                'department' => 'Department of Education',
                'designation' => 'hod',
                'access' => 'all',
                'email' => 'ded@gmail.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'Dr P Somanadhan',
                'department' => 'Department of Malayalam & Kerala Studies',
                'designation' => 'hod',
                'access' => 'all',
                'email' => 'dmks@gmail.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'Dr Sreesha C H',
                'department' => 'Department of Commerce and Management Studies',
                'designation' => 'hod',
                'access' => 'all',
                'email' => 'dcms@gmail.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'admin2',
                'department' => 'Mens Hostel',
                'designation' => 'staff',
                'access' => 'mens',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'admin3',
                'department' => 'Womens Hostel',
                'designation' => 'staff',
                'access' => 'womens',
                'email' => 'admin3@gmail.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'admin4',
                'department' => 'Mens Mess',
                'designation' => 'mess_admin',
                'access' => 'mens',
                'email' => 'admin4@gmail.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'admin5',
                'department' => 'Womens Mess',
                'designation' => 'mess_admin',
                'access' => 'womens',
                'email' => 'admin5@gmail.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'admin6',
                'department' => 'Mens Hostel',
                'designation' => 'warden',
                'access' => 'mens',
                'email' => 'admin6@gmail.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'admin7',
                'department' => 'Womens Hostel',
                'designation' => 'warden',
                'access' => 'womens',
                'email' => 'admin7@gmail.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'admin8',
                'department' => 'Registrar',
                'designation' => 'registrar',
                'access' => 'all',
                'email' => 'admin8@gmail.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'admin9',
                'department' => 'Admin',
                'designation' => 'admin',
                'access' => 'all',
                'email' => 'admin9@gmail.com',
                'password' => Hash::make('password'),
            ],
        ]);
    }
}
