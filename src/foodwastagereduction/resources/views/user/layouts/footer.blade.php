<footer>
        <div class="footer-wrapper section-bg2" data-background="{{url('user/assets/img/gallery/footer_bg.png')}}">
            <!-- Footer Top-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <div class="footer-tittle">
                                    <div class="footer-logo mb-20">
                                        <a href="/"><img src="{{url('user/assets/img/logo/logo2_footer.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Contact Info</h4>
                                    <ul>
                                        <li>
                                            <p>Address: A-202, Panchnath Complex, Opp. Saint Mary's School, Kalawad Road, Rajkot - 360005</p>
                                        </li>
                                        <li><a href="#">Phone: +91 635454 6061</a></li>
                                        <li><a href="#">Email: bhavyabpopat7777@gmail.com</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Important Links</h4>
                                    <ul>
                                    <li><a href="/">Home</a></li>
                                        <li><a href="/donate">Donate</a></li>
                                        @if(Auth::guard('web')->check())
                                        <li><a href="/donations">My Donations</a></li>
                                        @endif
                                        <li><a href="/about">About Us</a></li>
                                        <li><a href="/contact">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Newsletter</h4>
                                    <div class="footer-pera footer-pera2">
                                    <p>Enter your E-Mail address below to sign up for Newsletters.
                                </div>
                                <!-- Form -->
                                <div class="footer-form" >
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                        method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                            class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                class="email_icon newsletter-submit button-contactForm"><img src="{{url('user/assets/img/gallery/form.png')}}" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-xl-10 col-lg-9 ">
                                <div class="footer-copy-right">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy; <script>document.write(new Date().getFullYear());</script> | Made in Laravel with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://github.com/bhavyajustchill" target="_blank">BhavyaJustChill</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3">
                                <div class="footer-social f-right">
                                    <a href="https://twitter.com/BhavyaJustChill"><i class="fab fa-twitter"></i></a>
                                    <a  href="https://www.facebook.com/bhavya.popat.98/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://github.com/bhavyajustchill"><i class="fas fa-globe"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="{{url('user/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{url('user/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{url('user/assets/js/popper.min.js')}}"></script>
    <script src="{{url('user/assets/js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{url('user/assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{url('user/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('user/assets/js/slick.min.js')}}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{url('user/assets/js/wow.min.js')}}"></script>
    <script src="{{url('user/assets/js/animated.headline.js')}}"></script>
    <script src="{{url('user/assets/js/jquery.magnific-popup.js')}}"></script>

    <!-- Date Picker -->
    <script src="{{url('user/assets/js/gijgo.min.js')}}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{url('user/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{url('user/assets/js/jquery.sticky.js')}}"></script>
    <!-- Progress -->
    <script src="{{url('user/assets/js/jquery.barfiller.js')}}"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="{{url('user/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{url('user/assets/js/waypoints.min.js')}}"></script>
    <script src="{{url('user/assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{url('user/assets/js/hover-direction-snake.min.js')}}"></script>

    <!-- contact js -->
    <script src="{{url('user/assets/js/contact.js')}}"></script>
    <script src="{{url('user/assets/js/jquery.form.js')}}"></script>
    <script src="{{url('user/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{url('user/assets/js/mail-script.js')}}"></script>
    <script src="{{url('user/assets/js/jquery.ajaxchimp.min.js')}}"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{url('user/assets/js/plugins.js')}}"></script>
    <script src="{{url('user/assets/js/main.js')}}"></script>
    
    </body>
</html>