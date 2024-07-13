<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>@yield('title') - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    @yield('css')

</head>

<body>
    @yield('test')
    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            @include('admin.blocks.header')
        </header>

        <!-- removeNotificationModal -->
        @include('admin.blocks.modal')
       <!-- /.modal -->
        <!-- ========== App Menu ========== -->
        @include('admin.blocks.sidebar')
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid ">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>

            <!-- End Page-content -->

            {{-- footer --}}
            @include('admin.blocks.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    @include('admin.blocks.helper')

    <!-- JAVASCRIPT -->
   @yield('js')
</body>

</html>