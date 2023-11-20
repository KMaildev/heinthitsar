<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Start Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="keywords" content="HEIN THITSAR COMPANY LIMITED （Overseas Employment Agency）" />
    <meta name="author" content="HEIN THITSAR COMPANY LIMITED （Overseas Employment Agency）" />
    <meta name="robots" content="HEIN THITSAR COMPANY LIMITED （Overseas Employment Agency）" />
    <meta name="description" content="HEIN THITSAR COMPANY LIMITED （Overseas Employment Agency）" />
    <link rel="shortcut icon" href="{{ asset('data/company/logo.jpg') }}" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title of Site -->
    <title>
        HEIN THITSAR COMPANY LIMITED （Overseas Employment Agency） - @yield('title')
    </title>
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('data/company/logo.jpg') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset('assets/font/flaticon.css') }}">
    <!-- Swiper Bundle CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/sass/style.css') }}">
</head>

<body>

    @include('layouts.menu')


    @yield('content')


    @include('layouts.footer')


    <!-- Main JS -->
    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Counter Up JS -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Progressbar JS -->
    <script src="{{ asset('assets/js/progressbar.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Swiper Bundle JS -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Isotope JS -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <!-- Mean Menu JS -->
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    @yield('script')

    <script>
        $('img[data-enlargeable]').addClass('img-enlargeable').click(function() {
            var src = $(this).attr('src');
            var modal;

            function removeModal() {
                modal.remove();
                $('body').off('keyup.modal-close');
            }
            modal = $('<div>').css({
                background: 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center',
                backgroundSize: 'contain',
                width: '100%',
                height: '100%',
                position: 'fixed',
                zIndex: '10000',
                top: '0',
                left: '0',
                cursor: 'zoom-out'
            }).click(function() {
                removeModal();
            }).appendTo('body');
            //handling ESC
            $('body').on('keyup.modal-close', function(e) {
                if (e.key === 'Escape') {
                    removeModal();
                }
            });
        });
    </script>

</body>

</html>
