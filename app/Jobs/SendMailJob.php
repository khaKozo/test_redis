<?php

namespace App\Jobs;

use App\Mail\JobMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;

class SendMailJob implements ShouldQueue
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
    public function handle(): void
    {
        info(" ----------------------------- Starting send job Mail ----------------");
        sleep(10);
        for ($i=1; $i <100 ; $i++) { 
            $redisKey = "STAFF_" . $i;
            Redis::get($redisKey, "xin chao ". $i, "EX", 300);
        }
        Mail::to("hoangkha0164@gmail.com")->send( new JobMail());
        info(" ---------------  End send mail --------------");
    }
}
