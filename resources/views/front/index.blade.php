@extends('front.fixe')
@section('titre', 'Accueil')
@section('body')


    <main>

        @php
            $config = DB::table('configs')->first();
            $service = DB::table('services')->get();
            $produit = DB::table('produits')->get();
        @endphp

        <!-- /#popup-search-box -->
<!-- Body main wrapper start -->


    <!-- Banner area start -->
    <section class="banner__area p-relative overflow-hidden"> 
        <div class="bg-color"></div>
        <div class="banner-home__middel-shape-2"></div>
        <div class="banner-custom-container">
            <div class="swiper banner_parallax-slider p-relative">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner banner__space banner__space-3 overflow-hidden">
                            <div class="bg-shape">
                                <img class="leftRight" src="assets/imgs/banner-3/isolation_mode-2.svg" alt="img not found">
                            </div>
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="banner__content content-3 p-relative z-index-1">
                                        <span class="sub-title">New Arrival Printfix</span>
                                        <h2 class="title">Quick And Best Printing For Your Business</h2>

                                        <div class="banner-home-2__btn__wrapper-2 d-flex flex-wrap mt-40 mt-md-35 mt-sm-30 mt-xs-25 pb-40">
                                            <a href="service.html" class="rr-btn wow fadeInLeft animated" data-wow-delay="1s">Start Your Project</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="banner-media-3 p-relative z-index-1">
                                        <div class="middel-img upDown-bottom">
                                            <div class="frist-img img-border">
                                                <img src="assets/imgs/banner-3/t-shart-3.png" alt="img not found">
                                            </div>
                                            <div class="secend-img img-border">
                                                <img src="assets/imgs/banner-3/t-shart-2.png" alt="img not found">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="banner-text p-relative z-index-1">
                                        <div class="text-space">
                                            <p>There are many variations of passages orem psum available but the majority have suffered alteration in some form by injected.</p>
                                            <div class="arrow">
                                                <img class="upDown" src="assets/imgs/banner-3/banner-3-right-shape.svg" alt="img not found">
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner banner__space banner__space-3 overflow-hidden">
                            <div class="bg-shape">
                                <img class="leftRight" src="assets/imgs/banner-3/isolation_mode-2.svg" alt="img not found">
                            </div>
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="banner__content content-3 p-relative z-index-1">
                                        <span class="sub-title">New Arrival Printfix</span>
                                        <h2 class="title">Quick And Best Printing For Your Business</h2>

                                        <div class="banner-home-2__btn__wrapper-2 d-flex flex-wrap mt-40 mt-md-35 mt-sm-30 mt-xs-25 pb-40">
                                            <a href="service.html" class="rr-btn wow fadeInLeft animated" data-wow-delay="1s">Start Your Project</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="banner-media-3 p-relative z-index-1">
                                        <div class="middel-img upDown-bottom">
                                            <div class="frist-img img-border">
                                                <img src="assets/imgs/banner-3/cap-3.png" alt="img not found">
                                            </div>
                                            <div class="secend-img img-border">
                                                <img src="assets/imgs/banner-3/t-shart-4.png" alt="img not found">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12">
                                    <div class="banner-text p-relative z-index-1">
                                        <div class="text-space">
                                            <p>There are many variations of passages orem psum available but the majority have suffered alteration in some form by injected.</p>
                                            <div class="arrow">
                                                <img class="upDown" src="assets/imgs/banner-3/banner-3-right-shape.svg" alt="img not found">
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- If we need navigation buttons -->
            <div class="banner__navigation banner__navigation-3 d-none d-lg-block">
                <button class="banner__button-next">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 10H1" stroke="#001D08" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10 1L1 10L10 19" stroke="#001D08" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="banner__button-prev">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 10H19" stroke="#001D08" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10 1L19 10L10 19" stroke="#001D08" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                
            </div>
    </section>
    <!-- Banner area end -->

   <!--latest Choose Us start-->
    <section class="latest-Choose-us__area section-space overflow-hidden latest-Choose-bg">
        <div class="container p-relative z-index-1">
            <div class="latest-Choose-us__all-shape">
                <div class="latest-Choose-us__bg-shape">
                    <img class="upDown-bottom img-fluid" src="assets/imgs/choose-us/bg-shape.svg" alt="img not found">
                </div>
                <div class="latest-Choose-us__bag-shape">
                    <img class="zooming img-fluid" src="assets/imgs/choose-us/bag-shape.png" alt="img not found">
                </div>
                <div class="latest-Choose-us__cap-shape">
                    <img class="upDown-top img-fluid" src="assets/imgs/choose-us/cap-shape.png" alt="img not found">
                </div>
            </div>
            <div class="latest-Choose-us__media-experience-box d-flex" data-parallax='{"y": -160, "smoothness": 15}'>
                <div class="title">
                    <h3><span class="count">25</span>+</h3>
                    <h4>Years</h4>
                </div>
                <div class="description">
                    <p>Of experience in printing service</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-7">
                    <div class="latest-Choose-us__content mb-40">
                        <h6 class="subtitle wow fadeInLeft animated" data-wow-delay=".6s">Why Choose Us</h6>
                        <h2 class="title wow fadeInLeft animated" data-wow-delay=".8s">Why People Choose Our Printfix?</h2>
                        <p class="wow fadeInLeft animated" data-wow-delay="1s">There are many variations of passages orem psum available but the majority have suffered alteration in some form by injected humour or randomised words which don't look even.</p>

                        <div class="latest-Choose-us__content-text d-flex">
                            <div class="latest-Choose-us__content-text-box wow fadeInLeft animated" data-wow-delay="1.2s">
                                <ul>
                                    <li><i class="fa-solid fa-circle-check"></i>Printed in full-color</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Variety of paper sizes</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Double-sided</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Optional finishing</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Professional Designs</li>
                                    <li><i class="fa-solid fa-circle-check"></i>Quality Assurance By Expertise</li>
                                </ul>
                                
                            </div>
                        </div>
                        <div class="latest-Choose-us__content-btn wow fadeInLeft animated" data-wow-delay="1.4s">
                            <a href="about-us.html" class="rr-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5">
                    <div class="latest-Choose-us__media d-flex flex-row">
                        <div class="latest-Choose-us__media-img1">
                            <img class="img-fluid" src="assets/imgs/choose-us/chooes-us-img1.jpg" alt="image not found">
                        </div>
                        <div class="latest-Choose-us__media-img2">
                            <img src="assets/imgs/choose-us/chooes-us-img2.jpg" alt="image not found" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--latest Choose Us end-->


      <!-- service area start -->
    <section class="latest-service__area pt-120 pb-90 p-relative overflow-hidden latest-service-bg">
        <div class="container p-relative">
            <div class="latest-service__all-shape">
                <div class="latest-service__right-shape">
                    <img class="upDown" src="assets/imgs/service/right-shape.svg" alt="img not found">
                </div>
                <div class="latest-service__bg-shape">
                    <img class="upDown" src="assets/imgs/service/service-bg-shape.png" alt="img not found">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="latest-service__title-box mb-40 text-center">
                        <div class="latest-service__title-box-subtitle wow fadeInLeft animated" data-wow-delay=".6s">
                            <h6>Our Main Services</h6>
                        </div>
                        <div class="latest-service__title-box-title wow fadeInLeft animated" data-wow-delay=".8s">
                            <h2>Professional Digital Printing</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInLeft animated" data-wow-delay="1s">
                        <div class="latest-service__item-icon">
                            <img src="assets/imgs/service/service1.svg" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Top Quality Prints</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>Mi donec risus commodo auctor phasellus adipiscing. Faucibus magna cursus sed sodales amet. Nunc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInLeft animated" data-wow-delay="1.2s">
                        <div class="latest-service__item-icon">
                            <img src="assets/imgs/service/service2.svg" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Mix and match colors</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>Mi donec risus commodo auctor phasellus adipiscing. Faucibus magna cursus sed sodales amet. Nunc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInLeft animated" data-wow-delay="1.4s">
                        <div class="latest-service__item-icon">
                            <img src="assets/imgs/service/service3.svg" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Shipping worldwide</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>Mi donec risus commodo auctor phasellus adipiscing. Faucibus magna cursus sed sodales amet. Nunc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInRight animated" data-wow-delay="1.2s">
                        <div class="latest-service__item-icon service-4">
                            <img src="assets/imgs/service/service4.svg" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Offset Printing</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>Mi donec risus commodo auctor phasellus adipiscing. Faucibus magna cursus sed sodales amet. Nunc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInRight animated" data-wow-delay="1.4s">
                        <div class="latest-service__item-icon">
                            <img src="assets/imgs/service/service5.svg" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Quality Guarantee</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>Mi donec risus commodo auctor phasellus adipiscing. Faucibus magna cursus sed sodales amet. Nunc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInRight animated" data-wow-delay="1.6s">
                        <div class="latest-service__item-icon">
                            <img src="assets/imgs/service/service6.svg" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Reorder quickly</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>Mi donec risus commodo auctor phasellus adipiscing. Faucibus magna cursus sed sodales amet. Nunc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
   <!-- latest-counter area end -->
    <section class="latest-counter__area pt-75 pb-75 pt-xs-30 pb-xs-60   latest-counter-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                   <div class="latest-counter__counter-box wow fadeInLeft animated" data-wow-delay="1s">
                        <div class="latest-counter__content text-center">
                            <div class="latest-counter__content__counter-img mt-40">
                                <img src="assets/imgs/counter/home1-counter-up-1.svg" alt="img not found">
                            </div>
                            <h5><span class="count">270</span>+</h5>
                            <span>Happy Customers</span>
                        </div>
                   </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="latest-counter__content text-center wow fadeInLeft animated" data-wow-delay="1.2s">
                        <div class="latest-counter__content__counter-img">
                            <img src="assets/imgs/counter/home1-counter-up-2.svg" alt="img not found">
                        </div>
                        <h5><span class="count">1320</span>+</h5>
                        <span>Project Complate</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="latest-counter__content text-center wow fadeInLeft animated" data-wow-delay="1.4s">
                        <div class="latest-counter__content__counter-img man-icon">
                            <img src="assets/imgs/counter/home1-counter-up-3.svg" alt="img not found">
                        </div>
                        <h5><span class="count">180</span>+</h5>
                        <span>Experts Team</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="latest-counter__content text-center wow fadeInLeft animated" data-wow-delay="1.6s">
                        <div class="latest-counter__content__counter-img ellipse-icon">
                            <img src="assets/imgs/counter/home1-counter-up-4.svg" alt="img not found">
                        </div>
                        <h5><span class="count">15</span>+</h5>
                        <span>Years Of Experience</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest-counter area start -->

    <!--testimonial-area start -->
    <section class="testimonial-3__area feedback-2 position-relative overflow-hidden section-space">
        <div class="container">
            <div class="testimonial-3__shape-wrapper">
                <div class="testimonial-3__shape-wrapper-bg-shape">
                    <img class="upDown" src="/front/assets/imgs/testimonial-3/testmonial-3-bg-shape.svg" alt="img not found">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-3__title-wrapper text-center mb-50">
                        <h6 class="testimonial-3__title-wrapper-subtitle"> {{ \App\Helpers\TranslationHelper::TranslateText('Les retours de nos clients') }}</h6>
                        <h2 class="testimonial-3__title-wrapper-title">
                            
                {{ \App\Helpers\TranslationHelper::TranslateText('Ce que nos clients disent de leur expérience') }}
                <br>

                {{ \App\Helpers\TranslationHelper::TranslateText('avec nos services') }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-3__wrapper feedback-2__wrapper">
                        <div class="swiper testimonial-3__wrapper-active-2 feedback__active-2  wow fadeIn animated" data-wow-delay=".9s">
                            <div class="swiper-wrapper">
                                @if ($testimonials->isEmpty())
                    <p> {{ \App\Helpers\TranslationHelper::TranslateText('Aucun témoignage disponible') }}.</p>
                    @else
                    @foreach ($testimonials as $testimonial)

                                <div class="swiper-slide">
                                    <div class="testimonial-3__wrapper-item-2 feedback__item-2">
                                        <div class="testimonial-3__wrapper-item-2-content feedback__item-2-content d-flex mb-sm-35 mb-xs-30">
                                            <div class="testimonial-3__wrapper-item-2-content-right-img">
                                                 @if ($testimonial->photo)
                                        <img src="{{ asset('uploads/testimonials/' . $testimonial->photo) }}" alt="Photo Témoignage" width="100" height="100">
                                        @else
                                        <img src="./assets/images/testimonial/image-1.png" alt="testimonial image">
                                        @endif
                                                 </div>


                                                 

                                            <div class="content-thumb-social">
                                           {{--      <div class="testimonial-3__wrapper-item-2-content-social mb-10">
                                                    <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z" fill="#FFB016"/>
                                                    </svg>                                                    
                                                    <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z" fill="#FFB016"/>
                                                    </svg>                                                    
                                                    <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z" fill="#FFB016"/>
                                                    </svg>                                                    
                                                    <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z" fill="#FFB016"/>
                                                    </svg>                                                    
                                                    <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12 0L14.6942 8.2918H23.4127L16.3593 13.4164L19.0534 21.7082L12 16.5836L4.94658 21.7082L7.64074 13.4164L0.587322 8.2918H9.30583L12 0Z" fill="#FFB016"/>
                                                    </svg>                                                    
                                                </div> --}}
                                                <p class="testimonial-3__wrapper-item-2-content-description">
                                                    {!! \App\Helpers\TranslationHelper::TranslateText($testimonial->message) !!}
                                                </p>
                                                <div class="testimonial-3__wrapper-item-2-author feedback__item-2-author d-flex align-items-end justify-content-between">
                                                    <div class="testimonial-3__wrapper-item-2-author feedback__item-2-info">
                                                        <h4 class="text-capitalize">{{ $testimonial->name }}</h4>
                                                        <span>Product Manager</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>

                                  @endforeach
                    @endif
                            </div>
                        </div>

                        <div class="feedback-2__nav-pre wrapper">
                            <!-- If we need navigation buttons -->
                            <div class="feedback-2__navigation">
                                <button class="feedback-2__slider-button-prev">
                                    <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 22L2 12L12 2" stroke="#001D08" stroke-opacity="1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                        
                                </button>
                                <!-- If we need pagination -->
                                <button class="feedback-2__slider-button-next">
                                    <svg width="14" height="24" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 22L12 12L2 2" stroke="#001D08" stroke-opacity="1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                        
                                </button>
                            </div>
                        </div>
                    </div>

<br><br>
        <br>
        <div class="col-12 d-flex justify-content-center">
            <div class="form-group mb--0">
             <button type="submit" class="rr-btn mt-30"  data-bs-toggle="modal" data-bs-target="#exampleModal">


                    {{ \App\Helpers\TranslationHelper::TranslateText('Laissez un témoignage') }}
                    <span class="icon-arrow-right"></span></button>
            </div>

        </div>


        <div id="successMessage" class="alert alert-success" style="display:none;"></div>
        <div id="errorMessage" class="alert alert-danger" style="display:none;"></div>


                </div>
            </div>
        </div>
    </section>
    <!--testimonial-area end -->

    <!-- blog-news area start -->
    <section class="latest-blog__area pb-90 overflow-hidden latest-blog-bg">
        <div class="container">
            <div class="blog-top heading-space2">
                <div class="latest-blog__title-wrapper">
                    <h6 class="subtitle wow fadeInLeft animated" data-wow-delay=".2s">Blog Post</h6>
                    <h2 class="title wow fadeInLeft animated" data-wow-delay=".4s">Read Latest News & Blog</h2>
                </div>
                <div class="latest-blog__button-right fadeInRight animated" data-wow-delay=".3s">
                    <button class="small-btn small-btn-transparent blog__slider-button-prev">
                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 17L1 9L9 1" stroke="#001D08" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button class="small-btn small-btn-transparent blog__slider-button-next">
                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 17L9 9L1 1" stroke="#001D08" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="row mb-minus-30">
                <div class="col-12">
                    <div class="latest-blog__item mb-30 wow fadeInLeft animated" data-wow-delay=".8s">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide latest-blog__item-slide pb-30">
                                    <div class="latest-blog__item-slide-inner">
                                        <div class="latest-blog__item-media">
                                            <a href="blog-details.html">
                                                <img src="assets/imgs/blog/letest-blog/blog-card1.jpg" alt="images not found" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="latest-blog__item-text">
                                            <div class="latest-blog__item-text-meta d-flex">
                                                <div class="latest-blog__item-text-meta-calender">
                                                    <h4>12</h4>
                                                    <p>Sep</p>
                                                </div>
                                                <span><a href="blog-details.html"><i class="fa-regular fa-user"></i> Admin</a></span>
                                                <span class="meta-comment"><a href="blog-details.html"><i class="fa-regular fa-comment"></i> 2 Comments</a></span>
                                            </div>
                
                                            <div class="latest-blog__item-text-bottom">
                                                <a href="blog-details.html"><h4>How Chat bots Can Help You Drive More Sales.</h4></a>
                                                <a href="blog-details.html" class="readmore d-flex align-items-center">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-blog__item-slide pb-30">
                                    <div class="latest-blog__item-media">
                                        <a href="blog-details.html">
                                            <img src="assets/imgs/blog/letest-blog/blog-card2.jpg" alt="images not found" class="img-fluid">
                                        </a>
                                    </div>
                                    
                                    <div class="latest-blog__item-text">
                                        <div class="latest-blog__item-text-meta d-flex">
                                            <div class="latest-blog__item-text-meta-calender">
                                                <h4>12</h4>
                                                <p>Sep</p>
                                            </div>
                                            <span><a href="blog-details.html"><i class="fa-regular fa-user"></i> Admin</a></span>
                                            <span class="meta-comment"><a href="blog-details.html"><i class="fa-regular fa-comment"></i> 2 Comments</a></span>
                                        </div>
            
                                        <div class="latest-blog__item-text-bottom">
                                            <a href="blog-details.html"><h4>Emergency printing pressnear you?</h4></a>
                                            <a href="blog-details.html" class="readmore d-flex align-items-center">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-blog__item-slide pb-30">
                                    <div class="latest-blog__item-media">
                                        <a href="blog-details.html">
                                            <img src="assets/imgs/blog/letest-blog/blog-card3.jpg" alt="images not found" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="latest-blog__item-text">
                                        <div class="latest-blog__item-text-meta d-flex">
                                            <div class="latest-blog__item-text-meta-calender">
                                                <h4>12</h4>
                                                <p>Sep</p>
                                            </div>
                                            <span><a href="blog-details.html"><i class="fa-regular fa-user"></i> Admin</a></span>
                                            <span class="meta-comment"><a href="blog-details.html"><i class="fa-regular fa-comment"></i> 2 Comments</a></span>
                                        </div>
            
                                        <div class="latest-blog__item-text-bottom">
                                            <a href="blog-details.html"><h4>Introduction to our way of work near you.</h4></a>
                                            <a href="blog-details.html" class="readmore d-flex align-items-center">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-blog__item-slide pb-30">
                                    <div class="latest-blog__item-media">
                                        <a href="blog-details.html">
                                            <img src="assets/imgs/blog/letest-blog/blog-card1.jpg" alt="images not found" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="latest-blog__item-text">
                                        <div class="latest-blog__item-text-meta d-flex">
                                            <div class="latest-blog__item-text-meta-calender">
                                                <h4>12</h4>
                                                <p>Sep</p>
                                            </div>
                                            <span><a href="blog-details.html"><i class="fa-regular fa-user"></i> Admin</a></span>
                                            <span class="meta-comment"><a href="blog-details.html"><i class="fa-regular fa-comment"></i> 2 Comments</a></span>
                                        </div>
            
                                        <div class="latest-blog__item-text-bottom">
                                            <a href="blog-details.html"><h4>How Chat bots Can Help You Drive More Sales.</h4></a>
                                            <a href="blog-details.html" class="readmore d-flex align-items-center">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-blog__item-slide pb-30">
                                    <div class="latest-blog__item-media">
                                        <a href="blog-details.html">
                                            <img src="assets/imgs/blog/letest-blog/blog-card2.jpg" alt="images not found" class="img-fluid">
                                        </a>
                                    </div>
                                    
                                    <div class="latest-blog__item-text">
                                        <div class="latest-blog__item-text-meta d-flex">
                                            <div class="latest-blog__item-text-meta-calender">
                                                <h4>12</h4>
                                                <p>Sep</p>
                                            </div>
                                            <span><a href="blog-details.html"><i class="fa-regular fa-user"></i> Admin</a></span>
                                            <span class="meta-comment"><a href="blog-details.html"><i class="fa-regular fa-comment"></i> 2 Comments</a></span>
                                        </div>
        
                                        <div class="latest-blog__item-text-bottom">
                                            <a href="blog-details.html"><h4>Emergency printing pressnear you?</h4></a>
                                            <a href="blog-details.html" class="readmore d-flex align-items-center">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-blog__item-slide pb-30">
                                    <div class="latest-blog__item-media">
                                        <a href="blog-details.html">
                                            <img src="assets/imgs/blog/letest-blog/blog-card3.jpg" alt="images not found" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="latest-blog__item-text">
                                        <div class="latest-blog__item-text-meta d-flex">
                                            <div class="latest-blog__item-text-meta-calender">
                                                <h4>12</h4>
                                                <p>Sep</p>
                                            </div>
                                            <span><a href="blog-details.html"><i class="fa-regular fa-user"></i> Admin</a></span>
                                            <span class="meta-comment"><a href="blog-details.html"><i class="fa-regular fa-comment"></i> 2 Comments</a></span>
                                        </div>
            
                                        <div class="latest-blog__item-text-bottom">
                                            <a href="blog-details.html"><h4>Introduction to our way of work near you.</h4></a>
                                            <a href="blog-details.html" class="readmore d-flex align-items-center">Read More <i class="fa-solid fa-arrow-right"></i></a>
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
    <!-- blog-news area end -->
   <section class="latest-newsletter__area pt-80 pb-80 overflow-hidden latest-newsletter-bg">
        <div class="container p-relative">
            <div class="row">
                <div class="col-xl-12">
                    <div class="latest-newsletter__content text-center">
                        <h2 class="title wow fadeInLeft animated" data-wow-delay=".4s">Newsletter</h2>
                        <p class="title wow fadeInLeft animated" data-wow-delay=".1s">
                                  {!! \App\Helpers\TranslationHelper::TranslateText('Vous souhaitez bénéficier d\'offres spéciales') !!}
                                <br>
                                  {!! \App\Helpers\TranslationHelper::TranslateText( ' et mises à jour ?') !!}</p>
                                   <form  id="newsletter-form" class="footer-widget-two__newsletter-form "
                                action="{{ route('newsletter.subscribe') }}" method="POST" 
                                >
                                 @csrf
                        <div class="search custom-search d-flex wow fadeInRight animated" data-wow-delay=".4s">
                            <input  type="email" name="email" id="newsletter-email" placeholder=" Email">
                            <button type="submit" id="submit-btn" class="rr-btn">Subscribe Now</button>
                        </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {
    // Vérifier si un message de succès ou d'erreur est dans la session
    @if(session('success'))
        Swal.fire('Succès', '{{ session('success') }}', 'success');
    @endif

    @if(session('error'))
        Swal.fire('Erreur', '{{ session('error') }}', 'error');
    @endif

    // Soumettre le formulaire newsletter avec AJAX
    $('#newsletter-form').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: "{{ route('newsletter.subscribe') }}", // Ta route d'abonnement
            method: 'POST',
            data: {
                _token: $('input[name="_token"]').val(),
                email: $('#newsletter-email').val()
            },
            success: function (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Succès',
                    text: response.message, // Message du back-end
                    timer: 3000,
                    showConfirmButton: false
                });

                $('#newsletter-email').val(''); // Réinitialiser le champ email
            },
            error: function (xhr) {
                let message = 'Erreur inconnue.';
                if (xhr.responseJSON?.errors?.email) {
                    message = xhr.responseJSON.errors.email[0]; // Afficher l'erreur de validation si elle existe
                }

                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: message // Message d'erreur
                });
            }
        });
    });
});
</script>

    
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> {{ \App\Helpers\TranslationHelper::TranslateText('Témoignage') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>



            <div class="modal-body ">
                <form id="testimonialForm" action="{{ route('testimonial.store') }}" method="POST" class="testimonial-form p-4 rounded shadow-sm bg-light">
                    @csrf
                    <div class=" col-sm-9 form-group mb-2">
                        <label class="form-label text-muted d-block mb-2">
                            {{ \App\Helpers\TranslationHelper::TranslateText('Votre nom') }}
                        </label>
                        <input type="text" class="form-control border-0 rounded-pill shadow-sm" id="name" name="name" required>
                    </div>
                    {{-- Note par étoiles --}}
                    <div class="form-group mb-4">
                        <label class="form-label text-muted d-block mb-2">
                            {{ \App\Helpers\TranslationHelper::TranslateText('Note') }}
                        </label>
                        <div class="star-rating">

                            @for ($i = 5; $i >= 1; $i--)
                            <input type="radio" id="star{{ $i }}" name="stars" value="{{ $i }}" required>
                            <label for="star{{ $i }}" title="{{ $i }} étoiles">&#9733;</label>
                            @endfor
                        </div>
                    </div>

                    <div class="form-group mb-4 col-sm-10">
                        <label for="testimonial" class="form-label text-muted"> {{ \App\Helpers\TranslationHelper::TranslateText('Message') }}</label>
                        <textarea class="form-control border-0 rounded-3 shadow-sm" id="testimonial" name="message" rows="10" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="thm-btn contact-one__btn"> {{ \App\Helpers\TranslationHelper::TranslateText('Envoyer') }}</button>
                    </div>
                </form>


                @if ($errors->any())
                <div class="alert alert-danger mt-4">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (session('success'))
                <div class="alert alert-success mt-4">
                    {{ session('success') }}
                </div>
                @endif
                <style>
                    .star-rating {
                        direction: rtl;
                        display: inline-flex;
                        gap: 5px;
                    }

                    .star-rating input[type="radio"] {
                        display: none;
                    }

                    .star-rating label {
                        font-size: 2rem;
                        color: #ccc;
                        cursor: pointer;
                    }

                    .star-rating input[type="radio"]:checked~label,
                    .star-rating label:hover,
                    .star-rating label:hover~label {
                        color: #FFD700;
                        /* jaune étoile */
                    }

                    .testimonial-form {
                        max-width: 600px;
                        margin: 0 auto;
                        background-color: #f8f9fa;
                    }

                    .form-group {
                        margin-bottom: 1.5rem;
                    }

                    .form-label {
                        font-weight: 600;
                        font-size: 1rem;
                    }

                    .form-control {
                        padding: 0.75rem 1rem;
                        font-size: 1rem;
                        color: #495057;
                        background-color: #fff;
                        border-radius: 25px;
                    }

                    textarea.form-control {
                        border-radius: 15px;
                    }

                    button.btn {
                        padding: 0.5rem 2rem;
                        font-size: 1.125rem;
                        transition: background-color 0.3s ease;
                    }

                    button.btn-primary {
                        background-color: #EFB121;
                        border-color: #EFB121;
                    }

                    button.btn-primary:hover {
                        background-color: #EFB121;
                        border-color: #EFB121;
                    }

                    .alert {
                        max-width: 600px;
                        margin: 1rem auto;
                    }

                </style>

            </div>



        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#testimonialForm').on('submit', function(e) {
            e.preventDefault(); // Empêcher l'envoi classique du formulaire

            $.ajax({
                url: $(this).attr('action')
                , method: $(this).attr('method')
                , data: $(this).serialize()
                , success: function(response) {
                    // Afficher le message de succès
                    $('#testimonialModal').modal('hide'); // Fermer le modal

                    $('#successMessage').text(
                        'Témoignage créé avec succès! Il sera valide après confirmation des administrateurs'

                    ).show();

                    setTimeout(function() {
                        location.reload();
                    }, 5000);
                }
                , error: function(response) {
                    // Afficher un message d'erreur si nécessaire
                    $('#errorMessage').text('Une erreur est survenue.')
                        .show(); // Afficher le message d'erreur
                }
            });
        });
    });

</script>


<!--Testimonial One End-->




    </main>


@endsection
