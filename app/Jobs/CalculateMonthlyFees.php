<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Student;
use App\Models\Fee;
use App\Models\RoomRent;
use App\Models\WaterElectricBill;
use Carbon\Carbon;

class CalculateMonthlyFees implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $currentMonth = Carbon::now()->startOfMonth();

        // Fetch active students
        $students = Student::with('bed.room.block.hostel')->where('status', 'Active')->get();

        foreach ($students as $student) {
            // Calculate room rent
            $roomRentFee = Fee::where('hostel_id', $student->bed->room->block->hostel_id)
                ->where('room_type', $student->bed->room->room_type)
                ->where('fee_name', 'room rent')
                ->first();

            if ($roomRentFee) {
                RoomRent::create([
                    'fee_id' => $roomRentFee->fee_id,
                    'student_id' => $student->student_id,
                    'month_of_fee' => $currentMonth->toDateString(),
                    'paid_status' => 'Pending',
                    'payment_date' => null,
                    'transaction_id' => null,
                    'amount' => $roomRentFee->amount,
                ]);
            }

            // Calculate water/electric bill
            $waterElectricFee = Fee::where('hostel_id', $student->bed->room->block->hostel_id)
                ->where('room_type', $student->bed->room->room_type)
                ->where('fee_name', 'water/electric bill')
                ->first();

            if ($waterElectricFee) {
                WaterElectricBill::create([
                    'fee_id' => $waterElectricFee->fee_id,
                    'student_id' => $student->student_id,
                    'month_of_fee' => $currentMonth->toDateString(),
                    'paid_status' => 'Pending',
                    'payment_date' => null,
                    'transaction_id' => null,
                    'amount' => $waterElectricFee->amount,
                ]);
            }
        }

        // Log success or perform any additional actions if needed
        logger('Monthly fees calculated successfully.');
    }
}
