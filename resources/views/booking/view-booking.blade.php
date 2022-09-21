@extends('layouts.app')
@section('body')

<div class="content container-fluid">
    <div class="page-header">
        @if (session('errors'))
        <div id="mess-age">
            <p class="alert alert-danger">{{ session('errors') }}</p>
        </div>
        @endif

        @if (session('success'))
        <div id="mess-age">
            <p class="alert alert-success">{{ session('success') }}</p>
        </div>
        @endif
        @if (Auth::user()->utype === 'ADM')
        <div class="row align-items-center">
            <div class="col">
                <div class="mt-5">
                    <h4 class="card-title float-left mt-2">All Bookings</h4>
                    <a href="{{ route('booking.add') }}" class="btn btn-primary float-right veiwbutton ">Add Booking</a>
                </div>
            </div>
        </div>
        @else
        <div class="row align-items-center">
            <div class="col">
                <div class="mt-5">
                    <h4 class="card-title float-left mt-2">My Bookings</h4>
                    <a href="{{ route('booking.add') }}" class="btn btn-primary float-right veiwbutton ">Add Booking</a>
                </div>
            </div>
        </div>
        @endif

    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body booking_card">
                    <div class="table-responsive">
                        <table class="datatable table table-stripped table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Booking Type</th>
                                    <th>Phone Number</th>
                                    <th>Vehicle Number</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $booking)
                                <tr>
                                    <td>{{$booking->name}}</td>
                                    <td>{{$booking->email}}</td>
                                    <td id="bookingtype">{{$booking->type}}</td>
                                    <td>{{$booking->phone}}</td>
                                    <td>{{$booking->vehicle}}</td>
                                    <td>{{$booking->textarea}}</td>
                                    <td>
                                        <div class="actions">
                                            <a id="status" href="#" class="btn btn-sm bg-success-light mr-2">
                                                {{$booking->status}}
                                            </a>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v ellipse_color"></i>
                                            </a>
                                            <form method="post" action="{{ url('booking/delete/'.$booking->id) }}">
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ url('booking/edit-booking/'.$booking->id) }}">
                                                        <i class="fas fa-pencil-alt m-r-5"></i> Edit </a>
                                                    @csrf
                                                    <button class="dropdown-item" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete </button>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ $data->links("pagination::bootstrap-4") }}
</div>

<script type="text/javascript">
    function closeMessage() {
        document.getElementById("mess-age").style.display = " none";
    }

    window.setTimeout(closeMessage, 3000);
</script>

@endsection