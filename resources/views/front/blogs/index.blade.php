@extends('front.fixe')
@section('titre', 'Actualités')
@section('body')
    <main>


@php
    $config = DB::table('configs')->first();
    $service = DB::table('services')->get();
    $produit = DB::table('produits')->get();
@endphp

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
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Blog Grid</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="index.html">Home</a></span></li>
                                    <li class="active"><span>Blog Grid</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- blog-news area start -->
    <section class="latest-blog__area section-space pb-90 overflow-hidden latest-blog-bg">
        <div class="container">
            <div class="row mb-minus-30">
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="swiper-slide latest-blog__item-slide">
                        <div class="latest-blog__item-slide-inner">
                            <div class="latest-blog__item-media">
                                <a href="blog-details.html">
                                    <img src="/front/assets/imgs/blog/letest-blog/blog-card1.jpg" alt="images not found" class="img-fluid">
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
                </div>
                
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="swiper-slide latest-blog__item-slide">
                        <div class="latest-blog__item-media">
                            <a href="blog-details.html">
                                <img src="/front/assets/imgs/blog/letest-blog/blog-card2.jpg" alt="images not found" class="img-fluid">
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
                </div>

                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="swiper-slide latest-blog__item-slide">
                        <div class="latest-blog__item-media">
                            <a href="blog-details.html">
                                <img src="/front/assets/imgs/blog/letest-blog/blog-card3.jpg" alt="images not found" class="img-fluid">
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

                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="swiper-slide latest-blog__item-slide">
                        <div class="latest-blog__item-media">
                            <a href="blog-details.html">
                                <img src="/front/assets/imgs/blog/letest-blog/blog-card4.png" alt="images not found" class="img-fluid">
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
                </div>

                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="swiper-slide latest-blog__item-slide">
                        <div class="latest-blog__item-slide-inner">
                            <div class="latest-blog__item-media">
                                <a href="blog-details.html">
                                    <img src="/front/assets/imgs/blog/letest-blog/blog-card5.png" alt="images not found" class="img-fluid">
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
                </div>

                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="swiper-slide latest-blog__item-slide">
                        <div class="latest-blog__item-media">
                            <a href="blog-details.html">
                                <img src="/front/assets/imgs/blog/letest-blog/blog-card6.png" alt="images not found" class="img-fluid">
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

                <div class="bottom-button d-flex mt-30">
                    <a href="#"><i class="fa-solid fa-angles-left"></i></a>
                    <a href="#"><i class="fa-solid fa-1"></i></a>
                    <a href="#"><i class="fa-solid fa-2"></i></a>
                    <a href="#"><i class="fa-solid fa-3"></i></a>
                    <a href="#"><i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-news area end -->
    
    <!-- Brand area start -->
    <section class="main-brand__area section-space-bottom">
        <div class="brand__area">
            <div class="container">
                <div class="row">
                    <div class="main-brand__tittle-wrapper text-center mb-40">
                        <h4 class="main-brand__tittle-wrapper-title">"Morethan 5k Top Global Brands Trust our Services"</h4>
                        <p class="main-brand__tittle-wrapper-subtitle">Variations of passages of lorem but the majority.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper brand__active wow fadeIn" data-wow-delay=".3s">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".1s">
                                        <div class="brand__thumb">
                                            <img class="img-fluid" src="/front/assets/imgs/brands/home2-companey-brands-img-1.png" alt="image not found">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".2s">
                                        <div class="brand__thumb">
                                            <img class="img-fluid" src="/front/assets/imgs/brands/home2-companey-brands-img-2.png" alt="image not found">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".3s">
                                        <div class="brand__thumb">
                                            <img class="img-fluid" src="/front/assets/imgs/brands/home2-companey-brands-img-3.png" alt="image not found">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".4s">
                                        <div class="brand__thumb">
                                            <img class="img-fluid" src="/front/assets/imgs/brands/home2-companey-brands-img-4.png" alt="image not found">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".5s">
                                        <div class="brand__thumb">
                                            <img class="img-fluid" src="/front/assets/imgs/brands/home2-companey-brands-img-5.png" alt="image not found">
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
    <!-- Brand area end -->
    

   </main>
@endsection
