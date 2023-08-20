<?php

namespace App\Jobs;

use App\Mail\mail_mail;



use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;


class Email_Job implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $to_email;
    /**
     * Create a new job instance.
     */
    public function __construct($to_email)
    {
        //Here constructing the data
        $this->to_email=$to_email;

    }

    /**
     * Execute the job.
     */

    public function handle(): void
    {
        // Emaildata is put here from controller

        $emaildata =[
            'subject'=>'Test',
            'body'=>'Hi, this is my first laravel email project',
            'tagline' => 'Hi, this is my tagline'
        ];

        Mail::to($this->to_email)->send(new mail_mail($emaildata));

    }
}
