<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            @auth
            @if(Auth::user()->utype === 'ADM')
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
                <li class="submenu"> <a href="#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="invoices.html">Invoices </a></li>
                        <li><a href="payments.html">Payments </a></li>
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
            @else
            <ul>
                @if (request()->is('user/dashboard'))
                <li class="active">
                    <a href="{{ route('user.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @else
                <li>
                    <a href="{{ route('user.dashboard') }}">
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
                <li> <a href="calendar.html"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a> </li>
                <li class="submenu"> <a href="#"><i class="fe fe-table"></i> <span> Blog </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="blog.html">Blog </a></li>
                        <li><a href="blog-details.html">Blog Veiw </a></li>
                        <li><a href="add-blog.html">Add Blog </a></li>
                        <li><a href="edit-blog.html">Edit Blog </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="invoices.html">Invoices </a></li>
                        <li><a href="payments.html">Payments </a></li>
                    </ul>
                </li>
                
                <li class="submenu"> <a href="#"><i class="fe fe-table"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="expense-reports.html">Expense Report </a></li>
                        <li><a href="invoice-reports.html">Invoice Report </a></li>
                    </ul>
                </li>
            </ul>
            @endif
            @endauth
        </div>
    </div>
</div>