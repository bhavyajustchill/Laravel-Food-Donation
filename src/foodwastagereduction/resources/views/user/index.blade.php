@extends('user.layouts.main')

@section('main-container')
    <main>
    <!-- slider Area Start-->
    <div class="slider-area">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                            <div class="hero__caption">
                                <h1 style="padding-top:125px" data-animation="fadeInUp" data-delay=".6s">Our Helping to<br> the world.</h1>
                                <P data-animation="fadeInUp" data-delay=".8s" >Many People die of hunger daily in India, while on the other hand, many Indian Restaurants and Party Lawns throw away Leftover Food, Better use that food to feed needy people and reduce Food Wastage.</P>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="/donate" class="btn hero-btn mb-10"  data-animation="fadeInLeft" data-delay=".8s">Donate Now</a>
                                    <a href="/contact" class="cal-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">
                                        <i class="flaticon-null"></i>
                                        <p>+91 635454 6061</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--? Services Area Start -->
    <div class="service-area pt-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>What we are doing</span>
                        <h2>We Are In A Mission To Help The Helpless</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-null-1"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="/">Food Wastage Reduction</a></h5>
                            <p>Many Restaurant and Party Lawns throw away the Leftover Food after parties, which contributes to Food Wastage. We aim to reduce this Food Wastage.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-think"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="/">Provide Donated Food</a></h5>
                            <p>The Poor and Needy die everyday because of the lack of Food, so the Donated Food is delivered to Poor and the Needy in the Slum Areas of our city - Rajkot, Gujarat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-gear"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Supply Clean Water</a></h5>
                            <p>The Poor People consume mostly dirty water because they cannot afford to buy Drinking Water. So, we supply Clean Drinking Water from our side.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->
    
    <!--? Team Ara Start -->
    <div class="team-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 text-center mb-70">
                        <span>Our Team</span>
                        <h2>Our Top Donors Always ready</h2>
                    </div> 
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{url('user/assets/img/gallery/team1.png')}}" alt="">
                            <!-- Blog Social -->
                            <ul class="team-social">
                                <li><a href="https://www.facebook.com/bhavya.popat.98/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/BhavyaJustChill"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://github.com/bhavyajustchill"><i class="fas fa-globe"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-caption">
                            <h3><a href="instructor.html">Bhavya Popat</a></h3>
                            <p>Top Donor #1</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{url('user/assets/img/gallery/team2.png')}}" alt="">
                            <!-- Blog Social -->
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-caption">
                            <h3><a href="instructor.html">Shahnawaz Bheda</a></h3>
                            <p>Top Donor #2</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{url('user/assets/img/gallery/team3.png')}}" alt="">
                            <!-- Blog Social -->
                            <ul class="team-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-caption">
                            <h3><a href="instructor.html">Divyaraj Mehta</a></h3>
                            <p>Top Donor #3</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Ara End -->
    <!-- Want To work -->
    <section class="wantToWork-area ">
        <div class="container">
            <div class="wants-wrapper w-padding2  section-bg" data-background="{{url('user/assets/img/gallery/section_bg01.png')}}">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-9 col-md-8">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Lets Change The World With Food Donation</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <a href="/register" class="btn white-btn f-right sm-left">Become A Donor</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Want To work End -->
    <!--? Testimonial Start -->
    <div class="testimonial-area pt-100 pb-150">
        <div class="container">
            <!-- Testimonial contents -->
            <div class="row d-flex justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <div class="h1-testimonial-active dot-style">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img mb-40">
                                        <img src="{{url('user/assets/img/gallery/testimonial.png')}}" alt="">
                                        <span>Bhavya Popat</span>
                                        <p>Founder &amp; CEO</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“Hi, I am Bhavya Popat, who started this Foundation. Our goal is to reduce the food wastage through this applicaiton called Food Wastage Reduction, and at the same time, provide food to the needy people on the Streets.”</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img mb-40">
                                        <img src="{{url('user/assets/img/gallery/testimonial-2.png')}}" alt="">
                                        <span>Shahnawaz Bheda</span>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“Making sure that the End User Experience and User Interface feels smooth and stunning, as well as highly engaging User Experience in the Back End is cruicial for getting the donations done quickly and reliably.”</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img mb-40">
                                        <img src="{{url('user/assets/img/gallery/testimonial-3.png')}}" alt="">
                                        <span>Divyaraj Mehta</span>
                                        <p>Manager</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
   
    <!--? Count Down Start -->
    <div class="count-down-area pt-25 section-bg" data-background="{{url('user/assets/img/gallery/section_bg02.png')}}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="count-down-wrapper" >
                        <div class="row justify-content-between">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter color-green">80</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">Donors</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter color-green">150</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">Slum Areas</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter color-green">500</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">Donations Done</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter color-green">250</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">Donations Pending</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Count Down End -->
    </main>
   @endsection 