<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use App\Mail\NotifyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class SendMailController extends Controller
{
    public function getSendMail()
    {
        return view('singleMail');
    }

    public function postSendMail(Request $request)
    {
        try {
            Mail::to('hoangkha0164@gmail.com')->send(new NotifyMail());
            return redirect('sendMail')->withSuccess('Great! Successfully send in your mail');
        } catch (Throwable $th) {
            Log::error("Send single mail failed: " . $th);
            return redirect('sendMail')->withErrors('Sorry! Please try again latter');
        }

    }

    public function postSendJobMail(Request $request)
    {
        try {
            SendMailJob::dispatch();
            return redirect('sendMail')->withSuccess('Great! Successfully send job in your mail');
        } catch (Throwable $th) {
            Log::error("Send job mail failed: " . $th);
            return redirect('sendMail')->withErrors('Sorry! Please try again latter');
        }

    }
}
