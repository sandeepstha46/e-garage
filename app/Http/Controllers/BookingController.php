<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function ViewBooking()
    {
        return view('booking.view-booking');
    }

    public function AddBooking()
    {
        return view('booking.add-booking');
    }

    public function EditBooking()
    {
        return view('booking.edit-booking');
    }
}
