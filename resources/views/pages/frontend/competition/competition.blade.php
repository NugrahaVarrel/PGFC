@extends('layouts.new-app')
@section('title', 'Competition')

@section('content')

    <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
        <div class="uk-container uk-container-center">
            <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">
                <div class="uk-width-1-1 uk-row-first">
                    <div class="uk-panel">
                        <div class="uk-cover-background uk-position-relative head-match-wrap"
                            style="height: 590px; background-image: url('assets/images/head-bg-match.jpg');">
                            <img class="uk-invisible" src="/images/head-bg-match.jpg" alt="">
                            <div class="uk-position-cover uk-flex-center head-news-title">
                                <h1>
                                    Match List
                                </h1>
                                <div class="clear"></div>
                                <div class="uk-container uk-container-center">
                                    <div class="uk-grid no-marg">
                                        <div class="uk-width-6-10 va-single-next-match match-view-wrap">
                                            <div class="va-main-next-wrap">
                                                <div class="match-list-single">
                                                    <div class="match-list-item">
                                                        <div class="count">
                                                            <div id="countdown4">
                                                                <div class="counter_container"></div>
                                                            </div>

                                                            <script type="text/javascript">
                                                                var targetDate = {{ strtotime('2024-08-22') }}; // Change this to your target date in YYYY-MM-DD format
                                                            </script>
                                                            <div class="clearfix"></div>

                                                        </div>
                                                        <div class="clear"></div>
                                                        <div class="half right">
                                                            <div class="va-wrap">
                                                                <div class="team-name">
                                                                    SMAN 1 GRESIK
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="versus">VS</div>
                                                        <div class="half left">
                                                            <div class="va-wrap">
                                                                <div class="team-name">
                                                                    SMAN 2 LAMONGAN
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                        <div class="date">
                                                            <i class="uk-icon-calendar"></i>
                                                            Selasa, 22 Agustus 2023 | 15:00 WIB
                                                        </div>
                                                        <div class="clear"></div>
                                                        <div class="location">
                                                            <i class="uk-icon-map-marker"></i>
                                                            <address>
                                                                GOR Tri Dharma PT Petrokimia Gresik <br><br>
                                                            </address>
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
                </div>
            </section>
        </div>
    </div>

    <div class="uk-container uk-container-center alt">
        <ul class="uk-breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="uk-active"><span>Match list</span></li>
        </ul>
    </div>

    <div class="uk-container uk-container-center" style="margin-bottom: 80px">
        <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
            <div class="tm-main uk-width-1-1">
                <main id="tm-content" class="tm-content">
                    <div class="match-list-wrap">
                        <div class="match-list-item">
                            <div class="date">
                                <span>22</span>
                                Aug
                            </div>
                            <div class="team-name">
                                SMAN 1 KEBOMAS
                            </div>
                            <div class="team-score">
                                0
                            </div>
                            <div class="score-separator">:</div>
                            <div class="team-score">
                                0
                            </div>
                            <div class="team-name">
                                SMAN 2 MOJOKERTO
                            </div>
                            <div class="location">
                                <address>
                                    GOR Tri Dharma PT Petrokimia Gresik <br><br>
                                </address>
                            </div>
                            <div class="va-view-wrap">
                                <a class="view-article" href="">view</a>
                            </div>
                        </div>
                        <div class="match-list-item">
                            <div class="date">
                                <span>22</span>
                                Aug
                            </div>
                            <div class="team-name">
                                SMAN 1 KEBOMAS
                            </div>
                            <div class="team-score">
                                0
                            </div>
                            <div class="score-separator">:</div>
                            <div class="team-score">
                                0
                            </div>
                            <div class="team-name">
                                SMAN 2 MOJOKERTO
                            </div>
                            <div class="location">
                                <address>
                                    GOR Tri Dharma PT Petrokimia Gresik <br><br>
                                </address>
                            </div>
                            <div class="va-view-wrap">
                                <a class="view-article" href="">view</a>
                            </div>
                        </div>
                        <div class="match-list-item">
                            <div class="date">
                                <span>22</span>
                                Aug
                            </div>
                            <div class="team-name">
                                SMAN 1 KEBOMAS
                            </div>
                            <div class="team-score">
                                0
                            </div>
                            <div class="score-separator">:</div>
                            <div class="team-score">
                                0
                            </div>
                            <div class="team-name">
                                SMAN 2 MOJOKERTO
                            </div>
                            <div class="location">
                                <address>
                                    GOR Tri Dharma PT Petrokimia Gresik <br><br>
                                </address>
                            </div>
                            <div class="va-view-wrap">
                                <a class="view-article" href="">view</a>
                            </div>
                        </div>
                        <div class="match-list-item">
                            <div class="date">
                                <span>22</span>
                                Aug
                            </div>
                            <div class="team-name">
                                SMAN 1 KEBOMAS
                            </div>
                            <div class="team-score">
                                0
                            </div>
                            <div class="score-separator">:</div>
                            <div class="team-score">
                                0
                            </div>
                            <div class="team-name">
                                SMAN 2 MOJOKERTO
                            </div>
                            <div class="location">
                                <address>
                                    GOR Tri Dharma PT Petrokimia Gresik <br><br>
                                </address>
                            </div>
                            <div class="va-view-wrap">
                                <a class="view-article" href="">view</a>
                            </div>
                        </div>
                        <div class="match-list-item">
                            <div class="date">
                                <span>22</span>
                                Aug
                            </div>
                            <div class="team-name">
                                SMAN 1 KEBOMAS
                            </div>
                            <div class="team-score">
                                0
                            </div>
                            <div class="score-separator">:</div>
                            <div class="team-score">
                                0
                            </div>
                            <div class="team-name">
                                SMAN 2 MOJOKERTO
                            </div>
                            <div class="location">
                                <address>
                                    GOR Tri Dharma PT Petrokimia Gresik <br><br>
                                </address>
                            </div>
                            <div class="va-view-wrap">
                                <a class="view-article" href="">view</a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
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
    <!-- Place favicon.ico in tde root directory -->
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
    <!-- main js -->
    <script src="{{ url('frontend/js/main.js') }}"></script>
@endpush
