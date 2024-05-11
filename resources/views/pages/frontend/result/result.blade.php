@extends('layouts.new-app')
@section('title', 'Result')

@section('content')

    <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
        <div class="uk-container uk-container-center">
            <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">

                <div class="uk-width-1-1 uk-row-first rs-breadcrumbs">
                    <div class="uk-panel">
                        <div class="uk-cover-background uk-position-relative head-wrap"
                            style="height: 290px; background-image: url('frontend/images/breadcrumbs/point-table.jpg');">
                            <img class="uk-invisible" src="frontend/images/breadcrumbs/point-table.jpg" alt=""
                                height="290" width="1920">
                            <div class="uk-position-cover uk-flex uk-flex-center head-title" style="z-index: 1">
                                <h1>Result</h1>
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
            <li class="uk-active"><span>Result</span></li>
        </ul>
    </div>

    <div class="tm-bottom-b-box tm-full-width" style="margin-bottom: 20vh">
        <div class="uk-container uk-container-center">
            <section id="tm-bottom-b" class="tm-bottom-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">
                <div class="uk-width-1-1 uk-row-first">
                    <div class="uk-panel">
                        <div class="our-history-wrap">
                            <div class="our-history-title">
                                <h2>Gro<span>ups</span></h2>
                            </div>
                            <div class="our-history-top">
                                <div class="uk-container uk-container-center">
                                    @php
                                        $tabOrder = [
                                            'Group A',
                                            'Group B',
                                            'Group C',
                                            'Group D',
                                            'Group E',
                                            'Group F',
                                            'Group G',
                                            'Group H',
                                            '16 Besar',
                                            '8 Besar',
                                            'Semi Final',
                                            'Perebutan Juara 3 & 4',
                                            'Perebutan Juara 1 & 2',
                                        ];
                                    @endphp

                                    <ul class="point-menu text-center" style="margin-top: 20px">
                                        {{-- Urutan Tab --}}
                                        @php
                                            $tabOrder = [
                                                'Group A',
                                                'Group B',
                                                'Group C',
                                                'Group D',
                                                'Group E',
                                                'Group F',
                                                'Group G',
                                                'Group H',
                                                '16 Besar',
                                                '8 Besar',
                                                'Semi Final',
                                                'Perebutan Juara 3 & 4',
                                                'Perebutan Juara 1 & 2',
                                            ];
                                        @endphp

                                        @foreach ($tabOrder as $tab)
                                            <li class="{{ $loop->first ? 'active' : '' }}"><a data-toggle="tab"
                                                    href="#{{ \Illuminate\Support\Str::slug($tab) }}">{{ $tab }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="uk-container uk-container-center" style="margin-top: 70px; margin-bottom: 10px">
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


    <!-- Point Table Section Start -->
    {{-- <div class="rs-result sec-spacer">
        <div class="container">
            <ul class="point-menu text-center">
                @php
                    $tabOrder = [
                        'Group A',
                        'Group B',
                        'Group C',
                        'Group D',
                        'Group E',
                        'Group F',
                        'Group G',
                        'Group H',
                        '16 Besar',
                        '8 Besar',
                        'Semi Final',
                        'Perebutan Juara 3 & 4',
                        'Perebutan Juara 1 & 2',
                    ];
                @endphp

                @foreach ($tabOrder as $tab)
                    <li class="{{ $loop->first ? 'active' : '' }}"><a data-toggle="tab"
                            href="#{{ \Illuminate\Support\Str::slug($tab) }}">{{ $tab }}</a></li>
                @endforeach
            </ul>

            <div class="tab-content team-result">
                <div class="overly-bg"></div>

                @foreach ($tabOrder as $tab)
                    <div class="uk-container uk-container-center"
                        id="{{ \Illuminate\Support\Str::slug($tab) }} style="margin-bottom: 80px">
                        <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                            <div class="tm-main uk-width-1-1">
                                <main id="tm-content" class="tm-content">
                                    <div class="match-list-wrap">
                                        @foreach ($results->where('round', $tab) as $match)
                                            <div class="match-list-item">
                                                <div class="date">
                                                    <span>{{ \Carbon\Carbon::parse($match->match_datey)->setTimezone('Asia/Jakarta')->isoFormat('DD') }}</span>
                                                    {{ \Carbon\Carbon::parse($match->match_datey)->setTimezone('Asia/Jakarta')->isoFormat('MM') }}
                                                </div>
                                                <div class="team-name">
                                                    {{ $match->team1_name }}
                                                </div>
                                                <div class="team-score">
                                                    {{ $match->team1_score }}
                                                </div>
                                                <div class="score-separator">:</div>
                                                <div class="team-score">
                                                    {{ $match->team2_score }}
                                                </div>
                                                <div class="team-name">
                                                    {{ $match->team2_name }}
                                                </div>
                                                <div class="location">
                                                    <address>
                                                        {{ $match->match_venue }} <br><br>
                                                    </address>
                                                </div>
                                                <div class="va-view-wrap">
                                                    <a class="view-article"
                                                        href="{{ route('pages.result-single', ['result_id' => $match->id]) }}">View
                                                        Statistics</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    <!-- Point Table Section End -->

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
