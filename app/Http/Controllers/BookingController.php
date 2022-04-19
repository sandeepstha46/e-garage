<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function ViewBooking()
    {
        $data = Bookings::orderBy('id');
        return view('booking.view-booking', compact('data'));
    }

    public function AddBooking()
    {
        return view('booking.add-booking');
    }

    public function AddNewBooking(Request $request)
    {
        $booking = new Bookings;
        $booking->b_id = $request->b_id;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->btype = $request->btype;
        $booking->p_number = $request->p_number;
        $booking->v_number = $request->v_number;
        $booking->textarea = $request->textarea;

        if ($booking->save()) {
            return redirect('booking/view')->with('success', 'New Booking Added Successfully');
        } else {
            return redirect('booking/view')->with('errors', ' Sorry Some Error Occured');
        }
    }

    public function EditBooking()
    {
        return view('booking.edit-booking');
    }
}
