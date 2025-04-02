<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{url('theme/assets/images/logo-sm-light.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{url('theme/assets/images/logo-light.png')}}" alt="" height="20">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-backburger"></i>
            </button>
        </div>

        <div class="d-flex align-items-center">
            <!-- Version Badge -->
            {{-- <div class="d-inline-block bg-primary text-white p-2 rounded">
                <h5><span class="badge badge-danger float-right">v1.1.0</span></h5>
            </div> --}}

            <!-- User Dropdown -->
            <div class="dropdown d-inline-block ms-3">
                <button type="button" class="btn header-item waves-effect dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle" src="{{url('theme/assets/images/pngegg.png')}}" alt="User Avatar" height="30">
                    <span class="ms-2">Admin</span> <!-- Replace with dynamic username -->
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{route('profile')}}"><i class="mdi mdi-account-circle me-2"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-logout me-2"></i> Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>
