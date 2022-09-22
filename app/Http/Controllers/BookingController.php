<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
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
            $data = Bookings::orderBy('id', 'desc')->where('rank', '>', 0)->paginate(12);
            return view('booking.view-booking', compact('data'));
        } else {
            //fetched bookings of those user who booked it.
            $data = Bookings::orderBy('id', 'desc')->whereUId(Auth::id())->where('rank', '>', 0)->paginate(12);
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
        $urgentBooking = Bookings::all()->where('rank', '>', 0)->where('urgent', '>', 0);
        $priceBooking = Bookings::all()->where('rank', '>', 0)->where('price', '=', '250');
        $allBooking = Bookings::all()->where('rank', '>', 0);
        $isUrgent = request('urgent');
        $booking = new Bookings;

        // if booking is greater then 10
        if ($allBooking->count() > 10) {
            // return daily limit
            return redirect('booking/view')->with('errors', 'Daily Limit Exceeded');
        }
        // if booking is less then 10
        elseif ($allBooking->count() < 10) {
            // if booking is less then 10 and if its urgent
            if ($isUrgent == true) {
                // if booking is less then 10, case is urgent and total urgent is less then 5
                if ($urgentBooking->count() < 3) {
                    $request->validate([
                        'type' => 'required',
                        'phone' => 'required|min:10|max:14',
                        'vehicle' => 'required|regex: /([A-Z]\w{1,2}\W{1})+([0-9]\w{1,2}\W{1})+([A-Z]\w{2}\W{1})+([0-9]\w{3})/i',
                    ]);
                    $booking->name = Auth::user()->name;
                    $booking->email = Auth::user()->email;
                    $booking->type = $request->type;
                    $booking->phone = $request->phone;
                    $booking->vehicle = $request->vehicle;
                    $booking->urgent = $request->urgent;
                    $booking->textarea = $request->textarea;
                    $booking->price = 250;
                    $booking->u_id = Auth::user()->id;
                    if ($booking->save()) {
                        // Mail::to($booking->email)->send(new updateBooking($booking));
                        return redirect('booking/view')->with('success', 'Booking Added Successfully');
                    }
                }
                // if booking is less then 10, case is urgent and case is greater then 5 
                else {
                    return redirect('booking/view')->with('errors', 'Daily Urgent Limit Exceeded');
                }
            }
            // if booking is less then 10 and is not urgent 
            else {
                // if booking is less then 10 , case is not urgent but total booking is greater then 5
                if ($allBooking->count() < 5) {
                    $request->validate([
                        'type' => 'required',
                        'phone' => 'required|min:10|max:14',
                        'vehicle' => 'required|regex: /([A-Z]\w{1,2}\W{1})+([0-9]\w{1,2}\W{1})+([A-Z]\w{2}\W{1})+([0-9]\w{3})/i',
                    ]);
                    $booking->name = Auth::user()->name;
                    $booking->email = Auth::user()->email;
                    $booking->type = $request->type;
                    $booking->phone = $request->phone;
                    $booking->vehicle = $request->vehicle;
                    $booking->urgent = $request->urgent;
                    $booking->textarea = $request->textarea;
                    $booking->price = 250;
                    $booking->u_id = Auth::user()->id;
                    if ($booking->save()) {
                        // Mail::to($booking->email)->send(new updateBooking($booking));
                        return redirect('booking/view')->with('success', 'Booking Added Successfully');
                    }
                }
                // if booking is less then 10, case is not urgent but total booking is less then 5
                else {
                    $request->validate([
                        'type' => 'required',
                        'phone' => 'required|min:10|max:14',
                        'vehicle' => 'required|regex: /([A-Z]\w{1,2}\W{1})+([0-9]\w{1,2}\W{1})+([A-Z]\w{2}\W{1})+([0-9]\w{3})/i',
                    ]);
                    $booking->name = Auth::user()->name;
                    $booking->email = Auth::user()->email;
                    $booking->type = $request->type;
                    $booking->phone = $request->phone;
                    $booking->vehicle = $request->vehicle;
                    $booking->urgent = $request->urgent;
                    $booking->textarea = $request->textarea;
                    $booking->price = 350;
                    $booking->u_id = Auth::user()->id;
                    if ($booking->save()) {
                        // Mail::to($booking->email)->send(new updateBooking($booking));
                        return redirect('booking/view')->with('success', 'Booking Added Successfully');
                    }
                }
            }
        } else {
            return redirect('booking/view')->with('errors', 'There is some issues.');
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
            $request->validate([
                'type' => 'required',
                'phone' => 'required|min:10|max:14',
                'vehicle' => 'required|regex: /([A-Z]\w{1,2}\W{1})+([0-9]\w{1,2}\W{1})+([A-Z]\w{2}\W{1})+([0-9]\w{3})/i',
            ]);
            $booking->name = Auth::user()->name;
            $booking->email = Auth::user()->email;
            $booking->type = $request->type;
            $booking->phone = $request->phone;
            $booking->vehicle = $request->vehicle;
            $booking->urgent = $request->urgent;
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
        $data->rank = 0;
        $email = $data->email;
        $result = $data->save();
        $data = Bookings::orderBy('id', 'asc')->where('rank', 1)->get();
        if ($result) {
            Mail::to($email)->send(new cancelBooking($data));
            return redirect('booking/view')->with('success', 'Booking Deleted Successfully');
        } else {
            return redirect('booking/edit-booking')->with('errors', ' Sorry Some Error Occurred');
        }
    }
}
