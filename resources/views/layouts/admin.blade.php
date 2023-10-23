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

    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin-assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

    <!-- === Datatables === -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script><!-- needed for toggles -->

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
    <link href="{{ asset('admin-assets/vendor/jquery-datatables-checkboxes-1.2.12/css/dataTables.checkboxes.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/vendor/jquery-datatables-checkboxes-1.2.12/css/datatables.min.css') }}" rel="stylesheet">
        
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>


<body class="sidebar-icon-only">

    <div class="container-scroller">
        <!-- ======= Navbar ======= -->
        @include('layout.navbar')
        <div class="page-body-wrapper">
            <!-- ======= Sidebar ======= -->
            @include('layout.sidebar')


            <!-- ========== Main Content ========== -->
            <div class="main-panel">
                <div class="content-wrapper" id="content">
                {{ $slot }}
                </div>
            </div>
        </div>
    </div>


    <!-- ======= Footer ======= -->
    <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

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

        window.addEventListener('swal:remove_backdrop', event => {
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
                    $('div.modal-backdrop').remove();
                    window.location.href = `${event.detail.link}`
                });
        });

        window.addEventListener('openModal', function(modal_id){
            // alert(modal_id.detail)
            $('#'+modal_id.detail).modal('toggle');
        }); 

    </script>

    <!-- CDN inject tables with childrows, bootstrap etc. -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <!-- <script src="{{ asset('admin-assets/vendor/datatables/js/datatables.init.js') }}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

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

    <script src="{{ asset('admin-assets/vendor/jquery-datatables-checkboxes-1.2.12/js/datatables.min.js') }}"></script>
    <script src="{{ asset('admin-assets/vendor/jquery-datatables-checkboxes-1.2.12/js/datatables.checkboxes.min.js') }}"></script>
    <script>
    $(document).ready(function() {
        // Enable child rows for default
        var table = $('#example').DataTable({
        /* 'ajax': 'https://gyrocode.github.io/files/jquery-datatables/arrays_id.json', */
        'columnDefs': [
            {
                'targets': 0,
                'checkboxes': {
                'selectRow': true
                }
            }
        ],
        'select': {
            'style': 'multi'
        },
        lengthChange: false,   // Disable the "Show X entries" dropdown
        'order': [[1, 'asc']]
        });
        // Enable child rows for Example 1
        var table1 = $('#example1').DataTable({
            /* 'ajax': 'https://gyrocode.github.io/files/jquery-datatables/arrays_id.json', */
        'columnDefs': [
            {
                'targets': 0,
                'checkboxes': {
                'selectRow': true
                }
            }
        ],
        'select': {
            'style': 'multi'
        },
        lengthChange: false,   // Disable the "Show X entries" dropdown
        'order': [[1, 'asc']]
        });
        // Enable child rows for Example 1
        var table2 = $('#example2').DataTable({
            /* 'ajax': 'https://gyrocode.github.io/files/jquery-datatables/arrays_id.json', */
        'columnDefs': [
            {
                'targets': 0,
                'checkboxes': {
                'selectRow': true
                }
            }
        ],
        'select': {
            'style': 'multi'
        },
        lengthChange: false,   // Disable the "Show X entries" dropdown
        'order': [[1, 'asc']]
        });



        // Enable child rows for Example 2
        var table3 = $('#example3').DataTable({
            /* 'ajax': 'https://gyrocode.github.io/files/jquery-datatables/arrays_id.json', */
        'columnDefs': [
            {
                'targets': 0,
                'checkboxes': {
                'selectRow': true
                }
            }
        ],
        'select': {
            'style': 'multi'
        },
        lengthChange: false,   // Disable the "Show X entries" dropdown
        'order': [[1, 'asc']]
        });

        // Enable child rows for No table
        var notable = $('#notable').DataTable({
            /* 'ajax': 'https://gyrocode.github.io/files/jquery-datatables/arrays_id.json', */
        'columnDefs': [
            {
                'targets': 0,
                'checkboxes': {
                'selectRow': true
                }
            }
        ],
        'select': {
            'style': 'multi'
        },
            info: false,           // Disable the "Showing X of Y entries" information
            ordering: false,       // Disable column sorting
            paging: false,         // Disable pagination (previous and next buttons)
            lengthChange: false,   // Disable the "Show X entries" dropdown
            searching: false,      // Disable the search bar

            order: [1, 'desc'],

        });
    });
    </script>

</body>
</html>