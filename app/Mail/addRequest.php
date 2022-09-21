<?php

namespace App\Mail;

use App\Models\Requests;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\SerializesModels;

class addRequest extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Requests $data)
    {
        $request = Requests::where('status', '>', 0)->where('u_id', Auth::user()->id)->first();
        return $this->view('emails.add-request-email', compact('request'));
    }
}
