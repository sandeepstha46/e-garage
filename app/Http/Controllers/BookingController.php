<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Bookings;
use App\Mail\bookingsMail;
use App\Mail\cancelBooking;
use App\Mail\updateBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class BookingController extends Controller
{
    public function ViewBooking(Request $request)
    {
        // get all bookings for admin
        if (Auth::user()->utype === 'ADM') {
            $data = Bookings::orderBy('id')->where('status', '>', 0)->paginate(5);
            return view('booking.view-booking', compact('data'));
        } else {
            //fetched bookings of those user who booked it.
            $data = Bookings::orderBy('id', 'desc')->whereUId(Auth::id())->where('status', '>', 0)->paginate(5);
            return view('booking.view-booking', compact('data'));
        }
    }

    public function AddBooking(Request $request)
    {
        $user = User::find(Auth::user()->id);
        return view('booking.add-booking', compact('user'));
    }

    public function AddNewBooking(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'phone' => 'required|min:10|max:14',
            'vehicle' => 'required|regex: /([A-Z]\w{1,2}\W{1})+([0-9]\w{1,2}\W{1})+([A-Z]\w{2}\W{1})+([0-9]\w{3})/i',
        ]);

        $booking = new Bookings;
        $booking->name = Auth::user()->name;
        $booking->email = $request->email;
        $booking->type = $request->type;
        $booking->phone = $request->phone;
        $booking->vehicle = $request->vehicle;
        $booking->textarea = $request->textarea;
        $booking->u_id = Auth::user()->id;

        if ($booking->save()) {
            Mail::to($booking->email)->send(new bookingsMail($booking));
            return redirect('booking/view')->with('success', 'New Booking Added Successfully');
        } else {
            return redirect('booking/view')->with('errors', ' Sorry Some Error Occurred');
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
        if (Auth::user()->utype === 'ADM') {
            $booking->status = $request->status;
            $booking->textarea = $request->textarea;
        } else {
            $booking->name = $request->name;
            $booking->email = $request->email;
            $booking->type = $request->type;
            $booking->phone = $request->phone;
            $booking->vehicle = $request->vehicle;
            $booking->status = $request->status;
            $booking->textarea = $request->textarea;
        }
        if ($booking->save()) {
            Mail::to($booking->email)->send(new updateBooking($booking));
            return redirect('booking/view')->with('success', 'Booking Updated Successfully');
        } else {
            return redirect('booking/edit-booking')->with('errors', ' Sorry Some Error Occurred');
        }
    }

    public function DeleteBooking($id)
    {
        $data = Bookings::findOrFail($id);
        $data->status = 0;
        $email = $data->email;
        $result = $data->save();
        $data = Bookings::orderBy('id', 'asc')->where('status', 1)->get();
        if ($result) {
            Mail::to($email)->send(new cancelBooking($data));
            return redirect('booking/view')->with('success', 'Booking Deleted Successfully');
        } else {
            return redirect('booking/edit-booking')->with('errors', ' Sorry Some Error Occurred');
        }
    }
}
