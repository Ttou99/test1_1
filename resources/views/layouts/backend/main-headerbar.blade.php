<div class="header-left">
    <a href="{{route('dashboard')}}" class="logo">
        <img src="{{asset('assets/img/logo.png')}}" alt="Logo">
    </a>
    <a href="{{route('dashboard')}}" class="logo logo-small">
        <img src="{{asset('assets/img/logo.png')}}" alt="Logo" width="30" height="30">
    </a>
</div>
<div class="menu-toggle">
    <a href="javascript:void(0);" id="toggle_btn">
        <i class="fas fa-bars"></i>
    </a>
</div>

<div class="top-nav-search">
    <form>
        <input type="text" class="form-control" placeholder="Search here">
        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
    </form>
</div>
<a class="mobile_btn" id="mobile_btn">
    <i class="fas fa-bars"></i>
</a>

<ul class="nav user-menu">
    <li class="nav-item dropdown noti-dropdown language-drop me-2">
        <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
            <img src="{{asset('assets/img/icons/header-icon-01.svg')}}" alt="">
        </a>
        <div class="dropdown-menu ">
            <div class="noti-content">
                <div>
                    <a class="dropdown-item" href="javascript:;"><i
                            class="flag flag-lr me-2"></i>English</a>
                    <a class="dropdown-item" href="javascript:;"><i
                            class="flag flag-dz me-2"></i>Arabe</a>
                </div>
            </div>
        </div>
    </li>

    <li class="nav-item dropdown noti-dropdown me-2">
        <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
            <img src="{{asset('assets/img/icons/header-icon-05.svg')}}" alt="">
        </a>
        <div class="dropdown-menu notifications">
            <div class="topnav-dropdown-header">
                <span class="notification-title">Notifications</span>
                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
            </div>
            <div class="noti-content">
                <ul class="notification-list">
                    <li class="notification-message">

                    </li>
                    <li class="notification-message">

                    </li>
                    <li class="notification-message">

                    </li>
                    <li class="notification-message">

                    </li>
                </ul>
            </div>

        </div>
    </li>
    <li class="nav-item dropdown has-arrow new-user-menus">
        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="{{asset('assets/img/profiles/avatar-01.jpg')}}" width="31"
                                 alt="Admin">
                            <div class="user-text">
                                <h6>Admin</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </span>
        </a>
        <div class="dropdown-menu">
            <div class="user-header">
                <div class="avatar avatar-sm">
                    <img src="{{asset('assets/img/profiles/avatar-01.jpg')}}" alt="User Image"
                         class="avatar-img rounded-circle">
                </div>
                <div class="user-text">
                    <h6>Admin</h6>
                    <p class="text-muted mb-0">Administrator</p>
                </div>
            </div>
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="inbox.html">Inbox</a>
            <a class="dropdown-item" href="#" onclick="$('#logout-form').submit()">Logout</a>
        </div>
    </li>

</ul>


<form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
    @csrf
</form>




