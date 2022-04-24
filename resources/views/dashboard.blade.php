@extends('layouts.app')
@section('body')
@if(Auth::user()->utype === 'ADM')
<div class="content container-fluid">
    <div class="page-header">
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
                            <h3 class="card_widget_header">{{ $daall->count() }}</h3>
                            <h6 class="text-muted">Total Booking</h6>
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
                            <h3 class="card_widget_header">180</h3>
                            <h6 class="text-muted">Available Requests</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1B3975" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
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
                            <h3 class="card_widget_header">1538</h3>
                            <h6 class="text-muted">Enquiry</h6>
                        </div>
                        <div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1B3975" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
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
                            <h3 class="card_widget_header">364</h3>
                            <h6 class="text-muted">Collections</h6>
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
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body booking_card">
                    <div class="table-responsive">
                        <table class="datatable table table-stripped table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Booking Type</th>
                                    <th>Phone Number</th>
                                    <th>Vehicle Number</th>
                                    <th>Text Area</th>
                                    <th>Status</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $booking)
                                <tr>
                                    <td>{{$booking->b_id}}</td>
                                    <td>{{$booking->name}}</td>
                                    <td>{{$booking->email}}</td>
                                    <td>{{$booking->btype}}</td>
                                    <td>{{$booking->p_number}}</td>
                                    <td>{{$booking->v_number}}</td>
                                    <td>{{$booking->textarea}}</td>
                                    <td>
                                        <div class="actions">
                                            <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a>
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
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body booking_card">
                    <div class="table-responsive">
                        <table class="datatable table table-stripped table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Car Model</th>
                                    <th>Car Manufacturing Year</th>
                                    <th>Request Part</th>
                                    <th>Text Area</th>
                                    <th>Status</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($product as $product)
                                <tr>
                                    <td>{{$product->p_id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->p_number}}</td>
                                    <td>{{$product->car_model}}</td>
                                    <td>{{$product->car_year}}</td>
                                    <td>{{$product->req_part}}</td>
                                    <td>{{$product->textarea}}</td>
                                    <td>
                                        <div class="actions">
                                            <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v ellipse_color"></i>
                                            </a>
                                            <form method="post" action="{{ url('product/delete/'.$product->id) }}">
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ url('product/edit-product/'.$product->id) }}">
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
        <div class="col-md-12">
            {{ $data->links("pagination::bootstrap-4") }}
        </div>
    </div>
    <div class="col-md-12 text-center copy-right">
        <p>Copyright &copy; All rights reserved to <a href="">e-garage</a></p>
    </div>
</div>
@else
<div class="content container-fluid">
    <div class="page-header">
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
                                    <th>Booking ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Booking Type</th>
                                    <th>Phone Number</th>
                                    <th>Vehicle Number</th>
                                    <th>Text Area</th>
                                    <th>Status</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $booking)
                                <tr>
                                    <td>{{$booking->b_id}}</td>
                                    <td>{{$booking->name}}</td>
                                    <td>{{$booking->email}}</td>
                                    <td>{{$booking->btype}}</td>
                                    <td>{{$booking->p_number}}</td>
                                    <td>{{$booking->v_number}}</td>
                                    <td>{{$booking->textarea}}</td>
                                    <td>
                                        <div class="actions">
                                            <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a>
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