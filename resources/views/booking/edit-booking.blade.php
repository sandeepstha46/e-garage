@extends('layouts.app')
@section('body')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title mt-5">Edit Booking</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="{{ url ('booking/edit-booking/'.$booking->id) }}">
                @csrf
                <div class="row formtype">
                    <div class="col-md-4 hide-input ">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" value="{{ $booking->name }}">
                        </div>
                    </div>
                    <div class="col-md-4 hide-input">
                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="text" class="form-control" id="usr" name="email" value="{{ $booking->email}}">
                        </div>
                    </div>
                    @if(Auth::user()->utype === 'ADM')
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" id="sel2" name="status" value="{{ $booking->status}}">
                                <option value="">Select Status</option>
                                <option value="Pending">Pending</option>
                                <option value="Processing">Processing</option>
                                <option value="Vehicle Received">Vehicle Received</option>
                                <option value="Servicing">Servicing</option>
                                <option value="Ready To Deliver">Ready To Deliver</option>
                                <option value="Delivered">Delivered</option>
                            </select>
                        </div>
                    </div>
                    @else
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Booking Type</label>
                            <select class="form-control" id="sel2" name="type" value="{{ $booking->type}}">
                                <option value="">Select Service</option>
                                <option value="Bike Service">Bike Service</option>
                                <option value="Car Service">Car Service</option>
                                <option value="General Repair">General Repair</option>
                                <option value="Cleaning / Detailing">Cleaning / Detailing</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" class="form-control" name="phone" id="usr1" value="{{ $booking->phone }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Vehicle Number</label>
                            <input type="text" class="form-control" id="usr1" name="vehicle" value="{{ $booking->vehicle }}">
                        </div>
                    </div>
                    @endif
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Extra Message</label>
                            <textarea class="form-control" rows="5" id="comment" name="textarea" placeholder="{{ $booking->textarea }}"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary buttonedit1">Update Booking</button>
            </form>
        </div>
    </div>
</div>

@endsection