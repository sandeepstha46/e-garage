<div class="header">
    <div class="header-left">
        <a href="index.html" class="logo">
            <img src="{{ asset('images/hotel_logo.png') }}" width="50" height="70" alt="logo">
            <span class="logoclass">ADMIN PANEL</span>
        </a>
        <a href="index.html" class="logo logo-small">
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
                <a class="dropdown-item" href="{{ route('admin.profile') }}">My Profile</a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</div>