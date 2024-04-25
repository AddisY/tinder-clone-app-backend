<?php

namespace App\Console\Commands;

use App\Models\Person;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class NotifyAdminForPopularPeople extends Command
{
    protected $signature = 'notify:admin';
    protected $description = 'Send notification to admin for popular people';

    public function handle(): void
    {
        $popularPeople = Person::where('likes_count', '>', 50)->get();
        foreach ($popularPeople as $person) {
            Mail::raw("{$person->name} has more than 50 likes.", function ($mail) {
                $mail->from('noreply@tinderclone.com');
                $mail->to('addisyehasab@gmail.com')->subject('Popular Person Alert');
            });
        }
    }
}

