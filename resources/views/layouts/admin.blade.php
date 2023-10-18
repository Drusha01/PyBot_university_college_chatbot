<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title', 'Pybot | Administrator')</title> <!-- Use the yield directive to set the title -->
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('images/favicon/favicon.ico') }}" type="image/x-icon">


    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- === Template Main CSS File === -->
    <link href="{{ asset('admin-assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/css/custom.css') }}" rel="stylesheet">
    <!-- === Template Main JS File === -->
    <script src="{{ asset('admin-assets/js/main.js') }}"></script>
    <script src="{{ asset('admin-assets/js/template.js') }}"></script>
    <script src="{{ asset('admin-assets/js/vendors.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/feather.min.js') }}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ asset('assets/js/chat.js') }}"></script>
    <script src="{{ asset('admin-assets/vendors/iCheck/icheck.min.js') }}"></script>
	<script src="{{ asset('admin-assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin-assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

    <!-- === Datatables === -->
    <link href="{{ asset('admin-assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/vendor/datatables/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" rel="stylesheet">

    <!-- CDN inject JS tables with childrows, bootstrap etc. -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script><!-- needed for toggles -->
    <link rel="stylesheet" href="{{ asset('admin-assets/css/utilities.css') }}" >
    <link rel="stylesheet" href="{{ asset('admin-assets\vendor\bootstrap\css\bootstrap.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Bootstrap JavaScript and CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/account.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon/favicon.ico') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Perfect ScrollBar -->
    <link rel="stylesheet" href="https://unpkg.com/simplebar@6.2.5/dist/simplebar.css">
    <script src="https://unpkg.com/simplebar@6.2.5/dist/simplebar.min.js"></script>

    <!-- Tags Input -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

    <!-- === Main JS === -->
    <script src="{{ asset('admin-assets/js/main.js') }}"></script>
    <script src="{{ asset('admin-assets/js/template.js') }}"></script>
    <script src="{{ asset('admin-assets/js/vendors.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/custom.js') }}"></script>

    <!-- injects:css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css">
    <link href="{{ asset('admin-assets/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

    <link href="{{ asset('admin-assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

</head>


