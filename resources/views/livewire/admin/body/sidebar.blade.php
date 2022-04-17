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
                <li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ route('booking.view') }}"> All Booking </a></li>
                        <li><a href="{{ route('booking.edit') }}"> Edit Booking </a></li>
                        <li><a href="{{ route('booking.add') }}"> Add Booking </a></li>
                    </ul>
                </li>
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