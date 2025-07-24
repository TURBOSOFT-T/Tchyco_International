@extends('front.fixe')
@section('titre', 'Accueil')
@section('body')


    <main>

        @php
            $config = DB::table('configs')->first();
            $service = DB::table('services')->get();
            $produit = DB::table('produits')->get();
        @endphp





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
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Our Services</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="index.html">Home</a></span></li>
                                    <li class="active"><span>Services</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- service area start -->
    <section class="latest-service__area pt-120 pb-90 p-relative overflow-hidden latest-service-bg">
        <div class="container p-relative">
            <div class="latest-service__all-shape">
                <div class="latest-service__right-shape">
                    <img class="upDown" src="/front/assets/imgs/service/right-shape.svg" alt="img not found">
                </div>
                <div class="latest-service__bg-shape">
                    <img class="upDown" src="/front/assets/imgs/service/service-bg-shape.png" alt="img not found">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="latest-service__title-box mb-40 text-center">
                        <div class="latest-service__title-box-subtitle wow fadeInLeft animated" data-wow-delay=".3s">
                            <h6>Our Main Services</h6>
                        </div>
                        <div class="latest-service__title-box-title wow fadeInLeft animated" data-wow-delay=".4s">
                            <h2>Professional Digital Printing</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInLeft animated" data-wow-delay=".4s">
                        <div class="latest-service__item-icon">
                            <img src="/front/assets/imgs/service/service1.svg" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Top Quality Prints</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>Mi donec risus commodo auctor phasellus adipiscing. Faucibus magna cursus sed sodales amet. Nunc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInLeft animated" data-wow-delay=".4s">
                        <div class="latest-service__item-icon">
                            <img src="/front/assets/imgs/service/service2.svg" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Mix and match colors</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>Mi donec risus commodo auctor phasellus adipiscing. Faucibus magna cursus sed sodales amet. Nunc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInLeft animated" data-wow-delay=".4s">
                        <div class="latest-service__item-icon">
                            <img src="/front/assets/imgs/service/service3.svg" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Shipping worldwide</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>Mi donec risus commodo auctor phasellus adipiscing. Faucibus magna cursus sed sodales amet. Nunc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInRight animated" data-wow-delay=".4s">
                        <div class="latest-service__item-icon service-4">
                            <img src="/front/assets/imgs/service/service4.svg" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Offset Printing</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>Mi donec risus commodo auctor phasellus adipiscing. Faucibus magna cursus sed sodales amet. Nunc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInRight animated" data-wow-delay=".4s">
                        <div class="latest-service__item-icon">
                            <img src="/front/assets/imgs/service/service5.svg" alt="img not found">
                        </div>
                        <div class="latest-service__item-title">
                            <a href="service-details.html"><h4>Quality Guarantee</h4></a>
                        </div>
                        <div class="latest-service__item-text">
                            <p>Mi donec risus commodo auctor phasellus adipiscing. Faucibus magna cursus sed sodales amet. Nunc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="latest-service__item text-center wow fadeInRight animated" data-wow-delay=".4s">
                        <div class="latest-service__item-icon">
                            <img src="/front/assets/imgs/service/service6.svg" alt="img not found">
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
    <!-- service area end -->

    <!-- Brand area start -->
    <section class="main-brand__area">
        <div class="brand__area section-space">
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

    <!-- latest-cta2__area start -->
    <div class="latest-cta2__area section-space p-relative overflow-hidden " data-background="/front/assets/imgs/cta/home-2/cta2-bg-img.jpg">
        <div class="container overflow-hidden position-relative z-index-1">
            <div class="row">
                <div class="col-xl-12">
                    <div class="latest-cta2__content text-center">
                        <h2 class="latest-cta2__content-title">Do you have an emergency design service?</h2>
                        <p class="latest-cta2__content-description mb-40 text-white opacity">Need any kind printing & design service, Contact us.</p>
                        <div class="latest-cta2__content-btn">
                            <a href="tel:978645241" class="rr-btn btn-white btn-1"><img src="/front/assets/imgs/cta/home-2/call.png" alt="img not found"> +978 645 241</a>
                            <a href="service.html" class="rr-btn btn-white active">Request A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- latest-cta2__area end -->

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
                                        <a class="card-link" data-bs-toggle="collapse" data-bs-target="#faq-1">
                                            Appropriate For Your Specific Business
                                        </a>
                                    </div>
                                    <div id="faq-1" class="collapse" data-bs-parent="#faq">
                                        <div class="card-body">
                                            <p>The other hand we denounce with righteou indg ation and dislike men who are so beguiled and demorali ed by the of pleasure of the moment. Dislike men who are so beguiled demoraliz worlds.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft animated" data-wow-delay=".3s">
                                    <div class="card-header">
                                        <a class="card-link" data-bs-toggle="collapse" data-bs-target="#faq-2">
                                            Design & Development Troubleshooting
                                        </a>
                                    </div>
                                    <div id="faq-2" class="collapse" data-bs-parent="#faq">
                                        <div class="card-body">
                                            <p>The other hand we denounce with righteou indg ation and dislike men who are so beguiled and demorali ed by the of pleasure of the moment. Dislike men who are so beguiled demoraliz worlds.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft animated" data-wow-delay=".4s">
                                    <div class="card-header">
                                        <a class="card-link" data-bs-toggle="collapse" data-bs-target="#faq-3">
                                            Online Support & Action
                                        </a>
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

    

    <!-- latest-newsletter area end -->
    




    </main>


@endsection