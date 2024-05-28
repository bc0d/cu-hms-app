<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeeDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fee_details')->insert([
            [
                'fee_title' => 'Hostel Admission Fee',
                'amount' => '120.00',
            ],

            [
                'fee_title' => 'Hostel Admission Caution Deposit',
                'amount' => '2000.00',
            ],

            [
                'fee_title' => 'Room Rent Mens Single',
                'amount' => '150.00',
            ],

            [
                'fee_title' => 'Room Rent Mens Combined',
                'amount' => '80.00',
            ],

            [
                'fee_title' => 'Room Rent Womens Single',
                'amount' => '150.00',
            ],

            [
                'fee_title' => 'Room Rent Womens Combined',
                'amount' => '80.00',
            ],

            [
                'fee_title' => 'Electricity Bill Mens Single',
                'amount' => '140.00',
            ],

            [
                'fee_title' => 'Electricity Bill Mens Combined',
                'amount' => '100.00',
            ],

            [
                'fee_title' => 'Electricity Bill Womens Single',
                'amount' => '140.00',
            ],

            [
                'fee_title' => 'Electricity Bill Womens Combined',
                'amount' => '100.00',
            ],
        ]);
    }
}
