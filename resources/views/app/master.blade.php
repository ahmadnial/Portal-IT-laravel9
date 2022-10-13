<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal System-ITRSNR</title>

    <link rel="shortcut icon" href="{{ asset ('asset/dashboard/dist/img/logoNR.png') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset ('asset/dashboard/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset ('asset/dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset ('asset/dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset ('asset/dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset ('asset/dashboard/dist/css/adminlte.min.css') }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset ('asset/dashboard/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset ('asset/dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset ('asset/dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset ('asset/dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset ('asset/dashboard/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('asset/css/sweetalert2.css') }}">
    <link rel="stylesheet" href="{{ asset ('asset/css/sweetalert2.min.css') }}">

</head>

<!-- Light Mode Body -->

<body class="hold-transition sidebar-mini">
    <!-- Dark Mode Body -->
    <!-- <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed"> -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle img-circle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <img src="dashboard/dist/img/xxx.jpg" alt="" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <!-- <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a> -->
                        <a href="logOut.php" class="dropdown-item">
                            <i class="ti-power-off text-primary"></i>
                            Logout
                        </a>
                    </div>
                </li>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="{{ asset ('asset/dashboard/dist/img/logo.svg') }}" class="brand-image elevation-0"
                    style="opacity: .9">
                <span class="brand-text font-weight-light">&nbsp;</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset ('asset/dashboard/dist/img/face23.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <i class="d-block text-white">Holla, Mas Ahmad!</i>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-address-book"></i>
                                <p>
                                    Form Entry Data
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('createdailyreport') }}" target="_blank" class="nav-link">
                                        <i class="fas fa-feather-alt nav-icon"></i>

                                        <p>Daily Report</p>

                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="kotak-saran-digital.php" class="nav-link">
                                        <i class="fas fa-file-signature nav-icon"></i>
                                        <p>Kotak Saran Digital</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="order-barang.php" class="nav-link">
                                        <i class="fas fa-file-signature nav-icon"></i>
                                        <p>Order Barang</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="order-cuti.php" class="nav-link">
                                        <i class="fas fa-file-signature nav-icon"></i>
                                        <p>Order Cuti</p>
                                    </a>
                                </li>
                            </ul>

                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview2" role="menu"
                                data-accordion="false">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-address-book"></i>
                                        <p>
                                            Rekap Timeline All
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="http://192.168.10.7:277/timeline-ppi/rekap-pelaporan.php"
                                                target="_blank" class="nav-link">
                                                <i class="fas fa-circle nav-icon"></i>

                                                <p>Timeline IPCN</p>

                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="http://192.168.10.7:277/timeline-kasie/rekap-pelaporan.php"
                                                target="_blank" class="nav-link">
                                                <i class="fas fa-circle nav-icon"></i>

                                                <p>Timeline Kasie</p>

                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="http://192.168.10.7:277/timeline-mpp/rekap-pelaporan.php"
                                                target="_blank" class="nav-link">
                                                <i class="fas fa-circle nav-icon"></i>

                                                <p>Timeline MPP</p>

                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="http://192.168.10.7:277/timeline-kesekretariatan/rekap-pelaporan.php"
                                                target="_blank" class="nav-link">
                                                <i class="fas fa-circle nav-icon"></i>

                                                <p>Timeline Kesekretariatan</p>

                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="http://192.168.10.7:277/timeline-kebidanan/rekap-pelaporan.php"
                                                target="_blank" class="nav-link">
                                                <i class="fas fa-circle nav-icon"></i>

                                                <p>Timeline Kebidanan</p>

                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="http://192.168.10.7:277/timeline-sdm/rekap-pelaporan.php"
                                                target="_blank" class="nav-link">
                                                <i class="fas fa-circle nav-icon"></i>

                                                <p>Timeline SDM</p>

                                            </a>
                                        </li>
                                    </ul>




                                <li class="nav-item">
                                    <a href="{{ url('home') }}" class="nav-link">
                                        <i class="nav-icon fas fa-home"></i>
                                        <p>
                                            Home
                                            <span class="right badge badge-danger"></span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="dashboard.php" class="nav-link">
                                        <i class="nav-icon fas fa-chart-line"></i>
                                        <p>
                                            dashboard
                                            <span class="right badge badge-danger"></span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('rekap-laporan') }}" class="nav-link">
                                        <i class="nav-icon fas fa-list-alt"></i>
                                        <p>
                                            Rekap Laporan
                                            <span class="right badge badge-danger"></span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="inventory.php" class="nav-link">
                                        <i class="nav-icon fas fa-clipboard-list"></i>
                                        <p>
                                            Inventory IT
                                            <span class="right badge badge-danger"></span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="stock.php" class="nav-link">
                                        <i class="nav-icon fas fa-dolly-flatbed"></i>
                                        <p>
                                            Stock
                                            <span class="right badge badge-danger"></span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="ksd.php" class="nav-link">
                                        <i class="nav-icon fas fa-grin-tongue-squint"></i>
                                        <p>
                                            Rekap KSD
                                            <span class="right badge badge-danger"></span>
                                        </p>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="memo.php" class="nav-link">
                                        <i class="nav-icon fas fa-grin-tongue-squint"></i>
                                        <p>
                                            memo
                                            <span class="right badge badge-danger"></span>
                                        </p>
                                    </a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="http://192.168.10.7:277/register-ibs/rekap.php" target="_blank"
                                        class="nav-link">
                                        <i class="nav-icon fas fa-list-alt"></i>
                                        <p>
                                            Register IBS
                                            <span class="right badge badge-danger"></span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="http://192.168.10.7:277/dashboard-ipsrs/rekap.php" target="_blank"
                                        class="nav-link">
                                        <i class="nav-icon fas fa-list-alt"></i>
                                        <p>
                                            Info Perbaikan IPSRS
                                            <span class="right badge badge-danger"></span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="submission.php" class="nav-link">
                                        <i class="nav-icon fas fa-clipboard-list"></i>
                                        <p>
                                            Submission
                                            <span class="right badge badge-danger"></span>
                                        </p>
                                    </a>
                                </li>

                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <div class=""> @yield('konten')</div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
            </div>
            <strong>Copyright &copy; 2022 <a href="">IT-RSNR</a>.</strong> All rights reserved.
        </footer>



        <!-- jQuery -->
        <script src="{{ asset ('asset/dashboard/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset ('asset/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- DataTables  & Plugins -->
        <script src="{{ asset ('asset/dashboard/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset ('asset/dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset ('asset/dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}">
        </script>
        <script src="{{ asset ('asset/dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}">
        </script>
        <script src="{{ asset ('asset/dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset ('asset/dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset ('asset/dashboard/plugins/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset ('asset/dashboard/plugins/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset ('asset/dashboard/plugins/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset ('asset/dashboard/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset ('asset/dashboard/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset ('asset/dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset ('asset/dashboard/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset ('asset/js/sweetalert2.js') }}"></script>
        <script src="{{ asset ('asset/js/sweetalert2.all.js') }}"></script>
        <script src="{{ asset ('asset/js/sweetalert2.all.min.js') }}"></script>
        <script src="{{ asset ('asset/js/autodate.js') }}"></script>


        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
</body>

</html>