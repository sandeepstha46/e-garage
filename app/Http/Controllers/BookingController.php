<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Bookings;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //status 1=pending ,2=reviewed 3=complete ,0=>delete
    public function ViewBooking(Request $request)
    {
        //fetched bookings of those user who booked it.
        $data = Bookings::orderBy('id', 'desc')->whereUId(Auth::id())->where('status', '>', 0)->paginate(5);
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
        $booking->u_id = Auth::user()->id;

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
        $booking->status = $request->status;
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
        $data = Bookings::findOrFail($id);
        $data->status = 0;
        $result = $data->save();

        $data = Bookings::orderBy('id', 'asc')->where('status', 1)->get();
        if ($result) {
            return redirect('booking/view')->with('success', 'Booking Deleted Successfully');
        } else {
            return redirect('booking/edit-booking')->with('errors', ' Sorry Some Error Occured');
        }
    }
}
