<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Az News</title>
    @section('styleDefault')
    <link rel="stylesheet" href="{{ asset("site/css/bootstrap.min.css") }}">
    
    <link rel="stylesheet" href="{{ asset("site/css/flaticon.css") }}">
    <link rel="stylesheet" href="{{ asset("site/css/slicknav.css") }}">
    <link rel="stylesheet" href="{{ asset("site/css/animate.min.css") }}">
    
    <link rel="stylesheet" href="{{ asset("site/css/fontawesome-all.min.css") }}">
    <link rel="stylesheet" href="{{ asset("site/css/themify-icons.css") }}">
    
    <link rel="stylesheet" href="{{ asset("site/css/style.css") }}">
    {{-- <link rel="stylesheet" href="{{ asset("site/css/nice-select.css") }}"> --}}
    <style>
        .active-link{
            color: #fc3f00 !important;
        }
    </style>
    @show
    @section('style')

    @show
</head>
<body>
    @include('site.template.header')

    @section('content')
        
    @show

    @include('site.template.footer')

    @section('script')

	<!-- All JS Custom Plugins Link Here here -->
    <script src="{{ asset("site/js/vendor/modernizr-3.5.0.min.js") }}"></script>
	<!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset("site/js/vendor/jquery-1.12.4.min.js") }}"></script>
    <script src="{{ asset("site/js/popper.min.js") }}"></script>
    <script src="{{ asset("site/js/bootstrap.min.js") }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset("site/js/jquery.slicknav.min.js") }}"></script>
    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset("site/js/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("site/js/slick.min.js") }}"></script>
    <!-- Date Picker -->
    <script src="{{ asset("site/js/gijgo.min.js") }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset("site/js/wow.min.js") }}"></script>
    <script src="{{ asset("site/js/animated.headline.js") }}"></script>
    <script src="{{ asset("site/js/jquery.magnific-popup.js") }}"></script>
    <!-- Breaking New Pluging -->
    <script src="{{ asset("site/js/jquery.ticker.js") }}"></script>
    <script src="{{ asset("site/js/site.js") }}"></script>
    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset("site/js/jquery.scrollUp.min.js") }}"></script>
    {{-- <script src="{{ asset("site/js/jquery.nice-select.min.js") }}"></script> --}}
    <script src="{{ asset("site/js/jquery.sticky.js") }}"></script>
    <!-- contact js -->
    <script src="{{ asset("site/js/contact.js") }}"></script>
    <script src="{{ asset("site/js/jquery.form.js") }}"></script>
    <script src="{{ asset("site/js/jquery.validate.min.js") }}"></script>
    <script src="{{ asset("site/js/mail-script.js") }}"></script>
    <script src="{{ asset("site/js/jquery.ajaxchimp.min.js") }}"></script>
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{ asset("site/js/plugins.js") }}"></script>
    <script src="{{ asset("site/js/main.js") }}"></script>
    @show

</body>
</html>