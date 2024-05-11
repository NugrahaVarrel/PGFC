@extends('layouts.new-app')
@section('title', 'Klasemen')

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
                                <h1>Klasemen</h1>
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
            <li class="uk-active"><span>Klasemen</span></li>
        </ul>
    </div>


    <!-- Klasmen Section Start -->
    <div class="rs-point-table sec-spacer">
        <div class="container">
            <ul class="point-menu">
                @foreach ($klasemens->groupBy('group') as $group => $klasemenGroup)
                    <li class="{{ $loop->first ? 'active' : '' }}"><a data-toggle="tab" href="#{{ $group }}">Group
                            {{ $group }}</a></li>
                @endforeach
            </ul>

            <div class="tab-content">
                @foreach ($klasemens->groupBy('group') as $group => $klasemenGroup)
                    <div id="{{ $group }}" class="tab-pane fade {{ $loop->first ? 'in active' : '' }}">
                        <table>
                            <tr>
                                <td>Peringkat</td>
                                <td class="team-name">Nama Tim</td>
                                <td>Main</td>
                                <td>Menang</td>
                                <td>Seri</td>
                                <td>Kalah</td>
                                <td>GM</td>
                                <td>GK</td>
                                <td>GD</td>
                                <td>Point</td>
                            </tr>
                            <!-- Set ulang peringkat untuk grup baru -->
                            @php
                                $currentRank = 0;
                            @endphp
                            @foreach ($klasemenGroup as $klasemen)
                                <tr>
                                    <td>{{ ++$currentRank }}</td>
                                    <td class="team-name">{{ $klasemen->team_name }}</td>
                                    <td>{{ $klasemen->played }}</td>
                                    <td>{{ $klasemen->won }}</td>
                                    <td>{{ $klasemen->drawn }}</td>
                                    <td>{{ $klasemen->lost }}</td>
                                    <td>{{ $klasemen->goals_for }}</td>
                                    <td>{{ $klasemen->goals_against }}</td>
                                    <td>{{ $klasemen->goal_difference }}</td>
                                    <td>{{ $klasemen->points }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Klasmen Section End -->

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
