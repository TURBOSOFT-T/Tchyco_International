@extends('front.fixe')
@section('titre', 'Actualités')
@section('body')
    <main>


@php
    $config = DB::table('configs')->first();
    $service = DB::table('services')->get();
    $produit = DB::table('produits')->get();
@endphp

<head>
    @section('blogs')
        <meta name="author" content="belle.com">
        <meta property="og:title" content="{{ $blog->nom }}">
        <meta property="og:description" content="{{ $blog->description ?? '' }}">
        <meta property="og:image" content="{{ $blog->photo }}">
        <meta property="og:type" content="product">
        <meta property="og:price:amount" content="{{ $blog->prix }} DT">

        <meta property="og:availability" content="{{ $blog->statut }}">

        <meta property="blog:availability" content="{{ $blog->statut }}">
        <meta name="robots" content="index, follow">
    @endsection
    <link rel="stylesheet" href="path/to/zoom.css">
<script src="path/to/zoom.js"></script>
</head>

<div id="popup-search-box">
    <div class="box-inner-wrap d-flex align-items-center">
        <form id="form" action="#" method="get" role="search">
            <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
        </form>
        <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
    </div>
</div>
<!-- Header area end -->

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
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Blog Details</h1>
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

    <!-- blog details area start -->
    <section class="section-space">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="blog__details-content">
                        <div class="blog__details-thumb mb-30">
                             <img src="/front/assets/imgs/blog-details/blog-details-first-img.png" alt="image not found" class="img-fluid">
                        </div>
                        <ul class="blog__details-meta mb-25">
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" fill="none">
                                <path d="M15.2222 17V15.2222C15.2222 14.2792 14.8476 13.3748 14.1808 12.708C13.514 12.0412 12.6097 11.6666 11.6667 11.6666H4.55556C3.61256 11.6666 2.70819 12.0412 2.0414 12.708C1.3746 13.3748 1 14.2792 1 15.2222V17" stroke="#4A5764" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.11024 8.11111C10.0739 8.11111 11.6658 6.51923 11.6658 4.55556C11.6658 2.59188 10.0739 1 8.11024 1C6.14656 1 4.55469 2.59188 4.55469 4.55556C4.55469 6.51923 6.14656 8.11111 8.11024 8.11111Z" stroke="#4A5764" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> By Tecoh</a></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                <path d="M13 2.50012H2.5C1.67157 2.50012 1 3.17169 1 4.00012V14.5001C1 15.3285 1.67157 16.0001 2.5 16.0001H13C13.8284 16.0001 14.5 15.3285 14.5 14.5001V4.00012C14.5 3.17169 13.8284 2.50012 13 2.50012Z" stroke="#4A5764" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.752 1V4" stroke="#4A5764" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.75 1V4" stroke="#4A5764" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1 6.99988H14.5" stroke="#4A5764" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 27 March 2023</li>
                            <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M14.9423 7.61112C14.9449 8.63769 14.7061 9.65036 14.2452 10.5667C13.6986 11.6647 12.8585 12.5882 11.8188 13.2339C10.7791 13.8795 9.58088 14.2217 8.35842 14.2222C7.33609 14.2249 6.32758 13.9851 5.41505 13.5222L1 15L2.47168 10.5667C2.01076 9.65036 1.7719 8.63769 1.77457 7.61112C1.77504 6.3836 2.11586 5.18046 2.75883 4.13644C3.40181 3.09243 4.32156 2.24879 5.41505 1.70002C6.32758 1.23719 7.33609 0.997346 8.35842 1.00002H8.7457C10.3602 1.08946 11.8851 1.77372 13.0284 2.9218C14.1718 4.06987 14.8532 5.60108 14.9423 7.22223V7.61112Z" stroke="#4A5764" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 3 Comments</a></li>
                        </ul>

                        
                        <p>UX design refers to the term “user experience design”, while UI stands for “user interface design”. Both elements are crucial to a product and work closely together. But despite their professional relationship, the roles themselves are quite different, referring to very different aspects of the product development process and the design discipline.</p>
                        
                        <p>Many UX designers, developers, and entrepreneurs take pride in how hard it was to solve hard challenges. I don’t. I hope to convince you not to either. I’m known for enjoying the process of solving impossible problems, but the way I do it is not obvious.</p>
                        
                        <blockquote>
                            <p>What I find remarkable is that this text has been the industry's standard dummy text ever since some printer in the 1500s took a galley.</p>
                            
                            <span>Douglas Lyphe</span>
                        </blockquote>
                        
                        <div class="media-group">
                            <div class="media">
                                <img src="/front/assets/imgs/blog-details/blog-details-second-middel-img.png" alt="image not found">
                            </div>
                        </div>
                        
                        <h4>Target goals examples for business</h4>

                        <p>Pellentesque dignissim malesuada varius et semper semper rutrum ad risus felis eros. Cursus libero viverra tempus netus diam vestibulum lorem tincidunt congue porta. Non ligula egestas commodo massa. Lorem non gravida risus felis rutrum.</p>

                        <div class="blog__details-bottom d-flex flex-column flex-md-row justify-content-md-between">
                            <div class="blog__details-bottom-tags_wapper d-flex align-items-center mb-sm-30 mb-xs-30">
                                <span>Tag:</span>
                                <div class="blog__details-bottom-tags">
                                    <a href="blog-details.html">Branding</a>
                                    <a href="blog-details.html">Web Design</a>
                                    <a href="blog-details.html">Creative</a>
                                </div>
                            </div>

                            <div class="share-social-media_wrapper">
                                <span>Share:</span>

                                <div class="share-social-media">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="13" viewBox="0 0 17 13" fill="none">
                                            <path d="M16.8235 0.00728525C16.0912 0.496661 15.2804 0.870955 14.4224 1.11575C13.9618 0.614052 13.3497 0.25846 12.6689 0.0970684C11.9881 -0.064323 11.2714 -0.023726 10.6157 0.213369C9.96004 0.450463 9.39704 0.872616 9.00287 1.42273C8.60869 1.97285 8.40236 2.62438 8.41177 3.28922V4.01371C7.0679 4.04672 5.73627 3.76435 4.53548 3.19174C3.33469 2.61913 2.30201 1.77405 1.52941 0.731774C1.52941 0.731774 -1.52941 7.25217 5.35294 10.1501C3.77805 11.1629 1.90194 11.6708 0 11.5991C6.88235 15.2216 15.2941 11.5991 15.2941 3.26749C15.2934 3.06568 15.2729 2.86438 15.2329 2.66616C16.0134 1.93696 16.5642 1.01629 16.8235 0.00728525Z" fill="white"/>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none">
                                            <path d="M9.35 0H6.8C5.67283 0 4.59183 0.447767 3.7948 1.2448C2.99777 2.04183 2.55 3.12283 2.55 4.25V6.8H0V10.2H2.55V17H5.95V10.2H8.5L9.35 6.8H5.95V4.25C5.95 4.02457 6.03955 3.80837 6.19896 3.64896C6.35837 3.48955 6.57457 3.4 6.8 3.4H9.35V0Z" fill="white"/>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.0513 4.73682C12.3075 4.73682 13.5124 5.23587 14.4007 6.1242C15.289 7.01252 15.7881 8.21735 15.7881 9.47363V14.9999H12.6302V9.47363C12.6302 9.05487 12.4638 8.65326 12.1677 8.35715C11.8716 8.06104 11.47 7.89469 11.0513 7.89469C10.6325 7.89469 10.2309 8.06104 9.93479 8.35715C9.63868 8.65326 9.47233 9.05487 9.47233 9.47363V14.9999H6.31445V9.47363C6.31445 8.21735 6.81351 7.01252 7.70183 6.1242C8.59016 5.23587 9.79498 4.73682 11.0513 4.73682Z" fill="white"/>
                                            <path d="M3.15787 5.52612H0V14.9997H3.15787V5.52612Z" fill="white"/>
                                            <path d="M1.57894 3.15787C2.45096 3.15787 3.15787 2.45096 3.15787 1.57894C3.15787 0.706914 2.45096 0 1.57894 0C0.706914 0 0 0.706914 0 1.57894C0 2.45096 0.706914 3.15787 1.57894 3.15787Z" fill="white"/>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                            <path d="M9.00757 0C4.03279 0 0 4.02609 0 8.99262C0 12.8043 2.37242 16.0608 5.7231 17.3707C5.64105 16.6605 5.57519 15.5647 5.75232 14.7878C5.91537 14.0843 6.80489 10.317 6.80489 10.317C6.80489 10.317 6.53832 9.77695 6.53832 8.98488C6.53832 7.73402 7.2648 6.80168 8.16911 6.80168C8.93996 6.80168 9.31112 7.3793 9.31112 8.06766C9.31112 8.83723 8.82199 9.99211 8.56211 11.0654C8.3473 11.9609 9.01426 12.6935 9.89639 12.6935C11.498 12.6935 12.7287 11.006 12.7287 8.57812C12.7287 6.4241 11.1796 4.92188 8.96285 4.92188C6.39816 4.92188 4.89273 6.83895 4.89273 8.82246C4.89273 9.59203 5.18959 10.4214 5.5597 10.8731C5.63471 10.961 5.64245 11.0426 5.61992 11.1312C5.55301 11.4124 5.39771 12.0266 5.36743 12.1528C5.33045 12.3156 5.23361 12.3521 5.06317 12.2713C3.9363 11.7457 3.23165 10.1099 3.23165 8.7852C3.23165 5.9502 5.29242 3.34547 9.1847 3.34547C12.3061 3.34547 14.737 5.56629 14.737 8.54156C14.737 11.5168 12.7801 14.1374 10.0665 14.1374C9.15442 14.1374 8.29412 13.6635 8.00571 13.101C8.00571 13.101 7.55356 14.8177 7.44228 15.2399C7.24261 16.0242 6.69326 17.0016 6.3228 17.601C7.16866 17.859 8.05889 18 8.99278 18C13.9676 18 18.0004 13.9739 18.0004 9.00738C18.0148 4.02609 13.9824 0 9.00757 0Z" fill="white"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="next-prev-post position-relative d-flex justify-content-between mt-60 mb-80">
                            <div class="line-border"></div>
                            <div class="prev-post post-wrap">
                                <a href="#" class="btn ">PREV POST</a>
                                <a href="#" class="post-title d-block">How Does Screen Work</a>
                            </div>
                            <div class="next-post post-wrap">
                                <a href="#" class="btn">NEXT POST</a>
                                <a href="#" class="post-title d-block">How Does Screen Work</a>
                            </div>
                        </div>
                    </div>

                    <div class="comment-widget mt-80 mt-xs-60">
                        <h4 class="mb-30">3 Comments:</h4>

                        <div class="comment-item d-flex align-items-start mb-30">
                            <div class="comment-item__img">
                                <img src="/front/assets/imgs/blog-details/comment-1.png" alt="comment">
                            </div>
                            <div class="comment-item__content">
                                <h6 class="name fs-16">Russell Sproutr</h6>
                                <span class="date">march 26,2024 at 10:47 pm</span>
                                <p class="body-2 mb-20 mt-15">Phasellus ac eleifend nunc. Aenean efficitur, augue a tristique mollis, nulla leo dictum nunc, viverra magna sapien ut dolor..</p>
                                <button>Reply</button>
                            </div>
                        </div>

                        <div class="comment-item d-flex align-items-start comment-item__reply mb-30">
                            <div class="comment-item__img">
                                <img src="/front/assets/imgs/blog-details/comment-2.png" alt="comment">
                            </div>
                            <div class="comment-item__content">
                                <h6 class="name fs-16">Fletch Skinner</h6>
                                <span class="date">march 26,2024 at 10:47 pm</span>
                                <p class="body-2 mb-20 mt-15">Phasellus ac eleifend nunc. Aenean efficitur, augue a tristique mollis, nulla leo dictum nunc, viverra magna sapien ut dolor..</p>
                                <button>Reply</button>
                            </div>
                        </div>

                        <div class="comment-item d-flex align-items-start mb-30">
                            <div class="comment-item__img">
                                <img src="/front/assets/imgs/blog-details/comment-3.png" alt="comment">
                            </div>
                            <div class="comment-item__content">
                                <h6 class="name fs-16">Samuel Serif</h6>
                                <span class="date">march 26,2024 at 10:47 pm</span>
                                <p class="body-2 mb-20 mt-15">Phasellus ac eleifend nunc. Aenean efficitur, augue a tristique mollis, nulla leo dictum nunc, viverra magna sapien ut dolor..</p>
                                <button>Reply</button>
                            </div>
                        </div>
                    </div>

                    <div class="live-comment-widget mt-80 mt-xs-60">
                        <h4>Leave a Comment</h4>
                        <p class="mb-30">Your email address will not be published. Required fields are marked <span>*</span></p>

                        <div class="live-comment-widget__form">
                            <div class="row">
                                <div class="col-6">
                                    <div class="live-comment-widget__input">
                                        <label for="name">Name *</label>
                                        <input name="name" id="name" type="text">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="live-comment-widget__input">
                                        <label for="email">Email *</label>
                                        <input name="email" id="email" type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="live-comment-widget__input">
                                        <label for="website">Website</label>
                                        <input name="text" id="website" type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="live-comment-widget__textarea">
                                        <label for="comment">Comment</label>
                                        <textarea name="textarea" id="comment" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="live-comment-widget__agree">
                                        <input style="" type="checkbox" class="form-check-input" id="agree">
                                        <label class="form-check-label" for="agree">Save my name, email, and website in this browser for the next time I comment.</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a href="contact.html" class="rr-btn mb-lg-60 mb-md-60 mb-sm-60 mb-xs-60">Post Comment <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 6H11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M6 1L11 6L6 11" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="sidebar">
                        <div class="sidebar__widget">
                            <h5 class="sidebar__widget-title">Search Here</h5>

                            <div class="sidebar__widget-search">
                                <div class="search__bar">
                                    <button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M7.22221 13.4444C10.6586 13.4444 13.4444 10.6586 13.4444 7.22221C13.4444 3.78578 10.6586 1 7.22221 1C3.78578 1 1 3.78578 1 7.22221C1 10.6586 3.78578 13.4444 7.22221 13.4444Z" stroke="#525257" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15.0005 15L11.6172 11.6167" stroke="#525257" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg></button>
                                    <input type="text" id="search" placeholder="Search">
                                </div>
                            </div>
                        </div>

                        <div class="sidebar__widget">
                            <h5 class="sidebar__widget-title sidebar__widget-title__have-bar">Catagory</h5>

                            <div class="sidebar__widget-category">
                                <a href="blog-details.html"><span><svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 5 5" fill="none">
                                    </svg> Product Design</span> <span>(02)</span>
                                </a>
                                <a href="blog-details.html"><span><svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 5 5" fill="none">
                                    </svg> Web Development</span> <span>(06)</span>
                                </a>
                                <a href="blog-details.html"><span><svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 5 5" fill="none">
                                    </svg> Mobile Solutions</span> <span>(05)</span>
                                </a>
                                <a href="blog-details.html"><span><svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 5 5" fill="none">
                                    </svg> Branding Design</span> <span>(09)</span>
                                </a>
                                <a href="blog-details.html"><span><svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 5 5" fill="none">
                                    </svg> Custom Solutions</span> <span>(04)</span>
                                </a>
                                <a href="blog-details.html"><span><svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 5 5" fill="none">
                                    </svg> Digital Marketing</span> <span>(07)</span>
                                </a>
                                
                            </div>
                        </div>

                        <div class="sidebar__widget">
                            <h5 class="sidebar__widget-title">Recent Post</h5>

                            <div class="sidebar-post__wrapper">
                                <div class="sidebar-post">
                                    <a href="blog-details.html" class="sidebar-post_thumb">
                                        <img src="/front/assets/imgs/blog-details/blog-details-side-bar-first-img.png" alt="post">
                                    </a>

                                    <div class="sidebar-post_content">
                                        <ul class="post-meta">
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15 8C15 11.864 11.864 15 8 15C4.136 15 1 11.864 1 8C1 4.136 4.136 1 8 1C11.864 1 15 4.136 15 8Z" stroke="#FF3D00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10.5962 10.2259L8.42623 8.93093C8.04823 8.70693 7.74023 8.16793 7.74023 7.72693V4.85693" stroke="#FF3D00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                24 April 2023
                                            </li>
                                        </ul>

                                        <a href="blog-details.html"><h3 class="title rr-fw-medium">Is Running Really Good for the Heart?</h3></a>
                                    </div>
                                </div>

                                <div class="sidebar-post">
                                    <a href="blog-details.html" class="sidebar-post_thumb">
                                        <img src="/front/assets/imgs/blog-details/blog-details-side-bar-second-img.png" alt="post">
                                    </a>

                                    <div class="sidebar-post_content">
                                        <ul class="post-meta">
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15 8C15 11.864 11.864 15 8 15C4.136 15 1 11.864 1 8C1 4.136 4.136 1 8 1C11.864 1 15 4.136 15 8Z" stroke="#FF3D00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10.5962 10.2259L8.42623 8.93093C8.04823 8.70693 7.74023 8.16793 7.74023 7.72693V4.85693" stroke="#FF3D00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                24 April 2023
                                            </li>
                                        </ul>

                                        <a href="blog-details.html"><h3 class="title rr-fw-medium">We are amongst the most qualified dental</h3></a>
                                    </div>
                                </div>

                                <div class="sidebar-post">
                                    <a href="blog-details.html" class="sidebar-post_thumb">
                                        <img src="/front/assets/imgs/blog-details/blog-details-side-bar-third-img.png" alt="post">
                                    </a>

                                    <div class="sidebar-post_content">
                                        <ul class="post-meta">
                                            <li>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15 8C15 11.864 11.864 15 8 15C4.136 15 1 11.864 1 8C1 4.136 4.136 1 8 1C11.864 1 15 4.136 15 8Z" stroke="#FF3D00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M10.5962 10.2259L8.42623 8.93093C8.04823 8.70693 7.74023 8.16793 7.74023 7.72693V4.85693" stroke="#FF3D00" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                24 April 2023
                                            </li>
                                        </ul>

                                        <a href="blog-details.html"><h3 class="title rr-fw-medium">Get the Exercise Tips for Limited Mobility</h3></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar__widget-button">
                            <h5 class="sidebar">Follow Us</h5>

                            <div class="sidebar-tags">
                                <div class="btn d-flex">
                                    <a href="blog-details.html"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="blog-details.html"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="blog-details.html"><i class="fa-brands fa-pinterest-p"></i></a>
                                    <a href="blog-details.html"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="blog-details.html"><i class="fa-brands fa-vimeo-v"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar__widget">
                            <h5 class="sidebar__widget-title">Tags</h5>

                            <div class="sidebar__widget-tags">
                                <div class="tags">
                                    <a href="blog-details.html">Branding</a>
                                    <a href="blog-details.html">UX Design</a>
                                    <a href="blog-details.html">Agency</a>
                                    <a href="blog-details.html">Company</a>
                                    <a href="blog-details.html">Web Design</a>
                                    <a href="blog-details.html">Creative</a>
                                    <a href="blog-details.html">Portfolio</a>
                                    <a href="blog-details.html">Illustration</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog details area end -->


    <!-- latest-newsletter area start -->
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





   </main>
@endsection