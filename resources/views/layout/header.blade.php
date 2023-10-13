<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title', 'Pybot | Homepage')</title> <!-- Use the yield directive to set the title -->
  <meta content="" name="description">
  <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- === Template Main CSS File === -->
    <link rel="stylesheet" href="{{ asset('assets/css/user.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.bundle.base.css') }}">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin-assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">


    <!-- === Datatables === -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">

    <!-- CDN inject tables with childrows, bootstrap etc. -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

    <!-- Perfect ScrollBar -->
    <link rel="stylesheet" href="https://unpkg.com/simplebar@6.2.5/dist/simplebar.css">
    <script src="https://unpkg.com/simplebar@6.2.5/dist/simplebar.min.js"></script>

    <!-- === Main JS === -->
    <script src="{{ asset('assets/js/chat.js') }}"></script>
    <script src="{{ asset('admin-assets/js/main.js') }}"></script>
    <script src="{{ asset('admin-assets/js/template.js') }}"></script>
    <script src="{{ asset('admin-assets/js/vendors.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/feather.min.js') }}"></script>


    
</head>


<body>

    <!-- ======= Navbar ======= -->
    @extends('layout.topnav')

    <!-- ========== Main Content ========== -->
    <div id="content">
        @yield('content')
    </div>

    <!-- ======= Footer ======= -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- === Template Main JS File === -->
    <script src="{{ asset('assets/js/chat.js') }}"></script>
    <script src="{{ asset('admin-assets/js/template.js') }}"></script>
    <script src="{{ asset('admin-assets/js/vendors.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/feather.min.js') }}"></script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('admin-assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- CDN inject tables with childrows, bootstrap etc. -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

    <!-- ======= Footer ======= -->
    @extends('layout.footer')

</body>
</html>