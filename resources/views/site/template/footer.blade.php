<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding fix">
         <div class="container">
             <div class="row d-flex justify-content-between">
                 <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                     <div class="single-footer-caption">
                         <div class="single-footer-caption">
                             <!-- logo -->
                             <div class="footer-logo">
                                 <a href="index.html"><img src="{{ asset("site/img/logo/logo2_footer.png") }}" alt=""></a>
                             </div>
                             <div class="footer-tittle">
                                 <div class="footer-pera">
                                     <p>{{ __('index.footer_info') }}</p>
                                 </div>
                             </div>
                             <!-- social -->
                             <div class="footer-social">
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#"><i class="fab fa-instagram"></i></a>
                                 <a href="#"><i class="fab fa-pinterest-p"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                     <div class="single-footer-caption mt-60">
                         <div class="footer-tittle">
                             <h4>{{ __('index.newsletter') }}</h4>
                             <p>{{ __('index.newsletter_info') }}</p>
                             <!-- Form -->
                             <div class="footer-form" >
                                 <div id="mc_embed_signup">
                                     <form action="" method="get" class="subscribe_form relative mail_part">
                                         <input type="email" name="email" id="newsletter-form-email" placeholder="{{ __('index.email_address') }}"
                                         class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                         onblur="this.placeholder = '{{ __('index.email_address') }}'">
                                         <div class="form-icon">
                                         <button type="submit" name="submit" id="newsletter-submit"
                                         class="email_icon newsletter-submit button-contactForm"><img src="{{ asset("site/img/logo/form-iocn.png") }}" alt=""></button>
                                         </div>
                                         <div class="mt-10 info"></div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                     <div class="single-footer-caption mb-50 mt-60">
                         <div class="footer-tittle">
                             <h4>{{ __('index.instagram_feed') }}</h4>
                         </div>
                         <div class="instagram-gellay">
                             <ul class="insta-feed">
                                 <li><a href="#"><img src="{{ asset("site/img/post/instra1.jpg") }}" alt=""></a></li>
                                 <li><a href="#"><img src="{{ asset("site/img/post/instra2.jpg") }}" alt=""></a></li>
                                 <li><a href="#"><img src="{{ asset("site/img/post/instra3.jpg") }}" alt=""></a></li>
                                 <li><a href="#"><img src="{{ asset("site/img/post/instra4.jpg") }}" alt=""></a></li>
                                 <li><a href="#"><img src="{{ asset("site/img/post/instra5.jpg") }}" alt=""></a></li>
                                 <li><a href="#"><img src="{{ asset("site/img/post/instra6.jpg") }}" alt=""></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
    <!-- footer-bottom aera -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="footer-border">
                 <div class="row d-flex align-items-center justify-content-between">
                     <div class="col-lg-6">
                         <div class="footer-copy-right">
                             <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                {{ __('index.copyright') }} &copy;<script>document.write(new Date().getFullYear());</script> {{ __('index.footer_made') }} <i class="ti-heart" aria-hidden="true"></i>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="footer-menu f-right">
                             <ul>                             
                                 <li><a href="#">{{ __('index.terms') }}</a></li>
                                 <li><a href="#">{{ __('index.privacy_policy') }}</a></li>
                                 <li><a href="{{ route("contact") }}">{{ __('index.contact') }}</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>