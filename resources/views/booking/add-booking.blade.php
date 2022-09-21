@extends('layouts.app')
@section('body')
<div class="content container-fluid">
    <div class="page-header">
        @if (count($errors) > 0)
        <div id="mess-age">
            @foreach ($errors->all() as $error)
            <p class="alert alert-danger">⚠️{{ $error }}
                @endforeach</p>
        </div>
        @endif
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title mt-5">Add Booking</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="{{ route('booking.add') }}" enctype="multipart/form-data">
                @csrf
                <div class="row formtype">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Booking Type</label>
                            <select class="form-control" id="sel2" name="type">
                                <option value="">Select Service</option>
                                <option value="Bike Service">Bike Service</option>
                                <option value="Car Service">Car Service</option>
                                <option value="General Repair">General Repair</option>
                                <option value="Cleaning / Detailing">Cleaning / Detailing</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" name="phone" class="form-control" id="usr1" value="{{ $user->phone }}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Vehicle Number</label>
                            <input type="string" name="vehicle" class="form-control" id="usr1" placeholder="KHA 85 KHA 0000">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <input type="checkbox" name="urgent" value="1" />
                            <label>Urgent</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Extra Message</label>
                            <textarea class="form-control" rows="5" id="comment" name="textarea" placeholder="If you have any enquiry, write here"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary buttonedit1">Create Booking</button>
            </form>
            <div class="note">
                <p>Standard Price is: Rs. 250</p>
                <p>*Please check urgent box only when it's urgent and save us and your time.</p>
            </div>
        </div>
    </div>
</div>

<script>
    function fadeIn() {
        document
    }
    setTimeout(() => {
        const message = document.getElementById('mess-age');
        message.style.cssText = 'display: none; transition: 0.2s all ease-in-out';

    }, 3000)
</script>
@endsection