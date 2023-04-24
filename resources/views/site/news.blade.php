@extends('site.template.template')

@section('style')
    <link rel="stylesheet" href="{{ asset("site/css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("site/css/magnific-popup.css") }}">
    <link rel="stylesheet" href="{{ asset("site/css/slick.css") }}">
    <link rel="stylesheet" href="{{ asset("site/css/nice-select.css") }}">
    <link rel="stylesheet" href="{{ asset("site/css/responsive.css") }}">
@endsection

@section('content')
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @isset($title)
                            <h1>{{ $title }}</h1>
                        @endisset
                        @foreach ($posts as $post)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ asset("site/img/blog/".$post->url) }}" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>{{ date_format(date_create($post->created_at), "d") }}</h3>
                                        <p>{{ date_format(date_create($post->created_at), "D") }}</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{ route("post", ["locale" => App::getLocale(), "id" => $post->id]) }}">
                                        <h2>{{ $post->title }}</h2>
                                    </a>
                                    <ul class="blog-info-link">
                                        <li>
                                            <a href="#" class="f-letter"><i class="fa"></i>
                                                @isset($post->categories)
                                                    @foreach ($post->categories as $category)
                                                        {{ $category->name." " }}
                                                    @endforeach
                                                @endisset
                                                @isset($post->category)
                                                    {{ $post->category }}
                                                @endisset
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-comments"></i>{{ $post->likes }} likes</a></li>
                                    </ul>
                                </div>
                            </article>
                        @endforeach
                    
                        {{ $posts->links('vendor.pagination.blog') }}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="{{ route("searchNews", ["locale" => App::getLocale()]) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" name="text" class="form-control" placeholder='{{ __("index.searchKeyword") }}'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder =  '{{ __('index.searchKeyword') }}'">
                                        <div class="input-group-append">
                                            <button class="btns" type="submit"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">{{ __("index.search") }}</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">{{ __("index.category") }}</h4>
                            <ul class="list cat-list">
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route("categoryNews", ["locale" => App::getLocale(), "id" => $category->id]) }}" class="d-flex">
                                            <p>{{ $category->name }}</p>
                                            <p>({{ $category->posts->count() }})</p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">{{ __("index.recentNews") }}</h3>
                            @for ($i = 0; $i < count($recently) && $i < 4; $i++)
                                <div class="media post_item">
                                    <img src="{{ asset("site/img/blog/".$recently[$i]->url) }}" class="w-25" alt="post">
                                    <div class="media-body">
                                        <a href="{{ route("post", ["locale" => App::getLocale(), "id" => $recently[$i]->id]) }}">
                                            <h3>{{ $recently[$i]->title }}</h3>
                                        </a>
                                        <p>{{ date_format($recently[$i]->created_at, "D d, Y") }}</p>
                                    </div>
                                </div>
                            @endfor
                        </aside>


                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">{{ __("index.instagram_feed") }}</h4>
                            <ul class="instagram_row flex-wrap">
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset("site/img/post/post_5.png") }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset("site/img/post/post_6.png") }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset("site/img/post/post_7.png") }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset("site/img/post/post_8.png") }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset("site/img/post/post_9.png") }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset("site/img/post/post_10.png") }}" alt="">
                                    </a>
                                </li>
                            </ul>
                        </aside>


                        {{-- <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
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

    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset("site/js/wow.min.js") }}"></script>
    <script src="{{ asset("site/js/animated.headline.js") }}"></script>
    
    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset("site/js/jquery.scrollUp.min.js") }}"></script>
    <script src="{{ asset("site/js/jquery.nice-select.min.js") }}"></script>
    <script src="{{ asset("site/js/jquery.sticky.js") }}"></script>
    <script src="{{ asset("site/js/jquery.magnific-popup.js") }}"></script>

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