@extends('layouts.new-app')
@section('title', 'Home')

@section('content')
    <div class="tm-top-a-box tm-full-width">
        <div class="uk-container uk-container-center">
            <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">
                <div class="uk-width-1-1">
                    <div class="uk-panel">
                        <div class="akslider-module ">
                            <div class="uk-slidenav-position"
                                data-uk-slideshow="{height: 'auto', animation: 'swipe', duration: '500', autoplay: false, autoplayInterval: '7000', videoautoplay: true, videomute: true, kenburns: false}">
                                <ul class="uk-slideshow uk-overlay-active">
                                    <li aria-hidden="false" class="uk-height-viewport uk-active">
                                        <div style="background-image: url(assets/images/full-slider/slide1.jpg);"
                                            class="uk-cover-background uk-position-cover"></div><img
                                            style="width: 100%; height: auto; opacity: 0;" class="uk-invisible"
                                            src="images/main-slider-img.jpg" alt="">
                                        <div class="uk-position-cover uk-flex-middle">
                                            <div class="uk-container uk-container-center uk-position-cover">
                                                <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                    <h3>Life is <span>about timing</span></h3>
                                                    <div class="promo-sub">Just play. <span>Have fun.</span> Enjoy the game
                                                    </div>
                                                    <a href="#" class="read-more">Read More<i
                                                            class="uk-icon-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li aria-hidden="true" class="uk-height-viewport">
                                        <div style="background-image: url(assets/images/full-slider/slide2.jpg);"
                                            class="uk-cover-background uk-position-cover"></div><img
                                            style="width: 100%; height: auto; opacity: 0;" class="uk-invisible"
                                            src="images/main-slider-img1.jpg" alt="">
                                        <div class="uk-position-cover uk-flex-middle">
                                            <div class="uk-container uk-container-center uk-position-cover">
                                                <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                    <h3>Just play.<span>Have fun.</span></h3>
                                                    <div class="promo-sub">Life is <span>about timing</span> Enjoy the game
                                                    </div>
                                                    <a href="#" class="read-more">Read More<i
                                                            class="uk-icon-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li aria-hidden="true" class="uk-height-viewport">
                                        <div style="background-image: url(assets/images/full-slider/slide3.jpg);"
                                            class="uk-cover-background uk-position-cover"></div><img
                                            style="width: 100%; height: auto; opacity: 0;" class="uk-invisible"
                                            src="images/main-slider-img2.jpg" alt="">
                                        <div class="uk-position-cover uk-flex-middle">
                                            <div class="uk-container uk-container-center uk-position-cover">
                                                <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                    <h3>Life is <span>about timing</span></h3>
                                                    <div class="promo-sub">Just play. <span>Have fun.</span> Enjoy the game
                                                    </div>
                                                    <a href="#" class="read-more">Read More<i
                                                            class="uk-icon-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous"
                                    data-uk-slideshow-item="previous"></a>
                                <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next"
                                    data-uk-slideshow-item="next"></a>
                                <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-text-center">
                                    <li class="uk-active" data-uk-slideshow-item="0"><a href="/">0</a>
                                    </li>
                                    <li data-uk-slideshow-item="1"><a href="/">1</a>
                                    </li>
                                    <li data-uk-slideshow-item="2"><a href="/">2</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <div class="tm-top-b-box tm-full-width  ">
        <div class="uk-container uk-container-center">
            <section id="tm-top-b" class="tm-top-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">

                <div class="uk-width-1-1">
                    <div class="uk-panel">

                        <div class="va-latest-wrap">
                            <div class="uk-container uk-container-center">
                                <div class="va-latest-top">
                                    <h3>Latest <span>Results</span></h3>
                                    <div class="tournament">
                                        {{-- <address>Cambridgeshire UK<br><br></address> </div> --}}
                                        @if ($lastMatch)
                                            <div class="date">
                                                {{ \Carbon\Carbon::parse($lastMatch->match_date)->setTimezone('Asia/Jakarta')->isoFormat('MMMM DD, YYYY | HH:mm [WIB]') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="va-latest-middle uk-flex uk-flex-middle">
                                <div class="uk-container uk-container-center">
                                    @if ($lastMatch)
                                        <div class="uk-grid uk-flex uk-flex-middle">
                                            <div class="uk-width-2-12 center">
                                                <a href="results.html">
                                                    <img src="{{ asset('storage/' . $lastMatch->team1_logo) }}"
                                                        class="img-polaroid" alt="" title="">
                                                </a>
                                            </div>
                                            <div class="uk-width-3-12 name uk-vertical-align">
                                                <div class="wrap uk-vertical-align-middle">
                                                    {{ $lastMatch->team1_name }} </div>
                                            </div>
                                            <div class="uk-width-2-12 score">
                                                <div class="title">score</div>
                                                <div class="table">
                                                    <div class="left"> {{ $lastMatch->team1_score }}</div>
                                                    <div class="right"> {{ $lastMatch->team2_score }}</div>
                                                    <div class="uk-clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="uk-width-3-12 name alt uk-vertical-align">
                                                <div class="wrap uk-vertical-align-middle">
                                                    {{ $lastMatch->team2_name }} </div>
                                            </div>
                                            <div class="uk-width-2-12 center">
                                                <a href="results.html">
                                                    <img src="{{ asset('storage/' . $lastMatch->team2_logo) }}"
                                                        class="img-polaroid" alt="" title="">
                                                </a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="uk-grid uk-flex uk-flex-middle uk-container-center text"
                                            style="text-align: center;">
                                            <div class="uk-container uk-container-center text">
                                                <p>No recent match result.</p>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="uk-container uk-container-center">
                                <div class="va-latest-bottom">
                                    <div class="uk-grid">
                                        <div class="uk-width-8-12 uk-container-center text">

                                        </div>
                                    </div>

                                    <div class="uk-grid">
                                        <div class="uk-width-1-1">
                                            <div class="btn-wrap uk-container-center">
                                                <a class="read-more" href="result">More Info</a>
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


    <div class="tm-top-c-box tm-full-width  home-about">
        <div class="uk-container uk-container-center">
            <section id="tm-top-c" class="tm-top-c uk-grid uk-grid-collapse"
                style="background-image: url(assets/images/full-slider/slide4.jpg);"
                data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                <div class="uk-width-1-1 uk-width-large-1-2">
                    <div class="uk-panel">
                        <div class="va-about-wrap clearfix uk-cover-background uk-position-relative">
                            <div class="va-about-text">
                                <div class="title"><span>About Team</span>
                                </div>
                                <p style="color: white;">PGFC adalah singkatan dari Petrokimia Gresik Futsal Championship
                                    merupakan sebuah turnamen futsal antar SMA/SMK sederajat di kabupaten Gresik yang
                                    diselengarakan oleh PT. Petrokimia Gresik. </p>
                                <p style="color: white;">PGFC bermula pada tahun 2014 dengan nama PGFC (Petrogres Student
                                    Futsal Championship) yang diikuti 8 sekolah dengan SMAN 1 Manyar sebagai juaranya,
                                    kemudian pada tahun 2015 diikuti oleh 16 sekolah, dengan SMAN 1 Manyar kembali menjadi
                                    Juaranya. </p>
                                <a class="read-more" href="about">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="uk-width-1-1 uk-width-large-1-2">
                    <div style="min-height: 497px;" class="uk-panel">
                        <div class="trainers-module tm-trainers-slider ">
                            <div class="trainer-wrapper">
                                <div data-uk-slideset="{default: 1, animation: 'fade', duration: 400}">
                                    <div class="trainer-top">
                                        <div class="trainers-btn">
                                            <a href="/"
                                                class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous"
                                                data-uk-slideset-item="previous"></a>
                                            <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next"
                                                data-uk-slideset-item="next"></a>
                                        </div>
                                        <h3>Top Players</h3>
                                    </div>
                                    <ul class="uk-grid uk-slideset uk-grid-width-1-1">
                                        <li class="uk-active" style="">
                                            <div class="img-wrap"><img src="frontend/images/team/top-player1.jpeg"
                                                    alt=""
                                                    style="width: 268px; height: 248px; object-fit: contain;">
                                            </div>
                                            <div class="name">M Ilham <span>Noer</span>
                                            </div>
                                        </li>
                                        <li style="display: none;">
                                            <div class="img-wrap"><img src="frontend/images/team/top-player2.jpeg"
                                                    alt=""
                                                    style="width: 268px; height: 248px; object-fit: contain;">
                                            </div>
                                            <div class="name">Achmad Riza <span>Afifuddin</span>
                                            </div>
                                        </li>
                                        <li style="display: none;">
                                            <div class="img-wrap"><img src="frontend/images/team/top-player3.jpeg"
                                                    alt=""
                                                    style="width: 268px; height: 248px; object-fit: contain;">
                                            </div>
                                            <div class="name">Cahya <span>Ramadan</span>
                                            </div>
                                        </li>
                                        <li style="display: none;">
                                            <div class="img-wrap"><img src="frontend/images/team/top-player4.jpeg"
                                                    alt=""
                                                    style="width: 268px; height: 248px; object-fit: contain;">
                                            </div>
                                            <div class="name">M Rasya <span>Alfanorizkillah</span>
                                            </div>
                                        </li>
                                        <li style="display: none;">
                                            <div class="img-wrap"><img src="frontend/images/team/top-player5.jpeg"
                                                    alt=""
                                                    style="width: 268px; height: 248px; object-fit: contain;">
                                            </div>
                                            <div class="name">Muhammad <span>Irgi Maulana</span>
                                            </div>
                                        </li>
                                        <li style="display: none;">
                                            <div class="img-wrap"><img src="frontend/images/team/top-player6.jpeg"
                                                    alt=""
                                                    style="width: 268px; height: 248px; object-fit: contain;">
                                            </div>
                                            <div class="name">Abdur <span>Rashid</span>
                                            </div>
                                        </li>
                                        <li style="display: none;">
                                            <div class="img-wrap"><img src="frontend/images/team/top-player7.jpeg"
                                                    alt=""
                                                    style="width: 268px; height: 248px; object-fit: contain;">
                                            </div>
                                            <div class="name">Moch.Iqbal <span>Purnama</span>
                                            </div>
                                        </li>
                                        <li style="display: none;">
                                            <div class="img-wrap"><img src="frontend/images/team/top-player8.jpeg"
                                                    alt=""
                                                    style="width: 268px; height: 248px; object-fit: contain;">
                                            </div>
                                            <div class="name">Mahardyecka <span>Trias Purnama</span>
                                            </div>
                                        </li>
                                        <li style="display: none;">
                                            <div class="img-wrap"><img src="frontend/images/team/top-player9.jpeg"
                                                    alt=""
                                                    style="width: 268px; height: 248px; object-fit: contain;">
                                            </div>
                                            <div class="name">Ardhen <span>Ilham Dwiswara</span>
                                            </div>
                                        </li>
                                        <li style="display: none;">
                                            <div class="img-wrap"><img src="frontend/images/team/top-player10.jpeg"
                                                    alt=""
                                                    style="width: 268px; height: 248px; object-fit: contain;">
                                            </div>
                                            <div class="name">Johan <span>Adi Rangga</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="tm-top-e-box tm-full-width va-main-next-match">
        <div class="uk-container uk-container-center">
            <section id="tm-top-e" class="tm-top-e uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">

                <div class="uk-width-2-1">
                    <div class="uk-panel">
                        <div class="uk-container uk-container-center">
                            <div class="uk-grid uk-grid-collapse">
                                <div class="uk-width-medium-1-1 uk-width-small-1-1 va-single-next-match">
                                    <div class="va-main-next-wrap">
                                        <div class="main-next-match-title"><em>Next <span>Match</span></em>
                                        </div>
                                        <div class="match-list-single">
                                            <div class="match-list-item">
                                                <div class="count">

                                                    <div id="countdown4">
                                                        <div class="counter_container">
                                                        </div>
                                                    </div>

                                                    <script type="text/javascript">
                                                        var targetDate = {{ strtotime('2024-08-22') }}; // Change this to your target date in YYYY-MM-DD format
                                                    </script>

                                                    <div class="clearfix"></div>

                                                </div>
                                                <div class="clear"></div>
                                                <div class="logo">
                                                    {{-- <a href="match-single.html">
                                                            <img src="assets/images/team-ava.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a> --}}
                                                </div>
                                                <div class="team-name">SMAN 1 GRESIK </div>
                                                <div class="versus">VS</div>
                                                <div class="team-name">SMAN 2 LAMONGAN </div>
                                                <div class="logo">
                                                    {{-- <a href="match-single.html">
                                                            <img src="assets/images/team-ava1.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                        </a> --}}
                                                </div>
                                                <div class="clear"></div>
                                                <div class="date">Selasa, 22 Agustus 2023 | 15:00 WIB </div>
                                                <div class="clear"></div>
                                                <div class="location">
                                                    <address>GOR Tri Dharma PT Petrokimia Gresik<br><br></address>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-medium-1-1 uk-width-small-1-1 va-list-next-match">
                                    <div class="match-list-wrap">

                                        <div class="match-list-item alt">
                                            <div class="date">Agustus 22, 2024 </div>
                                            <div class="wrapper" style="width:100%; min-height:45px; display: flex; flex-direction: row; justify-content: space-between; padding: 0 30px 0 30px;">
                                                <div class="team-name" style="display:flex; align-items:center">SMAN 1 KEBOMAS </div>
                                                <div class="versus" style="display:flex; align-items:center">VS</div>
                                                <div class="team-name" style="display:flex; align-items:center">SMAN 2 MOJOKERTO </div>
                                            </div>
                                        </div>

                                        <div class="match-list-item alt">
                                            <div class="date">Agustus 22, 2024 </div>
                                            <div class="wrapper" style="width:100%; min-height:45px; display: flex; flex-direction: row; justify-content: space-between; padding: 0 30px 0 30px;">
                                                <div class="team-name" style="display:flex; align-items:center">SMAN 1 KEBOMAS </div>
                                                <div class="versus" style="display:flex; align-items:center">VS</div>
                                                <div class="team-name" style="display:flex; align-items:center">SMAN 2 MOJOKERTO </div>
                                            </div>
                                        </div>

                                        <div class="match-list-item alt">
                                            <div class="date">Agustus 22, 2024 </div>
                                            <div class="wrapper" style="width:100%; min-height:45px; display: flex; flex-direction: row; justify-content: space-between; padding: 0 30px 0 30px;">
                                                <div class="team-name" style="display:flex; align-items:center">SMAN 1 KEBOMAS </div>
                                                <div class="versus" style="display:flex; align-items:center">VS</div>
                                                <div class="team-name" style="display:flex; align-items:center">SMAN 2 MOJOKERTO </div>
                                            </div>
                                        </div>

                                        <div class="match-list-item alt">
                                            <div class="date">Agustus 22, 2024 </div>
                                            <div class="wrapper" style="width:100%; min-height:45px; display: flex; flex-direction: row; justify-content: space-between; padding: 0 30px 0 30px;">
                                                <div class="team-name" style="display:flex; align-items:center">SMAN 1 KEBOMAS </div>
                                                <div class="versus" style="display:flex; align-items:center">VS</div>
                                                <div class="team-name" style="display:flex; align-items:center">SMAN 2 MOJOKERTO </div>
                                            </div>
                                        </div>

                                        <div class="match-list-item alt">
                                            <div class="date">Agustus 22, 2024 </div>
                                            <div class="wrapper" style="width:100%; min-height:45px; display: flex; flex-direction: row; justify-content: space-between; padding: 0 30px 0 30px;">
                                                <div class="team-name" style="display:flex; align-items:center">SMAN 1 KEBOMAS </div>
                                                <div class="versus" style="display:flex; align-items:center">VS</div>
                                                <div class="team-name" style="display:flex; align-items:center">SMAN 2 MOJOKERTO </div>
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

    <div class="tm-top-f-box tm-full-width va-main-our-news" style="padding-top: 30px;">
        <div class="uk-container uk-container-center">
            <section id="tm-top-f" class="tm-top-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">
                <div class="uk-width-1-1">
                    <div class="uk-panel">
                        <div class="uk-container uk-container-center">
                            <div class="uk-grid uk-grid-collapse" data-uk-grid-match=""
                                style="height: 280px; margin-bottom: 70px;">
                                <div class="uk-width-1-1">
                                    <div class="our-news-title">
                                        <h3>Our <span>News</span></h3>
                                        <p style="text-align: center">There's currently no news</p>
                                    </div>
                                    {{-- <div class="our-news-text">Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet,
                                            <br> consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat. </div> --}}
                                </div>

                                {{-- <article class="uk-width-large-1-2 uk-width-medium-1-1 uk-width-small-1-1 our-news-article" data-uk-grid-match="" style="min-height: 280px">
                                        <div class="img-wrap uk-cover-background uk-position-relative" style="background-image: url(assets/images/853d071dfa2f869fbd2a70dbcb3a8f5e.jpg); min-height: 280px;">


                                            <a href="news-single.html"></a>
                                            <img class="uk-invisible" src="images/853d071dfa2f869fbd2a70dbcb3a8f5e.jpg" alt="">

                                        </div>
                                        <div style="min-height: 280px;" class="info">
                                            <div class="date">
                                                Nov 20, 2015 </div>
                                            <div class="name">
                                                <h4>
                                                    <a href="news-single.html">Nullam enim ante, volutpat non viverra eget </a>	
                                                </h4>
                                            </div>
                                            <div class="text">
                                                <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus.</p>
                                                <div class="read-more"><a href="news-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </div>

                                    </article>


                                    <article class="uk-width-large-1-2 uk-width-medium-1-1 uk-width-small-1-1 our-news-article" data-uk-grid-match="">
                                        <div class="img-wrap uk-cover-background uk-position-relative" style="background-image: url(assets/images/534579b3c373c09398691a46025fe5e6.jpg); min-height: 280px;">


                                            <a href="news-single.html"></a>
                                            <img class="uk-invisible" src="images/534579b3c373c09398691a46025fe5e6.jpg" alt="">

                                        </div>
                                        <div style="min-height: 280px;" class="info">
                                            <div class="date">
                                                Nov 20, 2015 </div>
                                            <div class="name">
                                                <h4>
                                                    <a href="news-single.html">Cum sociis natoque penatibus et magnis dis parturient</a>		
                                                </h4>
                                            </div>
                                            <div class="text">
                                                <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus.</p>
                                                <div class="read-more"><a href="news-single.html">Read More</a>
                                                </div>
                                            </div>
                                        </div>

                                    </article> --}}

                            </div>
                        </div>
                        {{-- <div class="all-news-btn"><a href="news.html"><span>All News</span></a>
                            </div> --}}

                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="tm-top-g-box tm-full-width  " >
        <div class="uk-container uk-container-center">
            <section id="tm-top-g" class="tm-top-g uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">
                <div class="uk-width-1-1">
                    <div class="uk-panel">
                        <div class="gallery-title">
                            <div class="uk-container uk-container-center tt-gallery-top-main" >
                                <div class="uk-grid" data-uk-grid-match="">
                                    <div class="uk-width-3-10 title" style="color: white">Gallery</div>
                                    {{-- <div class="uk-width-7-10 text">Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat. </div> --}}
                                </div>
                            </div>
                        </div>

                        <div id="boundary">
                            <div class="uk-width-1-1" style="margin-top: 30px; margin-bottom: 30px;">
                                <p style="text-align: center;">Gallery is currently empty</p>
                            </div>

                            {{-- <div class="uk-grid uk-grid-collapse grid" data-uk-grid-match="">
                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item article-slider tt_c26e2589e25045ad516b5bc37d18523a ">
                                        <div class="uk-slidenav-position" data-uk-slideshow="{height:300}">
                                            <ul class="uk-slideshow">
                                                <li class="uk-active" aria-hidden="false">
                                                    <div style="background-image: url(images/1448838000_1662651f7f781a887707a2836033aa63.jpg);" class="uk-cover-background uk-position-cover"></div>
                                                    <img style="width: 100%; height: auto; opacity: 0;" class="uk-responsive-height" src="images/1448838000_1662651f7f781a887707a2836033aa63.jpg" alt="">
                                                    <div class="titles">
                                                        <div class="sub-title">
                                                            Donec vel orci sed leo semper viverra </div>
                                                    </div>
                                                </li>
                                                <li aria-hidden="true">
                                                    <div style="background-image: url(images/1448838000_7e2a4fc5579be1e525f7b338af8bcc4e.jpg);" class="uk-cover-background uk-position-cover"></div>
                                                    <img style="width: 100%; height: auto; opacity: 0;" class="uk-responsive-height" src="images/1448838000_7e2a4fc5579be1e525f7b338af8bcc4e.jpg" alt="">
                                                    <div class="titles">
                                                        <div class="sub-title">
                                                            Donec vel orci sed leo semper viverra </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="article-slider-btn">
                                                <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                                <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_c26e2589e25045ad516b5bc37d18523a ">
                                        <div class="gallery-album">
                                            <a href="images/03f1869954e6e557b8ac56b508030a3b.jpg" data-uk-lightbox="{group:'my-group'}" class="img-0">
                                                <img src="images/03f1869954e6e557b8ac56b508030a3b.jpg" alt="">
                                            </a>
                                            <a href="images/6a987145d42263cbfc9724ee737b1d60.jpg" data-uk-lightbox="{group:'my-group'}" class="img-1">
                                                <img src="images/6a987145d42263cbfc9724ee737b1d60.jpg" alt="">
                                            </a>
                                            <div class="titles">
                                                <div class="title">Douglas Payne </div>
                                                <div class="sub-title">Volleyball </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_6081becaf04f5a1455407d73e09bca13 ">
                                        <div class="gallery-album">
                                            <a href="images/8cc1994dde069571bfe5edf1e7822185.jpg" data-uk-lightbox="{group:'my-group1'}" class="img-0">
                                                <img src="images/8cc1994dde069571bfe5edf1e7822185.jpg" alt="">
                                            </a>
                                            <a href="images/133dc45d6c6a6ee8ace3fd6c18f0c79e.jpg" data-uk-lightbox="{group:'my-group1'}" class="img-1">
                                                <img src="images/133dc45d6c6a6ee8ace3fd6c18f0c79e.jpg" alt="">
                                            </a>
                                            <div class="titles">
                                                <div class="title">Douglas Payne </div>
                                                <div class="sub-title">Hockey </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_6081becaf04f5a1455407d73e09bca13 ">
                                        <div class="gallery-album">
                                            <a href="images/62448a01125cebccfa3512491a345da9.jpg" data-uk-lightbox="{group:'my-group2'}" class="img-0">
                                                <img src="images/62448a01125cebccfa3512491a345da9.jpg" alt="">
                                            </a>
                                            <a href="images/14f0c92ade7d754a98d2b6ddd4fe560a.jpg" data-uk-lightbox="{group:'my-group2'}" class="img-1">
                                                <img src="images/14f0c92ade7d754a98d2b6ddd4fe560a.jpg" alt="">
                                            </a>
                                            <div class="titles">
                                                <div class="title">Douglas Payne </div>
                                                <div class="sub-title">Hockey </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_c71a18083d9e74b4a5c5d8d9a17d68d0 ">
                                        <div class="gallery-album">
                                            <a href="images/c9e61645f3f740197afa7fb17bf3d3ad.jpg" data-uk-lightbox="{group:'my-group3'}" class="img-0">
                                                <img src="images/c9e61645f3f740197afa7fb17bf3d3ad.jpg" alt="">
                                            </a>
                                            <a href="images/a46d465cb53412b43c73d9c793083875.jpg" data-uk-lightbox="{group:'my-group3'}" class="img-1">
                                                <img src="images/a46d465cb53412b43c73d9c793083875.jpg" alt="">
                                            </a>
                                            <div class="titles">
                                                <div class="title">Douglas Payne </div>
                                                <div class="sub-title">Basketball </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_c71a18083d9e74b4a5c5d8d9a17d68d0 ">
                                        <div class="gallery-album">
                                            <a href="images/d5d9d0e4068673aee603250d1eb43af8.jpg" data-uk-lightbox="{group:'my-group4'}" class="img-0">
                                                <img src="images/d5d9d0e4068673aee603250d1eb43af8.jpg" alt="">
                                            </a>
                                            <a href="images/6479eff8244e3eeb793efa29559f45f7.png" data-uk-lightbox="{group:'my-group4'}" class="img-1">
                                                <img src="images/6479eff8244e3eeb793efa29559f45f7.png" alt="">
                                            </a>
                                            <div class="titles">
                                                <div class="title">Douglas Payne </div>
                                                <div class="sub-title">Basketball </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_449a5f6d01d5f416810d04b4df596b6a tt_c71a18083d9e74b4a5c5d8d9a17d68d0 tt_ea9d8d12fefde9e2f9c4631a76504ce7 ">
                                        <div class="gallery-album">
                                            <a href="images/49633121e88e2125a7069937885d5163.jpg" data-uk-lightbox="{group:'my-group5'}" class="img-0">
                                                <img src="images/49633121e88e2125a7069937885d5163.jpg" alt="">
                                            </a>
                                            <a href="images/4510067e63319389d8587e2cb12d4346.jpg" data-uk-lightbox="{group:'my-group5'}" class="img-1">
                                                <img src="images/4510067e63319389d8587e2cb12d4346.jpg" alt="">
                                            </a>
                                            <div class="titles">
                                                <div class="title">Douglas Payne </div>
                                                <div class="sub-title">Douglas Payne </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_c26e2589e25045ad516b5bc37d18523a ">
                                        <div class="gallery-album">
                                            <a href="images/fb04791e435ada34da98c5ca40642149.jpg" data-uk-lightbox="{group:'my-group6'}" class="img-0">
                                                <img src="images/fb04791e435ada34da98c5ca40642149.jpg" alt="">
                                            </a>
                                            <a href="images/20e17d247276908ce9c879c785afad72.jpg" data-uk-lightbox="{group:'my-group6'}" class="img-1">
                                                <img src="images/20e17d247276908ce9c879c785afad72.jpg" alt="">
                                            </a>
                                            <div class="titles">
                                                <div class="title">Douglas Payne </div>
                                                <div class="sub-title">Douglas Payne </div>
                                            </div>
                                        </div>
                                    </div>

                                </div> --}}
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="tm-top-e-box tm-full-width" style="background: url(assets/images/tr.png) 50% 0 green;">
        <div class="uk-container uk-container-center">
            <section id="tm-top-e" class="tm-top-e uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">

                <div class="uk-width-1-1" style="text-align: center">
                    <div class="uk-panel">
                        <div class="va-about-wrap clearfix uk-cover-background uk-position-relative">
                            <div class="va-about-text">
                                <div class="title"><span>Testimonials</span>
                                </div>
                                <p style="color: white;">There's currently no any testimonial yet...</p>
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

    <div id="offcanvas" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <ul class="uk-nav uk-nav-offcanvas">
                <li class="uk-parent uk-active"><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li class="uk-parent"><a href="#">Pages</a>
                    <ul class="uk-nav-sub">
                        <li><a href="players.html">Players</a>
                        </li>
                        <li><a href="gallery.html">Gallery</a>
                        </li>
                    </ul>
                </li>
                <li class="uk-parent"><a href="match-list.html">Match</a>
                    <ul class="uk-nav-sub">
                        <li><a href="results.html">Results</a>
                        </li>
                    </ul>
                </li>
                <li><a href="news.html">News</a>
                </li>
                <li><a href="category.html">Shop</a>
                </li>
                <li><a href="contact.html">Contact</a>
                </li>
            </ul>
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
    <link rel="stylesheet" href="{{ url('frontend/css/time-circles.css') }}">
    <!-- Slick css -->
    <link rel="stylesheet" href="{{ url('frontend/css/slick.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ url('style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ url('frontend/css/responsive.css') }}">
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
    <script src="{{ url('frontend/js/time-circle.js') }}"></script>
    <!-- magnific-popup js -->
    <script src="{{ url('frontend/js/jquery.magnific-popup.js') }}"></script>
    <!-- main js -->
    <script src="{{ url('frontend/js/main.js') }}"></script>
@endpush
