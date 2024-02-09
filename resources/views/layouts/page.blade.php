<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="Chat Interface" content="PyBot">
        <title>{{ config('app.name', 'Laravel').' - '.$title }}</title>
        <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('images/favicon/favicon.ico') }}" type="image/x-icon">
        <!-- styled css -->
        <!-- <link rel="stylesheet" href="{{ asset('admin-assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('admin-assets/css/custom.css') }}"> -->
        <link rel="stylesheet" href="{{ asset('assets/css/chat.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
        <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/scss/framed.scss') }}">
        <!-- <link rel="stylesheet" href="{{ asset('assets/css/vertical-light.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/user.css') }}" > -->

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/main.css" rel="stylesheet">

        <!-- CSS Files bout us -->
        <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.2/components/abouts/about-1/assets/css/about-1.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        
        <!-- inject:Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source Sans Pro:wght@400&display=swap"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open Sans:wght@400&display=swap"/>
        
        <!-- important script for profile dropdown : -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

        <!-- injects:css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css">
        <link href="{{ asset('admin-assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('admin-assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        @livewireStyles
    </head>
    <body>
        @livewire('components.navigation.navigation')
        @livewire('components.chat.chat')
        {{ $slot }}
        @livewire('components.footer.page-footer')

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
            window.addEventListener('openModal', function(modal_id){
                // alert(modal_id.detail)
                $('#'+modal_id.detail).modal('toggle');
            }); 
            window.addEventListener('closeModal', function(modal_id){
                // alert(modal_id.detail)
                $('#'+modal_id.detail).modal('toggle');
            }); 
            window.addEventListener('chatScrollDown', function(div_id){
            // alert(modal_id.detail)
            // $('#'+div_id.detail).modal('toggle');
            $('#'+div_id.detail).scrollTop($('#'+div_id.detail)[0].scrollHeight);
        }); 
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="{{ asset('assets/js/chat.js') }}"></script>
        <script src="{{ asset('admin-assets/js/chat.js') }}"></script>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
    </body>
</html>