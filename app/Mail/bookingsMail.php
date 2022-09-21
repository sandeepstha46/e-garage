<?php

namespace App\Mail;

use Illuminate\Support\Facades\Auth;
use App\Models\Bookings;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class bookingsMail extends Mailable
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
    public function build(Bookings $bookings)
    {
        $data = Bookings::where('rank', '>', 0)->where('u_id', Auth::user()->id)->first();
        return $this->view('emails.booking-email', compact('data'));
    }
}
