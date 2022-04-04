<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E commerce</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/home" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="Post" >
                        @csrf
                        <button class="btn btn-danger">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="home" class="brand-link">
                {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
                <span class="brand-text font-weight-light">Ecommerce</span>
            </a>

            <!-- SidebarSearch Form -->



            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="/vendors" class="nav-link">
                            <i class="fa fa-universal-access" aria-hidden="true"></i>
                            <p>
                                Vendors
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/products" class="nav-link">
                            <i class="fa fa-th-large" aria-hidden="true"></i>
                            <p>
                                Products
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/brands" class="nav-link">
                            <i class="fa fa-th-large" aria-hidden="true"></i>
                            <p>
                                Brands
                            </p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="/categories" class="nav-link">
                            {{-- <i class="nav-icon fas fa-th"></i> --}}
                            <i class="fa fa-film" aria-hidden="true"></i>
                            <p>
                                Categories
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/roles" class="nav-link">
                            {{-- <i class="nav-icon fas fa-th"></i> --}}
                            <i class="fab fa-critical-role"></i>
                            <p>
                                Roles
                            </p>
                        </a>
                    </li>

                    {{-- <li class="nav-item">
                        <a href="/sales" class="nav-link">
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                            <p>
                                Sales
                            </p>
                        </a>
                    </li> --}}

                    <li class="nav-item">
                        <a href="/users" class="nav-link">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <p>
                                Users
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/vendor-requests" class="nav-link">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <p>
                                Vendor Requests
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>

        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            @yield('content')

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('tail')
</body>

</html>
