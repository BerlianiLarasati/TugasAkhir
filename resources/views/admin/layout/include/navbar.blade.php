<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-end mb-0">

        <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown"
                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="{{ asset('adminto/images/users/user-11.png') }}" alt="user-image" class="rounded-circle">
                <span class="pro-user-name ms-1">
                    {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                <!-- item-->
                <div class="dropdown-divider"></div>
                <!-- item-->
                <a class="dropdown-item preview-item" href="{{ route('logout') }}">
                    <div class="preview-item-content">
                        <p class="preview-subject mb-1">Log out</p>
                    </div>
                </a>

            </div>
        </li>

        <li class="dropdown notification-list">
            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                <i class="fe-settings noti-icon"></i>
            </a>
        </li>

    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="index.html" class="logo logo-light text-center">
            <span class="logo-sm">
                <img src="{{ asset('adminto/images/surabaya-logo-bs.png') }}" alt="" height="90">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('adminto/images/surabaya-logo-bs.png') }}" alt="" height="90">
            </span>
        </a>
        <a href="index.html" class="logo logo-dark text-center">
            <span class="logo-sm">
                <img src="{{ asset('adminto/images/surabaya-logo-bs.png') }}" alt="" height="90">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('adminto/images/surabaya-logo-bs.png') }}" alt="" height="90">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
        <li>
            <button class="button-menu-mobile disable-btn waves-effect">
                <i class="fe-menu"></i>
            </button>
        </li>

        @yield('judul')
    </ul>

    <div class="clearfix"></div>

</div>
