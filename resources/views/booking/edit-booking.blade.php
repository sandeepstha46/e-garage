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
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Booking ID</label>
                            <input class="form-control" type="number" name="b_id" placeholder="{{ $booking->b_id }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" placeholder="{{ $booking->name }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="text" class="form-control" id="usr" name="email" placeholder="{{ $booking->email}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Booking Type</label>
                            <select class="form-control" id="sel2" name="btype">
                                <option value="0">Select Service</option>
                                <option value="1">Bike Service</option>
                                <option value="2">Car Serivce</option>
                                <option value="3">General Repair</option>
                                <option value="4">Cleaning / Detailing</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" class="form-control" name="p_number" id="usr1" placeholder="{{ $booking->p_number }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Vehicle Number</label>
                            <input type="number" class="form-control" id="usr1" name="v_number" placeholder="{{ $booking->v_number }}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Extra Message</label>
                            <textarea class="form-control" rows="5" id="comment" name="textarea" placeholder="{{ $booking->textarea}}"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary buttonedit1">Update Booking</button>
            </form>
        </div>
    </div>
</div>

@endsection