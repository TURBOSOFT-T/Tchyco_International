@extends('front.fixe')
@section('titre', 'Contact')
@section('body')
    @php
        $config = DB::table('configs')->first();
        $service = DB::table('services')->get();
        $produit = DB::table('produits')->get();
    @endphp

<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->



<!-- Body main wrapper start -->
<main>

    <div class="breadcrumb__area breadcrumb-space overflow-hidden banner-home-bg ">
        <div class="banner-home__middel-shape inner-top-shape"></div>
        <div class="container">
            <div class="banner-all-shape-wrapper">
                <div class="banner-home__banner-shape-1 first-shape">
                    <img class="upDown-top" src="/front/assets/imgs/banner-1/banner-shape-1.svg" alt="img not found">
                </div>
                <div class="banner-home__banner-shape-2 second-shape">
                    <img class="upDown-bottom" src="/front/assets/imgs/banner-1/banner-shape-2.svg" alt="img not found">
                </div>
                <div class="right-shape">
                    <img class="zooming" src="/front/assets/imgs/inner-img/inner-right-shape.svg" alt="img not found">
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content text-center">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">About Us</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="index.html">Home</a></span></li>
                                    <li class="active"><span>About Us</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--latest about start-->
    <section class="latest-about2__area section-space overflow-hidden">
        <div class="container p-relative z-index-1">
            <div class="latest-about2__all-shape">
                <div class="latest-about2__all-shape-bg-shape">
                    <img class="upDown-bottom" src="/front/assets/imgs/latest-about/home-2/about2-bg-shape.svg" alt="img not found">
                </div>
                <div class="latest-about2__all-shape-circle-shape">
                    <img class="zooming" src="/front/assets/imgs/latest-about/home-2/about2-circle-img1.svg" alt="img not found">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="latest-about2__content">
                        <h6 class="latest-about2__content-subtitle">About Us</h6>
                        <h2 class="latest-about2__content-title">Professional Digital Printing.</h2>
                        <div class="latest-about2__content-description">
                            <p>If you’re looking for quality printing that won’t break the bank, turn to a professional printing service like ProPrinting. We can handle all your digital printing needs.</p>
                        </div>
                        <div class="latest-about2__content-text">
                            <ul>
                                <li><i class="fa-solid fa-check"></i>Printing on paper and card stock</li>
                                <li><i class="fa-solid fa-check"></i>Printing on vinyl and other materials</li>
                                <li><i class="fa-solid fa-check"></i>Large-format printing</li>
                                <li><i class="fa-solid fa-check"></i>Custom design and branding services</li>
                            </ul>
                            
                        </div>
                        <div class="latest-about2__content-btn">
                            <a href="service.html" class="rr-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="latest-about2__media">
                        <div class="latest-about2__media-img1">
                            <img src="/front/assets/imgs/latest-about/home-2/feature2-media-img1.jpg" class="img-fluid" alt="img not found">
                        </div>
                        <div class="latest-about2__media-img2">
                            <img src="/front/assets/imgs/latest-about/home-2/feature2-media-img2.jpg" class="img-fluid" alt="img not found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--latest about end-->


    <!--latest Choose Us start-->
    <section class="latest-Choose-us__area section-space overflow-hidden latest-Choose-bg">
        <div class="container p-relative z-index-1">
            <div class="latest-Choose-us__all-shape">
                <div class="latest-Choose-us__bg-shape">
                    <img class="upDown img-fluid" src="/front/assets/imgs/choose-us/bg-shape.svg" alt="img not found">
                </div>
                <div class="latest-Choose-us__bag-shape">
                    <img class="zooming img-fluid" src="/front/assets/imgs/choose-us/bag-shape.png" alt="img not found">
                </div>
                <div class="latest-Choose-us__cap-shape">
                    <img class="upDown-top img-fluid" src="/front/assets/imgs/choose-us/cap-shape.png" alt="img not found">
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
                        <h6 class="subtitle wow fadeInLeft animated" data-wow-delay=".3s">Why Choose Us</h6>
                        <h2 class="title wow fadeInLeft animated" data-wow-delay=".4s">Why People Choose Our Printfix?</h2>
                        <p class="wow fadeInLeft animated" data-wow-delay=".2s">There are many variations of passages orem psum available but the majority have suffered alteration in some form by injected humour or randomised words which don't look even.</p>

                        <div class="latest-Choose-us__content-text d-flex">
                            <div class="latest-Choose-us__content-text-box wow fadeInLeft animated" data-wow-delay=".2s">
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
                        <div class="latest-Choose-us__content-btn wow fadeInLeft animated" data-wow-delay=".4s">
                            <a href="about-us.html" class="rr-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-5">
                    <div class="latest-Choose-us__media d-flex flex-row">
                        <div class="latest-Choose-us__media-img1">
                            <img src="/front/assets/imgs/choose-us/chooes-us-img1.jpg" alt="image not found" class="img-fluid">
                        </div>
                        <div class="latest-Choose-us__media-img2">
                            <img src="/front/assets/imgs/choose-us/chooes-us-img2.jpg" alt="image not found" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--latest Choose Us end-->

    <!-- latest-team area start -->
    <section class="latest-team__area overflow-hidden section-space latest-team-bg">
        <div class="container">
            <div class="team-top heading-space">
                <div class="latest-team__title-wrapper">
                    <h6 class="subtitle wow fadeInLeft animated" data-wow-delay=".2s">Our Team</h6>
                    <h2 class="title wow fadeInLeft animated" data-wow-delay=".4s">Meet Our Team Member</h2>
                </div>
                <div class="latest-team__button-right  wow fadeInRight animated" data-wow-delay=".3s">
                    <button class="small-btn  right-icon team__slider-button-prev">
                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 17L1 9L9 1" stroke="#001D08" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button class="small-btn team__slider-button-next">
                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 17L9 9L1 1" stroke="#001D08" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="row p-relative">
                <div class="col-12">
                    <div class="latest-team__item margin-minus-400 mb-30">
                        <div class="swiper card-slide">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide latest-team__item-slide wow fadeInLeft animated" data-wow-delay=".4s">
                                    <div class="latest-team__item-media">
                                        <div class="latest-team__item-media-social d-flex">
                                            <a href="facebook.com" class="rr-btn"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="twitter.com" class="rr-btn"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="instagram.com" class="rr-btn"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                        <div class="latest-team__item-media-img-title ">
                                            <h5>Designer</h5>
                                            <a href="team-details.html"><h4>Arron Rodri</h4></a>
                                        </div>
                                      <div class="latest-item_thumb">
                                        <a href="team-details.html">
                                            <img src="/front/assets/imgs/latest-team/letest-team-img1.jpg" alt="images not found" class="img-fluid">
                                        </a>
                                      </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-team__item-slide wow fadeInLeft animated" data-wow-delay=".8s">
                                    <div class="latest-team__item-media">
                                        <div class="latest-team__item-media-social d-flex">
                                            <a href="facebook.com" class="rr-btn"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="twitter.com" class="rr-btn"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="instagram.com" class="rr-btn"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                        <div class="latest-team__item-media-img-title ">
                                            <h5>Operator</h5>
                                            <a href="team-details.html"><h4>Stifen Simons</h4></a>
                                        </div>
                                        <div class="latest-item_thumb">
                                            <a href="team-details.html">
                                                <img src="/front/assets/imgs/latest-team/letest-team-img2.jpg" alt="images not found" class="img-fluid">
                                            </a>
                                          </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-team__item-slide wow fadeInLeft animated" data-wow-delay="1.2s">
                                    <div class="latest-team__item-media">
                                        <div class="latest-team__item-media-social d-flex">
                                            <a href="facebook.com" class="rr-btn"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="twitter.com" class="rr-btn"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="instagram.com" class="rr-btn"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                        <div class="latest-team__item-media-img-title ">
                                            <h5>Senior Desinger</h5>
                                            <a href="team-details.html"><h4>Josephine Ava</h4></a>
                                        </div>
                                        <div class="latest-item_thumb">
                                            <a href="team-details.html">
                                                <img src="/front/assets/imgs/latest-team/letest-team-img3.jpg" alt="images not found" class="img-fluid">
                                            </a>
                                          </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-team__item-slide wow fadeInLeft animated" data-wow-delay="1.6s">
                                    <div class="latest-team__item-media">
                                        <div class="latest-team__item-media-social d-flex">
                                            <a href="facebook.com" class="rr-btn"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="twitter.com" class="rr-btn"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="instagram.com" class="rr-btn"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                        <div class="latest-team__item-media-img-title ">
                                            <h5>Designer</h5>
                                            <a href="team-details.html"><h4>William Mark</h4></a>
                                        </div>
                                        <div class="latest-item_thumb">
                                            <a href="team-details.html">
                                                <img src="/front/assets/imgs/latest-team/letest-team-img4.jpg" alt="images not found" class="img-fluid">
                                            </a>
                                          </div>
                                    </div>
                                </div>

                                <div class="swiper-slide latest-team__item-slide">
                                    <div class="latest-team__item-media">
                                        <div class="latest-team__item-media-social d-flex">
                                            <a href="facebook.com" class="rr-btn"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="twitter.com" class="rr-btn"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="instagram.com" class="rr-btn"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                        <div class="latest-team__item-media-img-title ">
                                            <h5>Operator</h5>
                                            <a href="team-details.html"><h4>Stifen Simons</h4></a>
                                        </div>
                                        <div class="latest-item_thumb">
                                            <a href="team-details.html">
                                                <img src="/front/assets/imgs/latest-team/letest-team-img2.jpg" alt="images not found" class="img-fluid">
                                            </a>
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
    <!-- latest-team area end -->

    <!-- Faq area start -->
    <section class="question__area overflow-hidden section-space question-bg">
        <div id="primary" class="content-area">
            <div class="container p-relative">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6 col-md-6">
                        <div class="faq">
                            <div id="faq" class="accordion">
                                <h6 class="subtitle wow fadeInLeft animated" data-wow-delay=".1s">Have Any Question</h6>
                                <h2 class="title mb-40 wow fadeInLeft animated" data-wow-delay=".2s">Frequently Ask Question</h2>

                                <div class="card wow fadeInLeft animated" data-wow-delay=".2s">
                                    <div class="card-header">
                                        <button class="card-link" data-bs-toggle="collapse" data-bs-target="#faq-1">
                                            Appropriate For Your Specific Business
                                        </button>
                                    </div>
                                    <div id="faq-1" class="collapse" data-bs-parent="#faq">
                                        <div class="card-body">
                                            <p>The other hand we denounce with righteou indg ation and dislike men who are so beguiled and demorali ed by the of pleasure of the moment. Dislike men who are so beguiled demoraliz worlds.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft animated" data-wow-delay=".3s">
                                    <div class="card-header">
                                        <button class="card-link" data-bs-toggle="collapse" data-bs-target="#faq-2">
                                            Design & Development Troubleshooting
                                        </button>
                                    </div>
                                    <div id="faq-2" class="collapse" data-bs-parent="#faq">
                                        <div class="card-body">
                                            <p>The other hand we denounce with righteou indg ation and dislike men who are so beguiled and demorali ed by the of pleasure of the moment. Dislike men who are so beguiled demoraliz worlds.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft animated" data-wow-delay=".4s">
                                    <div class="card-header">
                                        <button class="card-link" data-bs-toggle="collapse" data-bs-target="#faq-3">
                                            Online Support & Action
                                        </button>
                                    </div>
                                    <div id="faq-3" class="collapse" data-bs-parent="#faq">
                                        <div class="card-body">
                                            <p>The other hand we denounce with righteou indg ation and dislike men who are so beguiled and demorali ed by the of pleasure of the moment. Dislike men who are so beguiled demoraliz worlds.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="media">
                            <img data-parallax='{"scale": 1.3, "smoothness": 15}' src="/front/assets/imgs/faq/faq.jpg" alt="img not found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq area end -->

    <!-- latest-newsletter area start -->
    <section class="latest-newsletter__area pt-80 pb-80 overflow-hidden latest-newsletter-bg">
        <div class="container p-relative">
            <div class="row">
                <div class="col-xl-12">
                    <div class="latest-newsletter__content text-center">
                        <h2 class="title wow fadeInLeft animated" data-wow-delay=".4s">Subcribe To Our Newsletter</h2>
                        <p class="title wow fadeInLeft animated" data-wow-delay=".1s">Professional printing services can provide you with high-quality prints that will look great and last a long time. We have the equipment and expertise.</p>
                        <div class="search custom-search d-flex wow fadeInRight animated" data-wow-delay=".4s">
                            <input type="email" placeholder="Your Email">
                            <button type="submit" class="rr-btn">Subscribe Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest-newsletter area end -->
    
</main>


 
@endsection
