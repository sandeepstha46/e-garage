@extends('layouts.app')
@section('user')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title mt-5">Add Booking</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form>
                <div class="row formtype">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Booking ID</label>
                            <input class="form-control" type="text" placeholder="BKG-0001">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="text" class="form-control" id="usr" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Booking Type</label>
                            <select class="form-control" id="sel2" name="sellist1">
                                <option>Bike</option>
                                <option>Car</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Date</label>
                            <div class="cal-icon">
                                <input type="date" class="form-control datetimepicker">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Time</label>
                            <div class="time-icon">
                                <input type="time" class="form-control" id="datetimepicker3">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Arrival Date</label>
                            <div class="cal-icon">
                                <input type="date" class="form-control datetimepicker">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Depature Date</label>
                            <div class="cal-icon">
                                <input type="date" class="form-control datetimepicker">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" class="form-control" id="usr1">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Extra Message</label>
                            <textarea class="form-control" rows="5" id="comment" name="text" placeholder="If you have any enquiry, write here"></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <button type="button" class="btn btn-primary buttonedit1">Create Booking</button>
</div>

@endsection