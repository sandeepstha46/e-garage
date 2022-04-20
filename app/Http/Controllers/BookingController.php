<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bookings;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function ViewBooking(Request $request)
    {
        $data = Bookings::orderBy('id', 'asc')->get();
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

    public function EditBooking($id)
    {
        $booking = Bookings::where('id', $id)->first();
        return view('booking.edit-booking', compact('booking'));
    }

    public function UpdateBooking(Request $request, $id)
    {
        $booking = Bookings::findOrFail($id);
        $booking->b_id = $request->b_id;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->btype = $request->btype;
        $booking->p_number = $request->p_number;
        $booking->v_number = $request->v_number;
        $booking->textarea = $request->textarea;

        if ($booking->save()) {
            return redirect('booking/view')->with('success', 'Booking Updated Successfully');
        } else {
            return redirect('booking/edit-booking')->with('errors', ' Sorry Some Error Occured');
        }
    }

    public function DeleteBooking($id)
    {
        $booking = User::findOrFail($id);
        $result = $booking->save();
        $data = User::orderBy('id', 'asc')->get();

        if ($result) {
            return view('booking/view', compact('data'))->with('success', 'Booking Deleted Successfully');
        } else {
            return redirect('booking/edit-booking')->with('errors', ' Sorry Some Error Occured');
        }
    }
}
