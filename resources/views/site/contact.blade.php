@extends('site.template.template')

@section('style')
    <link rel="stylesheet" href="{{ asset(" site/css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset(" site/css/magnific-popup.css") }}">
    <link rel="stylesheet" href="{{ asset(" site/css/slick.css") }}">
    <link rel="stylesheet" href="{{ asset(" site/css/nice-select.css") }}">
    <link rel="stylesheet" href="{{ asset(" site/css/responsive.css") }}">
    <link rel="stylesheet" href="{{ asset(" site/css/ticker-style.css") }}">
@endsection

@section('content')
<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                    novalidate="novalidate">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                                    placeholder=" Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                    placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                                    placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                    placeholder="Enter Subject">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        {!! $contact->address !!}
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        {!! $contact->phone !!}
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        {!! $contact->email !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->
@endsection

@section('script')
    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{ asset(" site/js/vendor/modernizr-3.5.0.min.js") }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset(" site/js/vendor/jquery-1.12.4.min.js") }}"></script>
    <script src="{{ asset(" site/js/popper.min.js") }}"></script>
    <script src="{{ asset(" site/js/bootstrap.min.js") }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset(" site/js/jquery.slicknav.min.js") }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset(" site/js/owl.carousel.min.js") }}"></script>
    <script src="{{ asset(" site/js/slick.min.js") }}"></script>
    <!-- Date Picker -->
    <script src="{{ asset(" site/js/gijgo.min.js") }}"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset(" site/js/wow.min.js") }}"></script>
    <script src="{{ asset(" site/js/animated.headline.js") }}"></script>
    <script src="{{ asset(" site/js/jquery.magnific-popup.js") }}"></script>

    <!-- Breaking New Pluging -->
    <script src="{{ asset(" site/js/jquery.ticker.js") }}"></script>
    <script src="{{ asset(" site/js/site.js") }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset(" site/js/jquery.scrollUp.min.js") }}"></script>
    <script src="{{ asset(" site/js/jquery.nice-select.min.js") }}"></script>
    <script src="{{ asset(" site/js/jquery.sticky.js") }}"></script>

    <!-- contact js -->
    <script src="{{ asset(" site/js/contact.js") }}"></script>
    <script src="{{ asset(" site/js/jquery.form.js") }}"></script>
    <script src="{{ asset(" site/js/jquery.validate.min.js") }}"></script>
    <script src="{{ asset(" site/js/mail-script.js") }}"></script>
    <script src="{{ asset(" site/js/jquery.ajaxchimp.min.js") }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset(" site/js/plugins.js") }}"></script>
    <script src="{{ asset(" site/js/main.js") }}"></script>
@endsection