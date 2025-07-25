@extends('layouts.layout7')
@php
    $title = 'Event';
    $subtitle = 'Event';
@endphp
@section('title', ' Event || eventflow || eventflow Laravel Template')
@section('content')

<x-strickyHeader/>
<x-sidebar/>

        <!-- Event Page Start -->
        <section class="event-page">
            <div class="container">
                <div class="schedule-one__inner">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">Event Schedule</span>
                        </div>
                        <h2 class="section-title__title">Follow event schedule</h2>
                    </div>
                    <div class="schedule-one__main-tab-box tabs-box">
                        <ul class="tab-buttons clearfix list-unstyled">
                            <li data-tab="#1st-day" class="tab-btn active-btn">
                                <h3>Day 01</h3>
                                <p>16 April 2024</p>
                            </li>
                            <li data-tab="#2nd-day" class="tab-btn">
                                <h3>Day 02</h3>
                                <p>18 April 2024</p>
                            </li>
                            <li data-tab="#3rd-day" class="tab-btn">
                                <h3>Day 03</h3>
                                <p>24 April 2024</p>
                            </li>
                        </ul>
                        <div class="tabs-content">
                            <!--tab-->
                            <div class="tab active-tab" id="1st-day">
                                <div class="schedule-one__tab-content-box">
                                    <div class="schedule-one__single">
                                        <div class="schedule-one__left">
                                            <h3 class="schedule-one__title"><a href="{{ route('event-details') }}">Events That
                                                    Leave a <br>
                                                    Impression</a></h3>
                                            <p class="schedule-one__text">A personal portfolio is a curated collection
                                                of <br> an individual's professional work</p>
                                        </div>
                                        <div class="schedule-one__img">
                                            <img src="assets/images/resources/schedule-one-1-1.jpg" alt="">
                                        </div>
                                        <div class="schedule-one__address-and-btn-box">
                                            <ul class="list-unstyled schedule-one__address">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="schedule-one__btn-box">
                                                <a href="{{ route('contact') }}" class="schedule-one__btn thm-btn">Buy Ticket<span
                                                        class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-one__single">
                                        <div class="schedule-one__left">
                                            <h3 class="schedule-one__title"><a href="{{ route('event-details') }}">Sparkle & Shine
                                                    on <br>
                                                    Celebrations
                                                </a></h3>
                                            <p class="schedule-one__text">A personal portfolio is a curated collection
                                                of <br> an individual's professional work</p>
                                        </div>
                                        <div class="schedule-one__img">
                                            <img src="assets/images/resources/schedule-one-1-2.jpg" alt="">
                                        </div>
                                        <div class="schedule-one__address-and-btn-box">
                                            <ul class="list-unstyled schedule-one__address">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="schedule-one__btn-box">
                                                <a href="{{ route('contact') }}" class="schedule-one__btn thm-btn">Buy Ticket<span
                                                        class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-one__single">
                                        <div class="schedule-one__left">
                                            <h3 class="schedule-one__title"><a href="{{ route('event-details') }}">Sparkle & Shine
                                                    <br> Events
                                                </a></h3>
                                            <p class="schedule-one__text">A personal portfolio is a curated collection
                                                of <br> an individual's professional work</p>
                                        </div>
                                        <div class="schedule-one__img">
                                            <img src="assets/images/resources/schedule-one-1-3.jpg" alt="">
                                        </div>
                                        <div class="schedule-one__address-and-btn-box">
                                            <ul class="list-unstyled schedule-one__address">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="schedule-one__btn-box">
                                                <a href="{{ route('contact') }}" class="schedule-one__btn thm-btn">Buy Ticket<span
                                                        class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="2nd-day">
                                <div class="schedule-one__tab-content-box">
                                    <div class="schedule-one__single">
                                        <div class="schedule-one__left">
                                            <h3 class="schedule-one__title"><a href="{{ route('event-details') }}">Events That
                                                    Leave a <br>
                                                    Impression</a></h3>
                                            <p class="schedule-one__text">A personal portfolio is a curated collection
                                                of <br> an individual's professional work</p>
                                        </div>
                                        <div class="schedule-one__img">
                                            <img src="assets/images/resources/schedule-one-1-4.jpg" alt="">
                                        </div>
                                        <div class="schedule-one__address-and-btn-box">
                                            <ul class="list-unstyled schedule-one__address">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="schedule-one__btn-box">
                                                <a href="{{ route('contact') }}" class="schedule-one__btn thm-btn">Buy Ticket<span
                                                        class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-one__single">
                                        <div class="schedule-one__left">
                                            <h3 class="schedule-one__title"><a href="{{ route('event-details') }}">Sparkle & Shine
                                                    on <br>
                                                    Celebrations
                                                </a></h3>
                                            <p class="schedule-one__text">A personal portfolio is a curated collection
                                                of <br> an individual's professional work</p>
                                        </div>
                                        <div class="schedule-one__img">
                                            <img src="assets/images/resources/schedule-one-1-5.jpg" alt="">
                                        </div>
                                        <div class="schedule-one__address-and-btn-box">
                                            <ul class="list-unstyled schedule-one__address">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="schedule-one__btn-box">
                                                <a href="{{ route('contact') }}" class="schedule-one__btn thm-btn">Buy Ticket<span
                                                        class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-one__single">
                                        <div class="schedule-one__left">
                                            <h3 class="schedule-one__title"><a href="{{ route('event-details') }}">Sparkle & Shine
                                                    <br> Events
                                                </a></h3>
                                            <p class="schedule-one__text">A personal portfolio is a curated collection
                                                of <br> an individual's professional work</p>
                                        </div>
                                        <div class="schedule-one__img">
                                            <img src="assets/images/resources/schedule-one-1-6.jpg" alt="">
                                        </div>
                                        <div class="schedule-one__address-and-btn-box">
                                            <ul class="list-unstyled schedule-one__address">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="schedule-one__btn-box">
                                                <a href="{{ route('contact') }}" class="schedule-one__btn thm-btn">Buy Ticket<span
                                                        class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="3rd-day">
                                <div class="schedule-one__tab-content-box">
                                    <div class="schedule-one__single">
                                        <div class="schedule-one__left">
                                            <h3 class="schedule-one__title"><a href="{{ route('event-details') }}">Events That
                                                    Leave a <br>
                                                    Impression</a></h3>
                                            <p class="schedule-one__text">A personal portfolio is a curated collection
                                                of <br> an individual's professional work</p>
                                        </div>
                                        <div class="schedule-one__img">
                                            <img src="assets/images/resources/schedule-one-1-7.jpg" alt="">
                                        </div>
                                        <div class="schedule-one__address-and-btn-box">
                                            <ul class="list-unstyled schedule-one__address">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="schedule-one__btn-box">
                                                <a href="{{ route('contact') }}" class="schedule-one__btn thm-btn">Buy Ticket<span
                                                        class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-one__single">
                                        <div class="schedule-one__left">
                                            <h3 class="schedule-one__title"><a href="{{ route('event-details') }}">Sparkle & Shine
                                                    on <br>
                                                    Celebrations
                                                </a></h3>
                                            <p class="schedule-one__text">A personal portfolio is a curated collection
                                                of <br> an individual's professional work</p>
                                        </div>
                                        <div class="schedule-one__img">
                                            <img src="assets/images/resources/schedule-one-1-8.jpg" alt="">
                                        </div>
                                        <div class="schedule-one__address-and-btn-box">
                                            <ul class="list-unstyled schedule-one__address">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="schedule-one__btn-box">
                                                <a href="{{ route('contact') }}" class="schedule-one__btn thm-btn">Buy Ticket<span
                                                        class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-one__single">
                                        <div class="schedule-one__left">
                                            <h3 class="schedule-one__title"><a href="{{ route('event-details') }}">Sparkle & Shine
                                                    <br> Events
                                                </a></h3>
                                            <p class="schedule-one__text">A personal portfolio is a curated collection
                                                of <br> an individual's professional work</p>
                                        </div>
                                        <div class="schedule-one__img">
                                            <img src="assets/images/resources/schedule-one-1-9.jpg" alt="">
                                        </div>
                                        <div class="schedule-one__address-and-btn-box">
                                            <ul class="list-unstyled schedule-one__address">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="schedule-one__btn-box">
                                                <a href="{{ route('contact') }}" class="schedule-one__btn thm-btn">Buy Ticket<span
                                                        class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Event Page End -->

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