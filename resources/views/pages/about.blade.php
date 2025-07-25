@extends('layouts.layout7')
@php
    $title = 'About Us';
    $subtitle = 'About Us';
@endphp
@section('title', ' About || eventflow || eventflow Laravel Template')
@section('content')

<x-strickyHeader/>
<x-sidebar/>

    <!-- Event One Start -->
    <section class="event-one event-three">
        <div class="container">
            <div class="event-one__inner wow fadeInUp" data-wow-delay="300ms">
                <div class="event-one__top">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">About Our Event</span>
                        </div>
                        <h2 class="section-title__title">Uniting Creating of <br> the Memories</h2>
                    </div>
                    <div class="event-one__btn-box">
                        <a href="{{ route('event-details') }}" class="event-one__btn thm-btn">Join The Event <span
                                class="icon-arrow-right"></span> </a>
                    </div>
                </div>
                <ul class="list-unstyled event-one__points">
                    <li>
                        <div class="icon">
                            <span class="icon-air-horn"></span>
                        </div>
                        <div class="content">
                            <h4><a href="{{ route('event') }}">Artists & bands</a></h4>
                            <p>Events bring people together for a shared experien celebration a <br> From weddings
                                and birthdays to conferences </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <span class="icon-party-blower"></span>
                        </div>
                        <div class="content">
                            <h4><a href="{{ route('event') }}">Audience Event Planner</a></h4>
                            <p>Events bring people together for a shared experien celebration a <br> From weddings
                                and birthdays to conferences </p>
                        </div>
                    </li>
                </ul>
                <div class="event-one__img-box">
                    <img src="assets/images/resources/event-one-img-1.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Event One End -->

    <!-- Sliding Text One Start -->
    <section class="sliding-text-one">
        <div class="sliding-text-one__wrap">
            <ul class="sliding-text__list list-unstyled marquee_mode">
                <li>
                    <h2 data-hover="Magic of Events" class="sliding-text__title">Magic of Events
                        <img src="assets/images/icon/star-icon.png" alt=""></h2>
                </li>
                <li>
                    <h2 data-hover=" Celebrate Life" class="sliding-text__title"> Celebrate Life
                        <img src="assets/images/icon/star-icon.png" alt=""></h2>
                </li>
            </ul>
        </div>
    </section>
    <!-- Sliding Text One End -->

    <!-- Buy Ticket Start -->
    <section class="buy-ticket">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="buy-ticket__left wow fadeInLeft" data-wow-delay="100ms">
                        <ul class="buy-ticket__address list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-clock"></span>
                                </div>
                                <div class="text">
                                    <p>Mirpur 01 Road N 12 Dhaka Bangladesh</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text">
                                    <p>10 Am To 10 Pm 20 April 2024</p>
                                </div>
                            </li>
                        </ul>
                        <h3 class="buy-ticket__title">Grab Your Seat Wow Or You May Regret it Once</h3>
                        <p class="buy-ticket__text">Events bring people together for a shared experien celebration a
                            From weddings and <br> birthdays to conferences Events bring people together for a
                            shared </p>
                        <div class="buy-ticket__btn-box">
                            <a href="{{ route('contact') }}" class="buy-ticket__btn-1 thm-btn">Buy Your Ticket<span
                                    class="icon-arrow-right"></span> </a>
                            <a href="{{ route('contact') }}" class="buy-ticket__btn-2 thm-btn">Contact Us<span
                                    class="icon-arrow-right"></span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="buy-ticket__right wow fadeInRight" data-wow-delay="300ms">
                        <div class="buy-ticket__img">
                            <img src="assets/images/resources/buy-ticket-img.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Buy Ticket End -->

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="container">
            <div class="brand-one__inner">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100,
                "slidesPerView": 5,
                "loop": true,
                "navigation": {
                    "nextEl": "#brand-one__swiper-button-next",
                    "prevEl": "#brand-one__swiper-button-prev"
                },
                "autoplay": { "delay": 5000 },
                "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 1
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 3
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "1200": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    },
                    "1320": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="swiper-slide__img">
                                <a href="#"><img src="assets/images/brand/brand-1-1.png" alt=""></a>
                            </div>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="swiper-slide__img">
                                <a href="#"><img src="assets/images/brand/brand-1-2.png" alt=""></a>
                            </div>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="swiper-slide__img">
                                <a href="#"><img src="assets/images/brand/brand-1-3.png" alt=""></a>
                            </div>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="swiper-slide__img">
                                <a href="#"><img src="assets/images/brand/brand-1-4.png" alt=""></a>
                            </div>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="swiper-slide__img">
                                <a href="#"><img src="assets/images/brand/brand-1-5.png" alt=""></a>
                            </div>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="swiper-slide__img">
                                <a href="#"><img src="assets/images/brand/brand-1-1.png" alt=""></a>
                            </div>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="swiper-slide__img">
                                <a href="#"><img src="assets/images/brand/brand-1-2.png" alt=""></a>
                            </div>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="swiper-slide__img">
                                <a href="#"><img src="assets/images/brand/brand-1-3.png" alt=""></a>
                            </div>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="swiper-slide__img">
                                <a href="#"><img src="assets/images/brand/brand-1-4.png" alt=""></a>
                            </div>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="swiper-slide__img">
                                <a href="#"><img src="assets/images/brand/brand-1-5.png" alt=""></a>
                            </div>
                        </div><!-- /.swiper-slide -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->

    <!-- Event Direction Start -->
    <section class="event-direction event-direction-two">
        <div class="container">
            <div class="event-direction__inner">
                <div class="row">
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="event-direction__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">Our Event Direction</span>
                                </div>
                                <h2 class="section-title__title">Creating Memories <br> One Event Time</h2>
                            </div>
                            <p class="event-direction__text">Events bring people together for a shared experien
                                celebration a <br> From weddings and birthdays to conferences </p>
                            <div class="event-direction__call">
                                <div class="event-direction__call-icon">
                                    <img src="assets/images/icon/event-direction-chat-icon.png" alt="">
                                </div>
                                <div class="event-direction__call-content">
                                    <p>Call Us</p>
                                    <h4><a href="tel:3075550133">(307) 555-0133</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="300ms">
                        <div class="event-direction__right">
                            <ul class="event-direction__counter list-unstyled">
                                <li>
                                    <div class="event-direction__counter-single">
                                        <div class="event-direction__counter-box">
                                            <h3 class="odometer" data-count="100">00</h3>
                                            <span class="event-direction__counter-plus">+</span>
                                        </div>
                                        <p class="event-direction__counter-text">Our Event Artists</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="event-direction__counter-single">
                                        <div class="event-direction__counter-box">
                                            <h3 class="odometer" data-count="101">00</h3>
                                            <span class="event-direction__counter-plus">+</span>
                                        </div>
                                        <p class="event-direction__counter-text">Hours Of Music</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="event-direction__counter-single">
                                        <div class="event-direction__counter-box">
                                            <h3 class="odometer" data-count="10">00</h3>
                                            <span class="event-direction__counter-plus">+</span>
                                        </div>
                                        <p class="event-direction__counter-text">Event Stages</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="event-direction__counter-single">
                                        <div class="event-direction__counter-box">
                                            <h3 class="odometer" data-count="20">00</h3>
                                            <span class="event-direction__counter-plus">+</span>
                                        </div>
                                        <p class="event-direction__counter-text">Music Brands</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Event Direction End -->

    <!--CTA One Start-->
    <section class="cta-one">
        <div class="container">
            <div class="cta-one__inner">
                <h3 class="cta-one__title">Get Latest Updateds Subscribe <br> to Our Newsletter</h3>
                <form class="cta-one__form mc-form" data-url="MC_FORM_URL" novalidate="novalidate">
                    <div class="cta-one__form-input-box">
                        <input type="email" placeholder="Enter your email" name="EMAIL">
                        <button type="submit" class="cta-one__btn"><span class="icon-paper-plan"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--CTA One End-->

<x-footer/>
<x-mobileMenu/>
<x-searchPopup/>
<x-scroll-to-top/>
@endsection