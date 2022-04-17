<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
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
              <a href="edit-booking.html"> Edit Booking </a>
            </li>
            <li>
              <a href="add-booking.html"> Add Booking </a>
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
        <li class="submenu">
          <a href="#">
            <i class="far fa-money-bill-alt"></i>
            <span> Accounts </span>
            <span class="menu-arrow"></span>
          </a>
          <ul class="submenu_class" style="display: none;">
            <li>
              <a href="invoices.html">Invoices </a>
            </li>
            <li>
              <a href="payments.html">Payments </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="calendar.html">
            <i class="fas fa-calendar-alt"></i>
            <span>Calendar</span>
          </a>
        </li>
        <li class="submenu">
          <a href="#">
            <i class="fe fe-table"></i>
            <span> Reports </span>
            <span class="menu-arrow"></span>
          </a>
          <ul class="submenu_class" style="display: none;">
            <li>
              <a href="expense-reports.html">Expense Report </a>
            </li>
            <li>
              <a href="invoice-reports.html">Invoice Report </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>