@extends('layouts.layout7')
@php
    $title = 'Blog Details';
    $subtitle = 'Blog Details';
@endphp
@section('title', ' Blog Details || eventflow || eventflow Laravel Template')
@section('content')

<x-strickyHeader/>
<x-sidebar/>

        <!--Blog Details Start-->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__left">
                            <div class="blog-details__img-1">
                                <img src="assets/images/blog/blog-details-img-1.jpg" alt="">
                                <div class="blog-details__date">
                                    <p>22 jan</p>
                                </div>
                            </div>
                            <div class="blog-details__content">
                                <h3 class="blog-details__title-1">Celebrate Life Celebrate with Us</h3>
                                <p class="blog-details__text-1">Real estate is a lucrative industry that involves the
                                    buying selling and renting properties It encompasses residential commercial and
                                    industrial designsin properties. Real estate agents play a crucial</p>
                                <p class="blog-details__text-2">Real estate is a lucrative industry that involves the
                                    buying, selling, and wasi renting properties. It encom residential, commercial, and
                                    industrial properties is here Real estate is a lucrative industry that involves the
                                    buying, selling, and wasi renting properties. It encompasses residential, commercial
                                </p>
                                <div class="blog-details__quote-box">
                                    <div class="blog-details__quote-icon">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <h3 class="blog-details__quote-box-client-name">Mark wood</h3>
                                    <p class="blog-details__quote-box-sub-title">CEO</p>
                                    <p class="blog-details__quote-box-text">Real estate is a lucrative industry that
                                        involves the buying selling and renting pr encompasses residential commercial
                                        and was industrial properties. Real estate agents play a crucial role in
                                        facilitating at transactions and helping commercial Real estate is a lucrative
                                    </p>
                                </div>
                                <h3 class="blog-details__title-2">Your Event Our Expertise</h3>
                                <p class="blog-details__text-3">Aliquam eros justo, posuere loborti viverra laoreet
                                    matti ullamcorper design posuere viverra .Aliquam an eros justo, posuere lobortis,
                                    viverra laoreet augues mattis fermentum ullamcorper </p>
                                <div class="blog-details__points-box">
                                    <ul class="blog-details__points list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-double-angle"></span>
                                            </div>
                                            <p>Creating Memories, One Event at a Time</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-double-angle"></span>
                                            </div>
                                            <p>Celebrate in Style, Celebrate with Class</p>
                                        </li>
                                    </ul>
                                    <ul class="blog-details__points list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-double-angle"></span>
                                            </div>
                                            <p>Where Events Come to Life</p>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-double-angle"></span>
                                            </div>
                                            <p>Making Your Event Dreams Come True</p>
                                        </li>
                                    </ul>
                                </div>
                                <p class="blog-details__text-4">A personal portfolio is a collection of work samples,
                                    projects, and achievements that showca individual skills and expertise in a
                                    particular field. It serves as a professional showcase to attract</p>
                                <div class="blog-details__img-box">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="blog-details__img-box-img-1">
                                                <img src="assets/images/blog/blog-details-img-box-img-1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="blog-details__img-box-img-1">
                                                <img src="assets/images/blog/blog-details-img-box-img-2.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-details__prev-and-next">
                                    <div class="blog-details__prev-box">
                                        <a href="#" class="blog-details__prev-arrow"><span
                                                class="icon-arrow-left"></span></a>
                                        <a href="#" class="blog-details__prev">Previous<br> post</a>
                                    </div>
                                    <div class="blog-details__next-box">
                                        <a href="#" class="blog-details__next">Next<br> post</a>
                                        <a href="#" class="blog-details__next-arrow"><span
                                                class="icon-arrow-right"></span></a>
                                    </div>
                                </div>
                                <div class="blog-details__keyword-and-social">
                                    <div class="blog-details__keyword-box">
                                        <span>Keyword:</span>
                                        <div class="blog-details__keyword">
                                            <a href="#">Event Prodigy</a>
                                            <a href="#">Event Management</a>
                                        </div>
                                    </div>
                                    <div class="blog-details__social">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-fi"></span></a>
                                        <a href="#"><span class="icon-instagram"></span></a>
                                    </div>
                                </div>
                                <div class="blog-details__comment-box">
                                    <h3 class="blog-details__comment-title">1 Comment</h3>
                                    <p class="blog-details__comment-date">April 16, 2024</p>
                                    <h4 class="blog-details__comment-client-name">Stanio lainto</h4>
                                    <p class="blog-details__comment-text">Ished fact that a reader will be distrol acted
                                        bioii the.ished factio that a reader will be distrol acted the aa laoreet
                                        Aliquam fact that a repli reader will be distrol acted Aliquam eros justo.</p>
                                    <div class="blog-details__comment-btn-box">
                                        <a href="#" class="blog-details__comment-btn thm-btn">reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-one">
                                <h3 class="comment-one__title">Leave a comment</h3>
                                <p class="comment-one__text">By using form u agree with the message sorage, you can
                                    contact us directly now By using form am agree By using form u agree with the
                                    message sorage, you can contact us directly </p>
                                <form class="contact-form-validated comment-one__form" action="assets/inc/sendemail.php"
                                    method="post" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-one__input-box">
                                                <input type="text" name="name" placeholder="Name" required="">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="comment-one__input-box">
                                                <input type="email" name="email" placeholder="Email" required="">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="comment-one__input-box text-message-box">
                                                <textarea name="message" placeholder="Message here.."></textarea>
                                            </div>
                                            <div class="comment-one__btn-box">
                                                <button type="submit" class="thm-btn comment-one__btn">Sent Message<span
                                                        class="icon-arrow-right"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <h3 class="sidebar__title">Search</h3>
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search....">
                                    <button type="submit"><i class="icon-loupe"></i></button>
                                </form>
                            </div>
                            <div class="sidebar__single sidebar__all-category">
                                <h3 class="sidebar__title">Catagory</h3>
                                <ul class="sidebar__all-category-list list-unstyled">
                                    <li>
                                        <a href="{{ route('blog-details') }}"><i class="icon-double-angle"></i>Event Prodigy
                                            <span>(02)</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}"><i class="icon-double-angle"></i>Stellar Events
                                            Co<span>(04)</span></a>
                                    </li>
                                    <li class="active">
                                        <a href="{{ route('blog-details') }}"><i class="icon-double-angle"></i>Elite Event
                                            Management<span>(01)</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}"><i class="icon-double-angle"></i>Infinite
                                            Occasions<span>(06)</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog-details') }}"><i class="icon-double-angle"></i>Dream Event
                                            Planners<span>(03)</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Recent Post</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-content">
                                            <p class="sidebar__post-date"><span class="icon-calendar"></span>Jan 10,2024
                                            </p>
                                            <h3>
                                                <a href="{{ route('blog-details') }}">Unforgettable Mome Celebrate Unforgettable
                                                    Events</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-content">
                                            <p class="sidebar__post-date"><span class="icon-calendar"></span>Jun 20,2024
                                            </p>
                                            <h3>
                                                <a href="{{ route('blog-details') }}">Aliquam an eros justo, posuere lobortis,
                                                    viverra laoreet</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-content">
                                            <p class="sidebar__post-date"><span class="icon-calendar"></span>Jan 15,2024
                                            </p>
                                            <h3>
                                                <a href="{{ route('blog-details') }}">Aliquam eros justo, posuere loborti viverra
                                                    laoreet</a>
                                            </h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags</h3>
                                <div class="sidebar__tags-list">
                                    <a href="#">All Project</a>
                                    <a href="#">Prodigy</a>
                                    <a href="#">Stellar Events</a>
                                    <a href="#">Occasions</a>
                                    <a href="#">Spectacular</a>
                                    <a href="#">Moments</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Details End-->



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