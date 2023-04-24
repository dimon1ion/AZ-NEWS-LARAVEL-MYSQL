@extends('site.template.template')

@section('style')
    <link rel="stylesheet" href="{{ asset("site/css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("site/css/magnific-popup.css") }}">
    <link rel="stylesheet" href="{{ asset("site/css/slick.css") }}">
    <link rel="stylesheet" href="{{ asset("site/css/nice-select.css") }}">
    <link rel="stylesheet" href="{{ asset("site/css/responsive.css") }}">
    <link rel="stylesheet" href="{{ asset("site/css/ticker-style.css") }}">
@endsection

@section('content')
<main>
    <!-- About US Start -->
    <div class="about-area">
        <div class="container">
                <!-- Hot Aimated News Tittle-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Trending now</strong>
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                    <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                    <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
               <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Tittle -->
                                <div class="about-right mb-90">
                                    <div class="about-img">
                                        <img src="{{ asset("site/img/".$about->url) }}" alt="">
                                    </div>
                                    <div class="section-tittle mb-30 pt-30">
                                        <h3>{{ __("index.about") }}</h3>
                                    </div>
                                    <div class="about-prea">
                                        {!! $about->text !!}
                                    </div>
                                </div>
                    </div>
                    <div class="col-lg-4">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-40">
                            <h3>{{ __('index.follow_us') }}</h3>
                        </div>
                        <!-- Flow Socail -->
                        <div class="single-follow mb-45">
                            <div class="single-box">
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{ asset("site/img/news/icon-fb.png") }}" alt=""></a>
                                    </div>
                                    <div class="follow-count">  
                                        <span>8,045</span>
                                        <p>{{ __('index.fans') }}</p>
                                    </div>
                                </div> 
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{ asset("site/img/news/icon-tw.png") }}" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>{{ __('index.fans') }}</p>
                                    </div>
                                </div>
                                    <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{ asset("site/img/news/icon-ins.png") }}" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>{{ __('index.fans') }}</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="{{ asset("site/img/news/icon-yo.png") }}" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>{{ __('index.fans') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- New Poster -->
                        <div class="news-poster d-none d-lg-block">
                            <img src="assets/img/news/news_card.jpg" alt="">
                        </div>
                    </div>
               </div>
        </div>
    </div>
    <!-- About US End -->
</main>
@endsection

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
    <script src="{{ asset("site/js/jquery.nice-select.min.js") }}"></script>
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
@endsection