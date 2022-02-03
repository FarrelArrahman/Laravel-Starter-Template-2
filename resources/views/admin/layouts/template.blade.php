<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.head')

<body>
    <!-- App starts here -->
    <div id="app">
        <!-- Sidebar starts here -->
        @include('admin.layouts.sidebar')
        <!-- Sidebar ends here -->

        <!-- Main starts here -->
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-first">
                            <h3>@yield('title')</h3>
                            <p class="text-subtitle text-muted">@yield('sub-title')</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-last mb-3">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <!-- <div role="button" class="avatar avatar-lg bg-warning" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('mazer-admin/images/faces/2.jpg') }}" alt="">
                            </div>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-person me-50"></i> Profil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-door-closed me-50"></i> Logout
                                </a>
                            </div> -->
                            @yield('action-button')
                        </nav>
                    </div>
                </div>
                
            </div>
            
            @yield('content')

            @include('admin.layouts.footer')
        </div>
        <!-- Main ends here -->
    </div>
    <!-- App ends here -->
    
    @include('admin.layouts.scripts')
</body>

</html>
