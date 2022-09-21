@extends('layouts.app')
@section('body')

@if(Auth::user()->utype === 'ADM')
<div class="content container-fluid">
    <!-- success message -->
    <div class="page-header">
        @if (session('success'))
        <div id="mess-age">
            <p class="alert alert-success">{{ session('success') }}</p>
        </div>
        @endif
        <div class="row">
            <div class="col-sm-12 mt-1">
                <div class="greetings">
                    <h3 id="greetings" class="page-title mt-3"></h3>
                    <h3 class="page-title mt-3">&nbsp;{{ Auth::user()->name }},</h3>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card board1 fill">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <div>
                            <h3 class="card_widget_header">{{ $user->count() }}</h3>
                            <h6 class="text-muted">Users</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1B3975" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </span> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card board1 fill">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <div>
                            <h3 class="card_widget_header">{{ $daall->count() }}</h3>
                            <h6 class="text-muted">Bookings</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#1B3975" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                    </path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="12" y1="18" x2="12" y2="12"></line>
                                    <line x1="9" y1="15" x2="15" y2="15"></line>
                                </svg>
                            </span> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card board1 fill">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <div>
                            <h3 class="card_widget_header">{{ $req->count() }}</h3>
                            <h6 class="text-muted">Requests</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1B3975" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="17 8 12 3 7 8"></polyline>
                                    <line x1="12" y1="3" x2="12" y2="15"></line>
                                </svg></span> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card board1 fill">
                <div class="card-body">
                    <div class="dash-widget-header">
                        <div>
                            <h3 class="card_widget_header">{{ $product->count() }}</h3>
                            <h6 class="text-muted">Products</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="#1B3975" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- urgent case -->
    <div class="row align-items-center">
        <div class="col">
            <div class="mt-5">
                <h4 class="card-title float-left mt-2">Urgent Case</h4>
            </div>
        </div>
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
                                            <a id="adata" href="#" class="btn btn-sm bg-success-light mr-2">{{$booking->status}}</a>
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
            {{ $data->appends(['data' => $data->currentPage(), 'product' => $product->currentPage()])->links() }}
        </div>
    </div>
    <!-- urgent case end -->

    <!-- normal case -->
    <div class="row align-items-center">
        <div class="col">
            <div class="mt-5">
                <h4 class="card-title float-left mt-2">Normal Case</h4>
            </div>
        </div>
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
                                @foreach($daall as $normBooking)
                                <tr>
                                    <td>{{$normBooking->name}}</td>
                                    <td>{{$normBooking->email}}</td>
                                    <td id="bookingtype">{{$normBooking->type}}</td>
                                    <td>{{$normBooking->phone}}</td>
                                    <td>{{$normBooking->vehicle}}</td>
                                    <td>{{$normBooking->textarea}}</td>
                                    <td>
                                        <div class="actions">
                                            <a id="adata" href="#" class="btn btn-sm bg-success-light mr-2">{{$normBooking->status}}</a>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v ellipse_color"></i>
                                            </a>
                                            <form method="post" action="{{ url('booking/delete/'.$normBooking->id) }}">
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ url('booking/edit-booking/'.$normBooking->id) }}">
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
    <!-- normal case end -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body booking_card">
                    <div class="table-responsive">
                        <table class="datatable table table-stripped table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Phone Number</th>
                                    <th>Model</th>
                                    <th>Manufacturing Year</th>
                                    <th>Request Part</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($product as $producting)
                                <tr>
                                    <td>{{$producting->name}}</td>
                                    <td>{{$producting->p_number}}</td>
                                    <td>{{$producting->car_model}}</td>
                                    <td>{{$producting->car_year}}</td>
                                    <td>{{$producting->req_part}}</td>
                                    <td>{{$producting->textarea}}</td>
                                    <td>
                                        <div class="actions">
                                            <a id="adata" href="#" class="btn btn-sm bg-success-light mr-2">{{$producting->status}}</a>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v ellipse_color"></i>
                                            </a>
                                            <form method="post" action="{{ url('product/delete/'.$producting->id) }}">
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ url('product/edit-product/'.$producting->id) }}">
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
                <div class="col-md-12">
                    {{ $product->appends(['data' => $data->currentPage(), 'product' => $product->currentPage()])->links() }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 text-center copy-right">
        <p>Copyright &copy; All rights reserved to <a href="">e-garage</a></p>
    </div>
</div>
@else
<div class="content container-fluid">
    <div class="page-header">
        @if (session('success'))
        <div id="mess-age">
            <p class="alert alert-success">{{ session('success') }}</p>
        </div>
        @endif
        <div class="row">
            <div class="col-sm-12 mt-5">
                <div class="greetings">
                    <h3 id="greetings" class="page-title mt-3"></h3>
                    <h3 class="page-title mt-3">&nbsp;{{ Auth::user()->name }},</h3>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
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
                                            <a id="adata" href="#" class="btn btn-sm bg-success-light mr-2">{{$booking->status}}</a>
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
            {{ $data->links("pagination::bootstrap-4") }}
        </div>
        <div class="col-md-12 text-center copy-right">
            <p>Copyright &copy; All rights reserved to <a href="">e-garage</a></p>
        </div>
    </div>
</div>
@endif

@endsection