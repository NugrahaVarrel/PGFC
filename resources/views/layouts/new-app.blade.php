<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
    {{-- <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"> --}}
    <link href="{{ asset('assets/css/akslider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/donate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" type="text/css" />
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js'></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    @stack('meta-seo')

    @stack('prepend-style')
    @stack('addon-style')
</head>

<body class="tm-isblog">

    <div class="over-wrap">
        <div class="toolbar-wrap" style="background-color: rgba(0, 0, 0, 0.411)">
            <div class="uk-container uk-container-center">
                <div class="tm-toolbar uk-clearfix uk-hidden-small">
                    <div class="uk-float-right">
                        <div class="uk-panel">
                            <div class="social-top">
                                <a href="https://www.facebook.com/PetrokimiaGresikOfficial" target="_blank"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                                <a href="https://twitter.com/petrogresik?lang=id" target="_blank"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                <a href="https://www.youtube.com/@PGFCTV" target="_blank"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                                <a href="https://www.instagram.com/petrofutsal/" target="_blank"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                                @guest
                                <a href="login" ><span class="uk-icon-small uk-icon-hover" style="font-family: Roboto;"><i class="fa fa-sign-in"></i></span></a>
                                <a href="register" ><span class="uk-icon-small uk-icon-hover" style="font-family: Roboto"><i class="fa fa-user-plus"></i></span></a>
                                @endguest
                                @auth
                                <a href="{{ route('logout') }}" ><span class="uk-icon-small uk-icon-hover" style="font-family: Roboto"><i class="fa fa-sign-out"></i></span></a>
                                @endauth
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="tm-menu-box">
            <div style="height: 70px;" class="uk-sticky-placeholder">
                <nav style="margin: 0px;" class="tm-navbar uk-navbar" data-uk-sticky="">
                    <div class="uk-container uk-container-center">
                        <a class="tm-logo uk-float-left" href="#">
                            <img src="{{ asset('assets/images/logo-pgfc.png') }}" alt="logo" title="logo" style="margin-bottom: 20px; width: 40px; height: 60px; transform:none;"> <span>PG<em>FC</em></span>
                        </a>

                        <ul class="uk-navbar-nav uk-hidden-small">
                            <li class="{{ Request::is('/') ? 'uk-active' : '' }}" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="/">Home</a>
                            </li>
                            <li class="{{ Request::is('about') ? 'uk-active' : '' }}" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="about">About</a></li>
                            <li class="{{ Request::is('competition') ? 'uk-active' : '' }}" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="competition">Competition</a>
                            </li>
                            <li class="{{ Request::is('klasemen') ? 'uk-active' : '' }}" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="klasemen">Klasemen</a>
                            </li>
                            <li class="{{ Request::is('result') ? 'uk-active' : '' }}"><a href="result">Result</a>
                            </li>
                            <li class="{{ Request::is('blog') ? 'uk-active' : '' }}"><a href="blog">Blog</a>
                            </li>
                            <li class="{{ Request::is('contact') ? 'uk-active' : '' }}"><a href="contact">Contact</a>
                            </li>
                        </ul>
                        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                    </div>
                </nav>
            </div>

        </div>

        @yield('content')
    </div>

    <!-- Sponsorhip-->
    {{-- @include('includes.frontend.sponsorship') --}}

    {{-- footer --}}
    @include('includes.frontend.footer')

    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/uikit.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/SimpleCounter.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/components/grid.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/components/slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/components/slideshow.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/components/slideset.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/components/sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/components/lightbox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/js/theme.js') }}"></script>
    <script type="text/javascript">
        new SimpleCounter("countdown4", targetDate, {
        'continue': 0,
        format: '{D} {H} {M} {S}',
        lang: {
            d: {
                single: 'day',
                plural: 'days'
            }, //days
            h: {
                single: 'hr',
                plural: 'hrs'
            }, //hours
            m: {
                single: 'min',
                plural: 'min'
            }, //minutes
            s: {
                single: 'sec',
                plural: 'sec'
            } //seconds
        },
        formats: {
            full: "<span class='countdown_number' style='color:  '>{number} </span> <span class='countdown_word' style='color:  '>{word}</span> <span class='countdown_separator'>:</span>", //Format for full units representation
            shrt: "<span class='countdown_number' style='color:  '>{number} </span>" //Format for short unit representation
        }
    });
    </script>

    @stack('prepend-script')
    @stack('addon-script')
</body>
</html>
