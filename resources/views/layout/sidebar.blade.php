<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                {{-- <li class="menu-title">Docs</li> --}}

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect')}}">
                        <i class="fa-solid fa-gauge"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('profile')}}" class=" waves-effect">
                        <i class="fa-solid fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>

                <li>
                    <a class=" waves-effect">
                        <i class="fas fa-city"></i>
                        <span>Society Management</span>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="{{route('add.society')}}"><i class="fa fa-circle-o"></i> Add Society </a></li>
                        <li><a href="{{route('society-list')}}"><i class="fa fa-circle-o"></i> Societies List </a></li>
                    </ul>
                </li>

                {{-- <li class="menu-title">Layouts</li> --}}

                <li>
                    <a class=" waves-effect">
                        <i class="mdi mdi-flip-horizontal"></i>
                        <span>Designation</span>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="{{route('add-designation')}}"><i class="fa fa-circle-o"></i> Add Designation </a></li>
                        <li><a href="{{route('designation-list')}}"><i class="fa fa-circle-o"></i> Designation List </a></li>
                    </ul>
                </li>

                <li>
                    <a class=" waves-effect">
                        <i class="fa-solid fa-person-military-pointing"></i>
                        <span>Gaurd Management</span>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="{{route('add-guard')}}"><i
                                    class="fa fa-circle-o"></i> Add Guards </a></li>
                        <li><a href="{{route('guard-list')}}"><i class="fa fa-circle-o"></i>
                                Guards List </a></li>
                        <li><a href="{{route('attendence')}}"><i
                                    class="fa fa-circle-o"></i> Attendance </a></li>
                    </ul>
                </li>

                {{-- <li class="menu-title">Themes</li> --}}

                <li>
                    <a class=" waves-effect">
                        <i class="fa-solid fa-list-check"></i>
                        <span>Checkpoint Mangement</span>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="{{route('add-checkpoints')}}"><i
                                    class="fa fa-circle-o"></i> Add Checkpoints </a></li>
                        <li><a href="{{route('checkpoint-list')}}"><i
                                    class="fa fa-circle-o"></i> Checkpoints List </a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{route('scan-summary')}}" class=" waves-effect">
                        <i class="fas fa-barcode"></i>
                        <span>Scan Summary</span>
                    </a>
                </li>

                

                <li>
                    <a href="{{route('incidence-list')}}" class=" waves-effect">
                        <i class="mdi mdi-format-list-bulleted"></i>
                        <span>incidence List</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('set-timezone')}}" class=" waves-effect">
                        <i class="fa-regular fa-clock"></i>
                        <span>Set Timezone</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('about')}}" class=" waves-effect">
                        <i class="fa-solid fa-circle-info"></i>
                        <span>About Us</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('login-logs')}}" class=" waves-effect">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        <span>Login Logs</span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>