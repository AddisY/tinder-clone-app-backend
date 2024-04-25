<?php

namespace App\Console;

use App\Console\Commands\NotifyAdminForPopularPeople;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        NotifyAdminForPopularPeople::class,
    ];

    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('notify:admin')
            ->daily(); // This sets the task to run daily
    }

    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
