@extends('site.template.template')

@section('style')
    <link rel="stylesheet" href="{{ asset("site/css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("site/css/magnific-popup.css") }}">
    <link rel="stylesheet" href="{{ asset("site/css/slick.css") }}">
    <link rel="stylesheet" href="{{ asset("site/css/nice-select.css") }}">
    <link rel="stylesheet" href="{{ asset("site/css/responsive.css") }}">
    <style>
        .fa-heart.my{
            color: #999999;
        }
        .fa-heart.my:hover{
            color: #fc3f00 !important
        }
        .liked{
            color: #fc3f00 !important
        }
    </style>
@endsection

@section('content')
<section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                   <img class="img-fluid" src="{{ asset("site/img/blog/".$post->url)}}" alt="">
                </div>
                <div class="blog_details">
                   <h2>
                        {{ $post->title }}
                   </h2>
                   <ul class="blog-info-link mt-3 mb-4">
                      <li>
                        <a href="#">
                            <i class="fa">
                                @foreach ($post->categories as $category)
                                    {{ $category->name." " }}
                                @endforeach
                            </i>
                        </a>
                    </li>
                      <li><a href="#"><i class="fa fa-heart"></i>{{ $post->likes }} likes</a></li>
                   </ul>
                   {!! $post->text !!}
                </div>
             </div>
             <div class="navigation-top">
                <div class="d-sm-flex justify-content-between text-center">
                   <p class="like-info">
                        <span class="align-middle">
                            @if ($liked === true)
                                <a href="#">
                                    <i class="fa fa-heart my liked"></i>
                                </a>
                            @else
                                <a href="{{ route("like", ["locale" => App::getLocale(), "id" => $post->id]) }}">
                                    <i class="fa fa-heart my "></i>
                                </a>
                            @endif
                        </span> {{ $post->likes }} likes
                   </p>
                   <div class="col-sm-4 text-center my-2 my-sm-0">
                      <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                   </div>
                   <ul class="social-icons">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                      <li><a href="#"><i class="fab fa-behance"></i></a></li>
                   </ul>
                </div>
                <div class="navigation-area">
                   <div class="row">
                      {{-- <div
                         class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                         <div class="thumb">
                            <a href="#">
                               <img class="img-fluid" src="assets/img/post/preview.png" alt="">
                            </a>
                         </div>
                         <div class="arrow">
                            <a href="#">
                               <span class="lnr text-white ti-arrow-left"></span>
                            </a>
                         </div>
                         <div class="detials">
                            <p>Prev Post</p>
                            <a href="#">
                               <h4>Space The Final Frontier</h4>
                            </a>
                         </div>
                      </div> --}}
                      {{-- <div
                         class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                         <div class="detials">
                            <p>Next Post</p>
                            <a href="#">
                               <h4>Telescopes 101</h4>
                            </a>
                         </div>
                         <div class="arrow">
                            <a href="#">
                               <span class="lnr text-white ti-arrow-right"></span>
                            </a>
                         </div>
                         <div class="thumb">
                            <a href="#">
                               <img class="img-fluid" src="assets/img/post/next.png" alt="">
                            </a>
                         </div>
                      </div> --}}
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-4">
             <div class="blog_right_sidebar">
                <aside class="single_sidebar_widget search_widget">
                   <form action="#">
                      <div class="form-group">
                         <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder='Search Keyword'
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                            <div class="input-group-append">
                               <button class="btns" type="button"><i class="ti-search"></i></button>
                            </div>
                         </div>
                      </div>
                      <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                         type="submit">Search</button>
                   </form>
                </aside>
                <aside class="single_sidebar_widget post_category_widget">
                   <h4 class="widget_title">Category</h4>
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
                   <h3 class="widget_title">Recent Post</h3>
                   @for ($i = 0; $i < count($recently) && $i < 4; $i++)
                        <div class="media post_item">
                            <img src="{{ asset("site/img/blog/".$recently[$i]->url) }}" class="w-25" alt="post">
                            <div class="media-body">
                                <a href="{{ route("post", ["locale" => App::getLocale(), "id" => $recently[$i]->id]) }}">
                                    <h3>{{ substr($recently[$i]->title, 0, 22) }}...</h3>
                                </a>
                                <p>{{ date_format($recently[$i]->created_at, "D d, Y") }}</p>
                            </div>
                        </div>
                    @endfor
                </aside>
                <aside class="single_sidebar_widget instagram_feeds">
                   <h4 class="widget_title">Instagram Feeds</h4>
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