@extends('user.layouts.main')

@section('main-container')
    <main>
    <!--? About Law Start-->
    <section class="about-low-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <span>About our Foundation</span>
                            <h2>We Are On A Mission To Reduce Food Wastage</h2>
                        </div>
                        <p>We have coordinated the donation of over 7.5 lakh kilograms of quality prepared food from food service providers located in Rajkot. In 2022, 200+ entities through 80+ food-service locations (restaurants, airports, travel plazas, retailers, hotels, universities, hospitals, distribution centers) donated 6.5 lakh kilograms of prepared surplus food to 500+ hunger relief organizations.</p> 
                        <p>Our team members have experience with major restaurant chains and retailers in operations and food quality. Our entire full-time staff of 30 team members is ServSafe® certified in food safety.</p>
                        
                    </div>
                    <a href="/about" class="btn">About Us</a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        {{-- <div class="about-font-img d-none d-lg-block">
                            <img src="{{url('user/assets/img/gallery/about2.png')}}" alt="">
                        </div> --}}
                        <div class="about-back-img ">
                            <img src="{{url('user/assets/img/gallery/new about.jpg')}}" height="610" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Law End-->

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