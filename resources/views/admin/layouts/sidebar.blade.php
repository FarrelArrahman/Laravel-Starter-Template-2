<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo mb--3 mt--3">
                    <!-- <a href="index.html"><img src="{{ asset('mazer-admin/images/logo/logo.png') }}" alt="Logo" srcset=""></a> -->
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <!-- <li class="sidebar-title">Menu</li> -->
                <li class="sidebar-title" style="margin-left: -15px">
                    <a href="#" title="{{ auth()->user()->name ?? 'Guest' }}" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="row">
                            <div class="col-3">
                                <div class="avatar avatar-lg bg-warning">
                                    <img src="{{ asset('mazer-admin/images/faces/2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-9">
                                <h5 class="mb-0" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis">{{ auth()->user()->name ?? 'Guest' }}</h5>
                                <p>{{ auth()->user()->role ?? 'User' }}</p>
                            </div>
                        </div>
                        <div class="dropdown-menu shadow">
                            <a href="#" class="dropdown-item link-primary" href="#"><i class="fa fa-user me-2 text-primary"></i> Profil</a>
                            <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item link-danger logout-button" href="#"><i class="fa fa-power-off me-2 text-danger"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                        </div>
                    </a>
                </li>
                
                <li class="sidebar-item {{ (request()->is('*dashboard*')) ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-house-door-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item {{ (request()->is('*example*')) ? 'active' : '' }} has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-person-fill"></i>
                        <span>Example</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="#">
                                Sub link 1
                            </a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">
                                Sub link 2
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>