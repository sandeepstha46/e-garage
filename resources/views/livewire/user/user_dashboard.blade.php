@extends('layouts.app')
@section('user')

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
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="edit-booking.html">
                                                    <i class="fas fa-pencil-alt m-r-5"></i> Edit </a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset">
                                                    <i class="fas fa-trash-alt m-r-5"></i> Delete </a>
                                            </div>
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
        <div class="col-md-12 text-center copy-right">
            <p>Copyright &copy; All rights reserved to <a href="">e-garage</a></p>
        </div>
    </div>
</div>
@endsection