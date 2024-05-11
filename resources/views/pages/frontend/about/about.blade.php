@extends('layouts.new-app')
@section('title', 'PGFC')

@section('content')

    <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
        <div class="uk-container uk-container-center">
            <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">

                <div class="uk-width-1-1 uk-row-first">
                    <div class="uk-panel">
                        <div class="uk-cover-background uk-position-relative head-wrap"
                            style="height: 290px; background-image: url('assets/images/head-bg.jpg');">
                            <img class="uk-invisible" src="images/head-bg.jpg" alt="" height="290" width="1920">
                            <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                <h1>About</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="uk-container uk-container-center alt">
        <ul class="uk-breadcrumb">
            <li><a href="/">Home</a>
            </li>
            <li class="uk-active"><span>About</span>
            </li>
        </ul>
    </div>

    <div class="tm-bottom-a-box  ">
        <div class="uk-container uk-container-center">
            <section id="tm-bottom-a" class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">

                <div class="uk-width-1-1 uk-row-first">
                    <div class="uk-panel">
                        <div class="about-team-page-top-wrap">
                            <div class="uk-grid">
                                <div class="uk-width-large-5-10 uk-width-small-1-1 left-part">
                                    <div class="top-title">
                                        <h2>About <span>pgfc</span></h2>
                                    </div>
                                    <p class="sub-title">PGFC adalah singkatan dari Petrokimia Gresik Futsal Championship merupakan sebuah
                                        turnamen futsal antar SMA/SMK sederajat di kabupaten Gresik yang diselengarakan oleh PT.
                                        Petrokimia Gresik. </p>
                                    <p>PGFC bermula pada tahun 2014 dengan nama PGFC (Petrogres Student
                                        Futsal Championship) yang diikuti 8 sekolah dengan SMAN 1 Manyar sebagai juaranya,
                                        kemudian pada tahun 2015 diikuti oleh 16 sekolah, dengan SMAN 1 Manyar kembali menjadi
                                        Juaranya. Dan pada tahun 2016 berganti nama menjadi PGFC (Petrokimia Gresik Futsal
                                        Championship).</p>
                                </div>
                                <div class="uk-width-large-5-10 uk-width-small-1-1">
                                    <div class="rs-breadcrumbs top-banner uk-cover-background uk-position-relative"
                                        style="height: 420px; background-image: url('frontend/images/full-slider/slide4.jpg'); ">
                                        <img class="uk-invisible" src="assets/images/about-team-banner.jpg" alt="" style="z-index: 1">
                                        <div class="uk-position-cover uk-flex uk-flex-center uk-flex-middle inner" style="z-index: 1">
                                            “It’s not whether you get knocked
                                            <br> down; it’s whether you get up.”
                                            <div class="name">Vince Lombardi</div>
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

    <div class="tm-bottom-b-box tm-full-width  ">
        <div class="uk-container uk-container-center">
            <section id="tm-bottom-b" class="tm-bottom-b uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">

                <div class="uk-width-1-1 uk-row-first">
                    <div class="uk-panel">
                        <div class="our-history-wrap">
                            <div class="our-history-title">
                                <h2>Time<span>Line</span></h2>
                            </div>
                            <div class="our-history-top">
                                <div class="uk-container uk-container-center">
                                    <div class="uk-grid">
                                        <!-- This is the container of the toggling elements -->
                                        <ul class="our-history-timeline" data-uk-switcher="{connect:'#our-history'}">
                                            <li class="uk-active" aria-expanded="true"><a href="/">2014</a>
                                            </li>
                                            <li aria-expanded="false"><a href="/">2015</a>
                                            </li>
                                            <li aria-expanded="false"><a href="/">2016</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="uk-container uk-container-center">
                                <div class="uk-grid">
                                    <!-- This is the container of the content items -->
                                    <ul id="our-history" class="uk-switcher uk-container uk-container-center">
                                        <li aria-hidden="false" class="uk-grid uk-active">
                                            <div class="uk-width-medium-4-10">
                                                <h3 class="history-title">Maecenas <span>dapibus</span></h3>
                                                <!-- This is the container of the toggling elements -->
                                                <ul class="tabs-switch-top" data-uk-switcher="{connect:'#tab-switch'}">
                                                    <li class="uk-active" aria-expanded="true"><a href="/">Lorem</a>
                                                    </li>
                                                    <li aria-expanded="false"><a href="/">Ipsum</a>
                                                    </li>
                                                    <li aria-expanded="false"><a href="/">Dolor</a>
                                                    </li>
                                                </ul>

                                                <!-- This is the container of the content items -->
                                                <ul id="tab-switch" class="uk-switcher tabs-switch-bottom">
                                                    <li class="uk-active" aria-hidden="false">
                                                        <p>Lorem nibh eu urna posuere laoreet. Sed luctus dignissim aliquet.
                                                            Ut nec nisl porttitor, ornare turpis quis, accumsan dolor.</p>
                                                        <ul>
                                                            <li>Nunc commodo ipsum ac mi;</li>
                                                            <li>Curabitur bibendum odio eu orci;</li>
                                                            <li>Morbi tincidunt lacus a pulvinar;</li>
                                                        </ul>
                                                    </li>
                                                    <li aria-hidden="true">
                                                        <p>Ipsum nibh eu urna posuere laoreet. Sed luctus dignissim aliquet.
                                                            Ut nec nisl porttitor, ornare turpis quis, accumsan dolor.</p>
                                                        <ul>
                                                            <li>Nunc commodo ipsum ac mi;</li>
                                                            <li>Curabitur bibendum odio eu orci;</li>
                                                            <li>Morbi tincidunt lacus a pulvinar;</li>
                                                        </ul>
                                                    </li>
                                                    <li aria-hidden="true">
                                                        <p>In eu nibh eu urna posuere laoreet. Sed luctus dignissim aliquet.
                                                            Ut nec nisl porttitor, ornare turpis quis, accumsan dolor.</p>
                                                        <ul>
                                                            <li>Nunc commodo ipsum ac mi;</li>
                                                            <li>Curabitur bibendum odio eu orci;</li>
                                                            <li>Morbi tincidunt lacus a pulvinar;</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="uk-width-medium-4-10">
                                                <h3 class="history-title">Praesent <span>dictum</span></h3>
                                                <div class="uk-accordion" data-uk-accordion="">

                                                    <h4 class="uk-accordion-title uk-active">Nunc et diam a nunc venenatis
                                                        fermentum <span class="arrow"><i
                                                                class="uk-icon-arrow-right"></i></span></h4>
                                                    <div aria-expanded="true" data-wrapper="true" role="list"
                                                        style="height: auto; position: relative;">
                                                        <div class="uk-accordion-content uk-active">Phasellus sagittis
                                                            venenatis suscipit. Donec vehicula aliquam neque. Aenean
                                                            lobortis tellus ut tortor ornare, eu pharetra magna faucibus.
                                                        </div>
                                                    </div>

                                                    <h4 class="uk-accordion-title">Nulla quis est pretium, commodo tortor
                                                        ac<span class="arrow"><i class="uk-icon-arrow-right"></i></span>
                                                    </h4>
                                                    <div aria-expanded="false" data-wrapper="true" role="list"
                                                        style="overflow:hidden;height:0;position:relative;">
                                                        <div class="uk-accordion-content">Phasellus sagittis venenatis
                                                            suscipit. Donec vehicula aliquam neque. Aenean lobortis tellus
                                                            ut tortor ornare, eu pharetra magna faucibus.</div>
                                                    </div>

                                                    <h4 class="uk-accordion-title">Vestibulum a arcu vitae dui faucibus
                                                        euismod<span class="arrow"><i
                                                                class="uk-icon-arrow-right"></i></span></h4>
                                                    <div aria-expanded="false" data-wrapper="true" role="list"
                                                        style="overflow:hidden;height:0;position:relative;">
                                                        <div class="uk-accordion-content">Phasellus sagittis venenatis
                                                            suscipit. Donec vehicula aliquam neque. Aenean lobortis tellus
                                                            ut tortor ornare, eu pharetra magna faucibus.</div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="uk-width-medium-2-10">
                                                <h3 class="history-title">Statistic</h3>
                                                <table class="stat-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Games</td>
                                                            <td>8</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Goals</td>
                                                            <td>15</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Awards</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Violations</td>
                                                            <td>7</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </li>
                                        <li aria-hidden="true" class="uk-grid">
                                            <div class="uk-width-medium-4-10 uk-width-small-1-1">
                                                <h3 class="history-title">Praesent <span>dictum</span></h3>
                                                <!-- This is the container of the toggling elements -->
                                                <ul class="tabs-switch-top" data-uk-switcher="{connect:'#tab-switch1'}">
                                                    <li class="uk-active" aria-expanded="true"><a
                                                            href="/">Lorem</a>
                                                    </li>
                                                    <li aria-expanded="false"><a href="/">Ipsum</a>
                                                    </li>
                                                    <li aria-expanded="false"><a href="/">Dolor</a>
                                                    </li>
                                                </ul>

                                                <!-- This is the container of the content items -->
                                                <ul id="tab-switch1" class="uk-switcher tabs-switch-bottom">
                                                    <li class="uk-active" aria-hidden="false">
                                                        <p>Lorem nibh eu urna posuere laoreet. Sed luctus dignissim aliquet.
                                                            Ut nec nisl porttitor, ornare turpis quis, accumsan dolor.</p>
                                                        <ul>
                                                            <li>Nunc commodo ipsum ac mi;</li>
                                                            <li>Curabitur bibendum odio eu orci;</li>
                                                            <li>Morbi tincidunt lacus a pulvinar;</li>
                                                        </ul>
                                                    </li>
                                                    <li aria-hidden="true">
                                                        <p>Ipsum nibh eu urna posuere laoreet. Sed luctus dignissim aliquet.
                                                            Ut nec nisl porttitor, ornare turpis quis, accumsan dolor.</p>
                                                        <ul>
                                                            <li>Nunc commodo ipsum ac mi;</li>
                                                            <li>Curabitur bibendum odio eu orci;</li>
                                                            <li>Morbi tincidunt lacus a pulvinar;</li>
                                                        </ul>
                                                    </li>
                                                    <li aria-hidden="true">
                                                        <p>In eu nibh eu urna posuere laoreet. Sed luctus dignissim aliquet.
                                                            Ut nec nisl porttitor, ornare turpis quis, accumsan dolor.</p>
                                                        <ul>
                                                            <li>Nunc commodo ipsum ac mi;</li>
                                                            <li>Curabitur bibendum odio eu orci;</li>
                                                            <li>Morbi tincidunt lacus a pulvinar;</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="uk-width-medium-4-10 uk-width-small-1-1">
                                                <h3 class="history-title">Maecenas <span>dapibus</span></h3>
                                                <div class="uk-accordion" data-uk-accordion="">

                                                    <h4 class="uk-accordion-title uk-active">Nunc et diam a nunc venenatis
                                                        fermentum <span class="arrow"><i
                                                                class="uk-icon-arrow-right"></i></span></h4>
                                                    <div aria-expanded="true" data-wrapper="true" role="list"
                                                        style="height: auto; position: relative;">
                                                        <div class="uk-accordion-content uk-active">Phasellus sagittis
                                                            venenatis suscipit. Donec vehicula aliquam neque. Aenean
                                                            lobortis tellus ut tortor ornare, eu pharetra magna faucibus.
                                                        </div>
                                                    </div>

                                                    <h4 class="uk-accordion-title">Nulla quis est pretium, commodo tortor
                                                        ac<span class="arrow"><i class="uk-icon-arrow-right"></i></span>
                                                    </h4>
                                                    <div aria-expanded="false" data-wrapper="true" role="list"
                                                        style="overflow:hidden;height:0;position:relative;">
                                                        <div class="uk-accordion-content">Phasellus sagittis venenatis
                                                            suscipit. Donec vehicula aliquam neque. Aenean lobortis tellus
                                                            ut tortor ornare, eu pharetra magna faucibus.</div>
                                                    </div>

                                                    <h4 class="uk-accordion-title">Vestibulum a arcu vitae dui faucibus
                                                        euismod<span class="arrow"><i
                                                                class="uk-icon-arrow-right"></i></span></h4>
                                                    <div aria-expanded="false" data-wrapper="true" role="list"
                                                        style="overflow:hidden;height:0;position:relative;">
                                                        <div class="uk-accordion-content">Phasellus sagittis venenatis
                                                            suscipit. Donec vehicula aliquam neque. Aenean lobortis tellus
                                                            ut tortor ornare, eu pharetra magna faucibus.</div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="uk-width-medium-2-10 uk-width-small-1-1">
                                                <h3 class="history-title">Statistic</h3>
                                                <table class="stat-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Games</td>
                                                            <td>8</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Goals</td>
                                                            <td>15</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Awards</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Violations</td>
                                                            <td>7</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </li>
                                        <li aria-hidden="true" class="uk-grid">
                                            <div class="uk-width-medium-4-10">
                                                <h3 class="history-title">Maecenas <span>dapibus</span></h3>
                                                <!-- This is the container of the toggling elements -->
                                                <ul class="tabs-switch-top" data-uk-switcher="{connect:'#tab-switch2'}">
                                                    <li class="uk-active" aria-expanded="true"><a
                                                            href="/">Lorem</a>
                                                    </li>
                                                    <li aria-expanded="false"><a href="/">Ipsum</a>
                                                    </li>
                                                    <li aria-expanded="false"><a href="/">Dolor</a>
                                                    </li>
                                                </ul>

                                                <!-- This is the container of the content items -->
                                                <ul id="tab-switch2" class="uk-switcher tabs-switch-bottom">
                                                    <li class="uk-active" aria-hidden="false">
                                                        <p>Lorem nibh eu urna posuere laoreet. Sed luctus dignissim aliquet.
                                                            Ut nec nisl porttitor, ornare turpis quis, accumsan dolor.</p>
                                                        <ul>
                                                            <li>Nunc commodo ipsum ac mi;</li>
                                                            <li>Curabitur bibendum odio eu orci;</li>
                                                            <li>Morbi tincidunt lacus a pulvinar;</li>
                                                        </ul>
                                                    </li>
                                                    <li aria-hidden="true">
                                                        <p>Ipsum nibh eu urna posuere laoreet. Sed luctus dignissim aliquet.
                                                            Ut nec nisl porttitor, ornare turpis quis, accumsan dolor.</p>
                                                        <ul>
                                                            <li>Nunc commodo ipsum ac mi;</li>
                                                            <li>Curabitur bibendum odio eu orci;</li>
                                                            <li>Morbi tincidunt lacus a pulvinar;</li>
                                                        </ul>
                                                    </li>
                                                    <li aria-hidden="true">
                                                        <p>In eu nibh eu urna posuere laoreet. Sed luctus dignissim aliquet.
                                                            Ut nec nisl porttitor, ornare turpis quis, accumsan dolor.</p>
                                                        <ul>
                                                            <li>Nunc commodo ipsum ac mi;</li>
                                                            <li>Curabitur bibendum odio eu orci;</li>
                                                            <li>Morbi tincidunt lacus a pulvinar;</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="uk-width-medium-4-10">
                                                <h3 class="history-title">Praesent <span>dictum</span></h3>
                                                <div class="uk-accordion" data-uk-accordion="">

                                                    <h4 class="uk-accordion-title uk-active">Nunc et diam a nunc venenatis
                                                        fermentum <span class="arrow"><i
                                                                class="uk-icon-arrow-right"></i></span></h4>
                                                    <div aria-expanded="true" data-wrapper="true" role="list"
                                                        style="height: auto; position: relative;">
                                                        <div class="uk-accordion-content uk-active">Phasellus sagittis
                                                            venenatis suscipit. Donec vehicula aliquam neque. Aenean
                                                            lobortis tellus ut tortor ornare, eu pharetra magna faucibus.
                                                        </div>
                                                    </div>

                                                    <h4 class="uk-accordion-title">Nulla quis est pretium, commodo tortor
                                                        ac<span class="arrow"><i class="uk-icon-arrow-right"></i></span>
                                                    </h4>
                                                    <div aria-expanded="false" data-wrapper="true" role="list"
                                                        style="overflow:hidden;height:0;position:relative;">
                                                        <div class="uk-accordion-content">Phasellus sagittis venenatis
                                                            suscipit. Donec vehicula aliquam neque. Aenean lobortis tellus
                                                            ut tortor ornare, eu pharetra magna faucibus.</div>
                                                    </div>

                                                    <h4 class="uk-accordion-title">Vestibulum a arcu vitae dui faucibus
                                                        euismod<span class="arrow"><i
                                                                class="uk-icon-arrow-right"></i></span></h4>
                                                    <div aria-expanded="false" data-wrapper="true" role="list"
                                                        style="overflow:hidden;height:0;position:relative;">
                                                        <div class="uk-accordion-content">Phasellus sagittis venenatis
                                                            suscipit. Donec vehicula aliquam neque. Aenean lobortis tellus
                                                            ut tortor ornare, eu pharetra magna faucibus.</div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="uk-width-medium-2-10">
                                                <h3 class="history-title">Statistic</h3>
                                                <table class="stat-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Games</td>
                                                            <td>8</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Goals</td>
                                                            <td>15</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Awards</td>
                                                            <td>3</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Violations</td>
                                                            <td>7</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="tm-bottom-d-box tm-full-width  ">
        <div class="uk-container uk-container-center">
            <section id="tm-bottom-d" class="tm-bottom-d uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">

                <div class="uk-width-1-1 uk-row-first">
                    <div class="uk-panel our-awards-wrap">
                        <div class="uk-width-1-1">
                            <div class="our-awards-title">
                                <h3>Our <span>Awards</span></h3>
                            </div>
                            {{-- <div class="our-awards-text">Nullam quis eros tellus. Duis sit amet neque nec orci feugiat
                                tincidunt. Lorem ipsum dolor sit amet,
                                <br> consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue
                                erat.
                            </div> --}}
                        </div>
                        {{-- <div dir="ltr" class="uk-slidenav-position our-awards"
                            data-uk-slider="{default: 6, autoplay:true, autoplayInterval:7000, animation: 'slide-bottom', duration: 400}">
                            <div class="uk-slider-container">
                                <ul class="uk-slider uk-grid uk-grid-width-large-1-5 uk-grid-width-medium-1-3">
                                    <li class="uk-slide-after">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img.png"
                                                alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="uk-slide-after">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img1.png"
                                                alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="uk-slide-after">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img2.png"
                                                alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="uk-slide-after">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img3.png"
                                                alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="uk-slide-after">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img4.png"
                                                alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="uk-slide-before">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img5.png"
                                                alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="uk-slide-before">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img3.png"
                                                alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="uk-slide-before">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img.png"
                                                alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="uk-slide-before">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img1.png"
                                                alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="uk-slide-before">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img2.png"
                                                alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="uk-slide-before">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img3.png"
                                                alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                    <li class="">
                                        <div class="img-wrap"><img draggable="false" src="images/award-img4.png"
                                                alt="">
                                        </div>
                                        <div class="text">2014 world cup champion</div>
                                    </li>
                                </ul>
                            </div>
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
    <script src="frontend/js/modernizr-2.8.3.min.js"></script>
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
