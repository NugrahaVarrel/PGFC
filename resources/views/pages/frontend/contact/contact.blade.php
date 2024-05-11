@extends('layouts.new-app')
@section('title', 'Contact')

@section('content')

    <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
        <div class="uk-container uk-container-center">
            <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">

                <div class="uk-width-1-1 uk-row-first rs-breadcrumbs">
                    <div class="uk-panel">
                        <div class="uk-cover-background uk-position-relative head-wrap"
                            style="height: 290px; background-image: url('frontend/images/breadcrumbs/contact.jpg');">
                            <img class="uk-invisible" src="frontend/images/breadcrumbs/contact.jpg" alt=""
                                height="290" width="1920">
                            <div class="uk-position-cover uk-flex uk-flex-center head-title" style="z-index: 1">
                                <h1>Contact</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="uk-container uk-container-center alt">
        <ul class="uk-breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="uk-active"><span>Contact</span></li>
        </ul>
    </div>



    <div class="tm-bottom-a-box  ">
        <div class="uk-container uk-container-center">
            <section id="tm-bottom-a" class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">
                <div class="uk-width-1-1 uk-row-first">
                    <div class="uk-panel">
                        <div class="contact-page">
                            <div class="uk-grid">
                                <div class="uk-width-1-1">
                                    <div class="contact-title">
                                        <h2>Contact Info</h2>
                                    </div>
                                    <div class="contact-text">Hubungi kami</div>
                                </div>
                                <div class="uk-width-1-1">
                                    <div class="contact-socials-wrap">
                                        <ul class="contact-socials">
                                            <li><a href="https://www.facebook.com/PetrokimiaGresikOfficial" target="_blank"><i class="uk-icon-facebook"></i></a></li>
                                            <li><a href="https://twitter.com/petrogresik?lang=id" target="_blank"><i class="uk-icon-twitter"></i></a></li>
                                            <li><a href="https://www.youtube.com/@PGFCTV" target="_blank"><i class="uk-icon-youtube"></i></a></li>
                                            <li><a href="https://www.instagram.com/petrofutsal/" target="_blank"><i class="uk-icon-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-grid" data-uk-grid-match="{target:'.contact-enquiries'}">
                                <div class="uk-width-medium-1-3 uk-panel">
                                    <div style="min-height: 139px;" class="contact-enquiries">
                                        <div class="title">ADDRESS</div>
                                        <div class="location"><i class="uk-icon-map-marker"></i>Jl. A Yani Gresik</div>
                                    </div>
                                </div>
                                <div class="uk-width-medium-1-3 uk-panel">
                                    <div style="min-height: 139px;" class="contact-enquiries">
                                        <div class="title">PHONE NUMBER</div>
                                        <div class="phone"><i class="uk-icon-phone"></i><a
                                                href="tel:031-3981811">031-3981811 3982200</a></div>
                                        <div class="phone"><i class="uk-icon-phone"></i><a href="tel:3982100">3982100</a>
                                        </div>
                                        <div class="phone"><i class="uk-icon-phone"></i><a href="tel:3982200">3982200</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-medium-1-3 uk-panel">
                                    <div style="min-height: 139px;" class="contact-enquiries">
                                        <div class="title">EMAIL ADDRESS</div>
                                        <div class="mail"><i class="uk-icon-envelope"></i><a
                                                href="mailto:pgfc@petrokimia-gresik.com">pgfc@petrokimia-gresik.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="tm-bottom-b-box tm-full-width" style="margin-bottom: 30vh">
        <div class="uk-container uk-container-center">
            <section id="tm-bottom-b" class="tm-bottom-b uk-grid uk-grid-collapse"
                data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                <div class="uk-width-1-1">
                    <div class="uk-panel">
                        <div class="map-wrap">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.7203261895856!2d112.63686207499869!3d-7.158297592846252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd80066ea63ec7f%3A0x94595f4ed5d14702!2sGOR%20Tridharma%20Petrokimia%20Gresik!5e0!3m2!1sid!2sid!4v1698894743720!5m2!1sid!2sid"
                                width="100%" height="100%" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="tm-top-e-box tm-full-width" style="background: url(assets/images/tr.png);">
        <div class="uk-container uk-container-center">
            <section id="tm-top-e" class="tm-top-e uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">

                <div class="uk-width-1-1 uk-width-large-1-2">
                    <div class="uk-panel">
                        <div class="va-about-wrap clearfix uk-cover-background uk-position-relative">
                            <div class="va-about-text">
                                <div class="title">Our Sponsors</div>
                                <p>There's currently no sponsors yet...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection

@push('prepend-style')
    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="frontend/images/logo-pgfc.png">
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ url('frontend/css/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ url('frontend/css/animate.css') }}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ url('frontend/css/rsmenu-main.css') }}">
    <!-- rsmenu transitions css -->
    <link rel="stylesheet" href="{{ url('frontend/css/rsmenu-transitions.css') }}">
    <!-- hover-min css -->
    <link rel="stylesheet" href="{{ url('frontend/css/hover-min.css') }}">
    <!-- magnific-popup css -->
    <link rel="stylesheet" href="{{ url('frontend/css/magnific-popup.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.css') }}">
    <!-- Slick css -->
    <link rel="stylesheet" href="{{ url('frontend/css/slick.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ url('style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ url('frontend/css/responsive.css') }}">
    <!-- modernizr js -->
    <script src="{{ url('frontend/js/modernizr-2.8.3.min.js') }}"></script>
@endpush

@push('addon-script')
    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="frontend/js/jquery.min.js"></script>
    <!-- Menu js -->
    <script src="{{ url('frontend/js/jquery.min.js') }}"></script>
    <!-- Menu js -->
    <script src="{{ url('frontend/js/rsmenu-main.js') }}"></script>
    <!-- jquery-ui js -->
    <script src="{{ url('frontend/js/jquery-ui.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ url('frontend/js/bootstrap.min.js') }}"></script>
    <!-- meanmenu js -->
    <script src="{{ url('frontend/js/jquery.meanmenu.js') }}"></script>
    <!-- wow js -->
    <script src="{{ url('frontend/js/wow.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ url('frontend/js/slick.min.js') }}"></script>
    <!-- masonry js -->
    <script src="{{ url('frontend/js/masonry.js') }}"></script>
    <!-- magnific-popup js -->
    <!-- owl.carousel js -->
    <script src="{{ url('frontend/js/owl.carousel.min.js') }}"></script>
    <!-- magnific-popup js -->
    <script src="{{ url('frontend/js/jquery.magnific-popup.js') }}"></script>
    <!-- jquery.counterup js -->
    <script src="{{ url('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('frontend/js/waypoints.min.js') }}"></script>
    <!-- moogle map js -->
    {{-- <script src="{{ url('https://maps.googleapis.com/maps/api/js?key=AIzaSyAgC6ZapXdUzFdeQOFhdm_wucwlDMMQ8CQ')}}"></script> --}}
    <!-- contact popup form js -->
    <script src="{{ url('frontend/js/contact.form.js') }}"></script>
    <!-- main js -->
    <script src="{{ url('frontend/js/main.js') }}"></script>
@endpush
