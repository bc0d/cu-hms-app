<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Jobs\CalculateMonthlyFees;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        if (config('app.job_enabled', false)) {
            $schedule->job(new CalculateMonthlyFees)->everyMinute();
        }
    }

    //job scheduling for fees
    // protected function schedule(Schedule $schedule) {

    //     if (config('app.job_enabled', false)) {
    //         $schedule->job(new CalculateMonthlyFees)->monthlyOn(1, '00:00');
    //     }
    // }


    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }


}