<body>

    <div class="container-scroller">
        <!-- ======= Navbar ======= -->
        @include('layout.navbar')
    <div class="container-fluid page-body-wrapper">
        <!-- ======= Sidebar ======= -->
        @include('layout.sidebar')


    <!-- ========== Main Content ========== -->
    <div class="main-panel">
        <div class="content-wrapper" id="content">
        {{ $slot }}
        </div>
    </div>


    <!-- ======= Footer ======= -->
    <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->


    <!-- CDN inject tables with childrows, bootstrap etc. -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="{{ asset('admin-assets/vendor/datatables/js/datatables.init.js') }}"></script>
    <script src="{{ asset('admin-assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin-assets/vendor/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>


    @livewireScripts
    <script>
         window.addEventListener('swal:message', event => {
            Swal.fire({
                position: event.detail.position,
                icon: event.detail.icon,
                title: event.detail.title,
                text: event.detail.text,
                showConfirmButton: false,
                timer: event.detail.timer,
                timerProgressBar: true,
                allowOutsideClick: false,
                allowEscapeKey: false
            })
        });

        window.addEventListener('swal:redirect', event => {
            Swal.fire({
                    position: event.detail.position,
                    icon: event.detail.icon,
                    title: event.detail.title,
                    text: event.detail.text,
                    showConfirmButton: false,
                    timer: event.detail.timer,
                    timerProgressBar: true,
                    allowOutsideClick: false,
                    allowEscapeKey: false
                    })
                .then(function() {
                    window.location.href = `${event.detail.link}`
                });
        });

        window.addEventListener('swal:confirm', event => {
            Swal.fire({
                    position: event.detail.position,
                    icon: event.detail.icon,
                    title: event.detail.title,
                    text: event.detail.text,
                    showConfirmButton: true,
                    })
                .then(function() {
                    window.location.href = `${event.detail.link}`
                });
        });

        window.addEventListener('swal:accessrole', event => {
            Swal.fire({
                position: event.detail.position,
                icon: event.detail.icon,
                title: event.detail.title,
                html: event.detail.html,
                timer: event.detail.timer
            })
        });

        window.addEventListener('swal:redirect-link', event => {
            Swal.fire({
                    position: event.detail.position,
                    icon: event.detail.icon,
                    title: event.detail.title,
                    html: event.detail.html,
                    timer: event.detail.timer
                })
                .then(function() {
                    window.location.href = `${event.detail.link}`
                });
        });

        window.addEventListener('swal:refresh', event => {
            Swal.fire({
                    position: event.detail.position,
                    icon: event.detail.icon,
                    title: event.detail.title,
                    text: event.detail.text,
                    showConfirmButton: false,
                    timer: event.detail.timer,
                    timerProgressBar: true,
                    allowOutsideClick: false,
                    allowEscapeKey: false
                })
                .then(function() {
                    location.reload();
                });
        });


        window.addEventListener('swal:confirmation', event => {
            Swal.fire({
                position: event.detail.position,
                icon: event.detail.icon,
                title: event.detail.title,
                text: event.detail.text,
                showDenyButton: event.detail.showDenyButton,
                showCancelButton: event.detail.showCancelButton,
                confirmButtonText: event.detail.confirmButtonText,
                denyButtonText: event.detail.denyButtonText
            }).then((result) => {
                if (result.isConfirmed) {
                    window.livewire.emit('confirm');
                } else if (result.isDenied) {
                    Swal.fire(event.detail.fail_message);
                }
            })
        });

        window.addEventListener('swal:close-current-tab', event => {
            Swal.fire({
                position: event.detail.position,
                icon: event.detail.icon,
                title: event.detail.title,
                timer: event.detail.timer
            }).then(function() {
                window.close();
            });
        });
    </script>
        <script>
         window.addEventListener('swal:message', event => {
            Swal.fire({
                position: event.detail.position,
                icon: event.detail.icon,
                title: event.detail.title,
                text: event.detail.text,
                showConfirmButton: false,
                timer: event.detail.timer,
                timerProgressBar: true,
                allowOutsideClick: false,
                allowEscapeKey: false
            })
        });

        window.addEventListener('swal:redirect', event => {
            Swal.fire({
                    position: event.detail.position,
                    icon: event.detail.icon,
                    title: event.detail.title,
                    text: event.detail.text,
                    showConfirmButton: false,
                    timer: event.detail.timer,
                    timerProgressBar: true,
                    allowOutsideClick: false,
                    allowEscapeKey: false
                    })
                .then(function() {
                    window.location.href = `${event.detail.link}`
                });
        });

        window.addEventListener('swal:confirm', event => {
            Swal.fire({
                    position: event.detail.position,
                    icon: event.detail.icon,
                    title: event.detail.title,
                    text: event.detail.text,
                    showConfirmButton: true,
                    })
                .then(function() {
                    window.location.href = `${event.detail.link}`
                });
        });

        window.addEventListener('swal:accessrole', event => {
            Swal.fire({
                position: event.detail.position,
                icon: event.detail.icon,
                title: event.detail.title,
                html: event.detail.html,
                timer: event.detail.timer
            })
        });

        window.addEventListener('swal:redirect-link', event => {
            Swal.fire({
                    position: event.detail.position,
                    icon: event.detail.icon,
                    title: event.detail.title,
                    html: event.detail.html,
                    timer: event.detail.timer
                })
                .then(function() {
                    window.location.href = `${event.detail.link}`
                });
        });

        window.addEventListener('swal:refresh', event => {
            Swal.fire({
                    position: event.detail.position,
                    icon: event.detail.icon,
                    title: event.detail.title,
                    text: event.detail.text,
                    showConfirmButton: false,
                    timer: event.detail.timer,
                    timerProgressBar: true,
                    allowOutsideClick: false,
                    allowEscapeKey: false
                })
                .then(function() {
                    location.reload();
                });
        });


        window.addEventListener('swal:confirmation', event => {
            Swal.fire({
                position: event.detail.position,
                icon: event.detail.icon,
                title: event.detail.title,
                text: event.detail.text,
                showDenyButton: event.detail.showDenyButton,
                showCancelButton: event.detail.showCancelButton,
                confirmButtonText: event.detail.confirmButtonText,
                denyButtonText: event.detail.denyButtonText
            }).then((result) => {
                if (result.isConfirmed) {
                    window.livewire.emit('confirm');
                } else if (result.isDenied) {
                    Swal.fire(event.detail.fail_message);
                }
            })
        });

        window.addEventListener('swal:close-current-tab', event => {
            Swal.fire({
                position: event.detail.position,
                icon: event.detail.icon,
                title: event.detail.title,
                timer: event.detail.timer
            }).then(function() {
                window.close();
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ asset('assets/js/chat.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ asset('assets/js/chat.js') }}"></script>
</body>
</html>