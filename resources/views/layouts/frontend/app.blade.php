<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SISFO UINAM | {{ $title ?? '' }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/icons') }}/si.png" >

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('templates/frontend/clever') }}/style.css">
    @stack('css')
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Email:</span> hmj.si@uin-alauddin.ac.id</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="https://www.facebook.com/hmjsi.uinam" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://instagram.com/hmjsi.uinam?utm_medium=copy_link" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://twitter.com/hmjsi_uinam?s=21" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="https://youtube.com/channel/UCMTV4qMNUkepi6n5eTQeoYw" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                
            </div>
        </div>

        <!-- Navbar Area -->
        @include('layouts.frontend.navbar')
    </header>
    <!-- ##### Header Area End ##### -->

    @yield('content')

    <!-- ##### Footer Area Start ##### -->
    @include('layouts.frontend.footer')
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="{{ asset('templates/frontend/clever') }}/js/active.js"></script>
    @stack('js')
</body>
</html>