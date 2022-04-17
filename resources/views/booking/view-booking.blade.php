<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Booking</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/feathericon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylesLogin.css') }}">
</head>
<div class="main-wrapper">
    <div class="header">
        <div class="header-left">
            <a href="{{ route('admin.dashboard') }}" class="logo">
                <img src="{{ asset('images/hotel_logo.png') }}" width="50" height="70" alt="logo">
                <span class="logoclass">ADMIN PANEL</span>
            </a>
            <a href="{{ route('admin.dashboard') }}" class="logo logo-small">
                <img src="{{ asset('images/hotel_logo.png') }}" alt="Logo" width="30" height="30">
            </a>
        </div>
        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fe fe-text-align-left"></i>
        </a>
        <a class="mobile_btn" id="mobile_btn">
            <i class="fas fa-bars"></i>
        </a>
        <ul class="nav user-menu">
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img">
                        <i class="fas fa-user" style="font-size: 20px;color: #1B3975;"></i>
                    </span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ url('/') }}">Home</a>
                    <a class="dropdown-item" href="{{ route('admin.profile') }}">My Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    @if (request()->is('admin/dashboard'))
                    <li class="active">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    @endif
                    <li class="list-divider"></li>
                    @if (request()->is('booking/view'))
                    <li class="submenu">
                        <a class="subrop-booking" href="#">
                            <i class="fas fa-suitcase"></i>
                            <span> Booking </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="submenu_class" style="display: none;">
                            <li>
                                <a href="{{ route('booking.view') }}"> All Booking </a>
                            </li>
                            <li>
                                <a href="{{ route('booking.edit') }}"> Edit Booking </a>
                            </li>
                            <li>
                                <a href="{{ route('booking.add') }}"> Add Booking </a>
                            </li>
                        </ul>
                    </li>
                    @elseif (request()->is('booking/add-booking'))
                    <li class="submenu">
                        <a class="subrop-booking" href="#">
                            <i class="fas fa-suitcase"></i>
                            <span> Booking </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="submenu_class" style="display: none;">
                            <li>
                                <a href="{{ route('booking.view') }}"> All Booking </a>
                            </li>
                            <li>
                                <a href="{{ route('booking.edit') }}"> Edit Booking </a>
                            </li>
                            <li>
                                <a href="{{ route('booking.add') }}"> Add Booking </a>
                            </li>
                        </ul>
                    </li>
                    @elseif (request()->is('booking/edit-booking'))
                    <li class="submenu">
                        <a class="subrop-booking" href="#">
                            <i class="fas fa-suitcase"></i>
                            <span> Booking </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="submenu_class" style="display: none;">
                            <li>
                                <a href="{{ route('booking.view') }}"> All Booking </a>
                            </li>
                            <li>
                                <a href="{{ route('booking.edit') }}"> Edit Booking </a>
                            </li>
                            <li>
                                <a href="{{ route('booking.add') }}"> Add Booking </a>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="submenu">
                        <a href="#">
                            <i class="fas fa-suitcase"></i>
                            <span> Booking </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="submenu_class" style="display: none;">
                            <li>
                                <a href="{{ route('booking.view') }}"> All Booking </a>
                            </li>
                            <li>
                                <a href="{{ route('booking.edit') }}"> Edit Booking </a>
                            </li>
                            <li>
                                <a href="{{ route('booking.add') }}"> Add Booking </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="all-customer.html"> All customers </a></li>
                            <li><a href="edit-customer.html"> Edit Customer </a></li>
                            <li><a href="add-customer.html"> Add Customer </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="all-staff.html">All Staff </a></li>
                            <li><a href="edit-staff.html"> Edit Staff </a></li>
                            <li><a href="add-staff.html"> Add Staff </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="employees.html">Employees List </a></li>
                            <li><a href="leaves.html">Leaves </a></li>
                            <li><a href="holidays.html">Holidays </a></li>
                            <li><a href="attendance.html">Attendance </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="invoices.html">Invoices </a></li>
                            <li><a href="payments.html">Payments </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="fas fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="salary.html">Employee Salary </a></li>
                            <li><a href="salary-veiw.html">Payslip </a></li>
                        </ul>
                    </li>
                    <li> <a href="calendar.html"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a> </li>
                    <li class="submenu"> <a href="#"><i class="fe fe-table"></i> <span> Blog </span> <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="blog.html">Blog </a></li>
                            <li><a href="blog-details.html">Blog Veiw </a></li>
                            <li><a href="add-blog.html">Add Blog </a></li>
                            <li><a href="edit-blog.html">Edit Blog </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="fe fe-table"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="expense-reports.html">Expense Report </a></li>
                            <li><a href="invoice-reports.html">Invoice Report </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="page-wrapper">
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
    </div>
</div>


<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('js/chart.morris.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>

</html>