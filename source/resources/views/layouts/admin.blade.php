<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ env('APP_URL') . '/favicon.ico' }}" />
    <title>Cho thuê máy in, bán máy in, sữa chữa máy in nhanh chóng giá rẻ tại Tp.HCM</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/AdminLTE/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/AdminLTE/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/AdminLTE/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/AdminLTE/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="/AdminLTE/dist/css/custom.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">Trang chủ</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">Liên hệ kỹ thuật</a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('home')}}" class="brand-link">
            <img src="/AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">HOANGLAI.VN</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Hoàng Nhân</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="javascript: void(0)" class="nav-link active">
                            <i class="nav-icon fas fa-print"></i>
                            <p> SẢN PHẨM<i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('categories.products.index', CATEGORY_PRINTER) }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>MÁY IN</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('categories.products.index', CATEGORY_PHOTOCOPY) }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>MÁY PHOTOCOPY</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('categories.products.index', CATEGORY_CARTRIDGE) }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>MỰC IN</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript: void(0)" class="nav-link active">
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>DỊCH VỤ - TIN TỨC<i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('article_type.articles.index', ARTICLE_SERVICE) }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>DỊCH VỤ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('article_type.articles.index', ARTICLE_NEWS) }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>TIN TỨC</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('article_type.articles.index', ARTICLE_HELP_SERVICE) }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>SỰ CỐ MÁY</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.1.0-rc
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
    <!-- ./wrapper -->
    @section('js')
        <!-- jQuery -->
        <script src="/AdminLTE/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="/AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/AdminLTE/dist/js/adminlte.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="/AdminLTE/dist/js/demo.js"></script>
    @show
</body>
</html>