@extends('layouts.app')
@section('user')

<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <div class="mt-5">
                    <h4 class="card-title float-left mt-2">Appointments</h4>
                    <a href="{{ route('booking.add') }}" class="btn btn-primary float-right veiwbutton ">Add Booking</a>
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
                                    <th>Book Type</th>
                                    <th>Booking Date</th>
                                    <th>Time</th>
                                    <th>Arrived Time</th>
                                    <th>Depature Time</th>
                                    <th>Email ID</th>
                                    <th>Ph.Number</th>
                                    <th>Status</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>BKG-0001</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm mr-2">
                                                <img class="avatar-img rounded-circle" src="{{ asset('images/profiles/avatar-03.jpg') }}" alt="User Image">
                                            </a>
                                            <a href="profile.html">Tommy Bernal
                                            </a>
                                        </h2>
                                    </td>
                                    <td>Bike</td>
                                    <td>21-03-2020</td>
                                    <td>11.00 AM</td>
                                    <td>22-03-2020</td>
                                    <td>23-03-2020</td>
                                    <td>
                                        someone@example.com
                                    </td>
                                    <td>631-254-6480</td>
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
                                <tr>
                                    <td>BKG-0002</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm mr-2">
                                                <img class="avatar-img rounded-circle" src="{{ asset('images/profiles/avatar-04.jpg') }}" alt="User Image">
                                            </a>
                                            <a href="profile.html">Richard Brobst
                                            </a>
                                        </h2>
                                    </td>
                                    <td>Car</td>
                                    <td>21-03-2020</td>
                                    <td>09.00 AM</td>
                                    <td>22-03-2020</td>
                                    <td>23-03-2020</td>
                                    <td>
                                        someone@example.com
                                    </td>
                                    <td>830-468-1042</td>
                                    <td>
                                        <div class="actions">
                                            <a href="#" class="btn btn-sm bg-success-light mr-2">Inactive</a>
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
                                <tr>
                                    <td>BKG-0003</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm mr-2">
                                                <img class="avatar-img rounded-circle" src="{{ asset('images/profiles/avatar-05.jpg') }}" alt="User Image">
                                            </a>
                                            <a href="profile.html">Ellen Thill
                                            </a>
                                        </h2>
                                    </td>
                                    <td>Bike</td>
                                    <td>21-03-2020</td>
                                    <td>08.00 AM</td>
                                    <td>22-03-2020</td>
                                    <td>23-03-2020</td>
                                    <td>
                                        someone@example.com
                                    </td>
                                    <td>508-335-5531</td>
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
                                <tr>
                                    <td>BKG-0004</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm mr-2">
                                                <img class="avatar-img rounded-circle" src="{{ asset('images/profiles/avatar-06.jpg') }}" alt="User Image">
                                            </a>
                                            <a href="profile.html">Corina Kelsey
                                            </a>
                                        </h2>
                                    </td>
                                    <td>Car</td>
                                    <td>21-03-2020</td>
                                    <td>12.00 AM</td>
                                    <td>22-03-2020</td>
                                    <td>23-03-2020</td>
                                    <td>
                                        someone@example.com
                                    </td>
                                    <td>262-260-1170</td>
                                    <td>
                                        <div class="actions">
                                            <a href="#" class="btn btn-sm bg-success-light mr-2"> Active</a>
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
                                <tr>
                                    <td>BKG-0005</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm mr-2">
                                                <img class="avatar-img rounded-circle" src="{{ asset('images/profiles/avatar-07.jpg') }}" alt="User Image">
                                            </a>
                                            <a href="profile.html">Carolyn Lane
                                            </a>
                                        </h2>
                                    </td>
                                    <td>Bike</td>
                                    <td>21-03-2020</td>
                                    <td>06.00 AM</td>
                                    <td>22-03-2020</td>
                                    <td>23-03-2020</td>
                                    <td>
                                        someone@example.com
                                    </td>
                                    <td>570-458-0070</td>
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
                                <tr>
                                    <td>BKG-0006</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar avatar-sm mr-2">
                                                <img class="avatar-img rounded-circle" src="{{ asset('images/profiles/avatar-08.jpg') }}" alt="User Image">
                                            </a>
                                            <a href="profile.html">David Alvarez
                                            </a>
                                        </h2>
                                    </td>
                                    <td>Car</td>
                                    <td>21-03-2020</td>
                                    <td>10.00 AM</td>
                                    <td>22-03-2020</td>
                                    <td>23-03-2020</td>
                                    <td>
                                        someone@example.com
                                    </td>
                                    <td>212-414-9510</td>
                                    <td>
                                        <div class="actions">
                                            <a href="#" class="btn btn-sm bg-success-light mr-2">Inactive </a>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection