@extends('layouts.new-app')
@section('title', 'Blog')

@section('content')

    <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
        <div class="uk-container uk-container-center">
            <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}"
                data-uk-grid-margin="">

                <div class="uk-width-1-1 uk-row-first rs-breadcrumbs">
                    <div class="uk-panel">
                        <div class="uk-cover-background uk-position-relative head-wrap"
                            style="height: 290px; background-image: url('frontend/images/breadcrumbs/blog-left.jpg');">
                            <img class="uk-invisible" src="frontend/images/breadcrumbs/blog-left.jpg" alt=""
                                height="290" width="1920">
                            <div class="uk-position-cover uk-flex uk-flex-center head-title" style="z-index: 1">
                                <h1>Blog PGFC</h1>
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
            <li class="uk-active"><span>Blog</span></li>
        </ul>
    </div>

    <div class="uk-container uk-container-center">
        <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
            <div class="tm-main uk-width-medium-1-1 >
                <div class="contentpaneopen">
                   <main id="tm-content" class="tm-content">
                        <div class="uk-grid" data-uk-grid-match="">
                            <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article uk-flex uk-flex-column">
                                <div class="wrapper">
                                    <div class="img-wrap uk-flex-wrap-top">
                                        <a href="news-single.html">
                                        <img src="assets/images/news/35b8bf93115eb2b8da9f8b4f41fdb0fd.jpg" class="img-polaroid" alt="">
                                        </a>        
                                    </div>
                                    <div class="info uk-flex-wrap-middle">
                                        <div class="date">
                                            November 25, 2015            
                                        </div>
                                        <div class="name">
                                            <h4>
                                                <a href="news-single.html">
                                                Suspendisse purus enim, dictum sed lorem ac, sodales maximus est                    </a>        
                                            </h4>
                                        </div>
                                        <div class="text">
                                            <p>Vivamus hendrerit, tortor sed luctus maximus, nunc urna hendrerit nibh, sit amet efficitur libero lorem quis mauris. Nunc a pulvinar lectus.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-actions uk-flex-wrap-bottom">
                                    <div class="count"><i class="" style="background: \f086"></i><span></span></div>
                                    <div class="read-more"><a href="news-single.html">Read More</a></div>
                                </div>
                            </div>
                            @foreach ($articles as $item)>
                            <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article uk-flex uk-flex-column">
                                <div class="wrapper">
                                    <div class="img-wrap uk-flex-wrap-top">
                                        <a href="{{ url('blog/p/' . $item->slug) }}">
                                        <img src="{{ asset('storage/admin/articles/' . $item->img) }}" class="img-polaroid" alt="">
                                        </a>        
                                    </div>
                                    <div class="info uk-flex-wrap-middle">
                                        <div class="date">
                                            {{ $item->created_at->format('MMMM-dd-YYYY') }}
                                        </div>
                                        <div class="name">
                                            <h4>
                                                <a href="{{ url('blog/p/' . $item->slug) }}">
                                                {{ $item->title }}</a>        
                                            </h4>
                                        </div>
                                        <div class="text">
                                            <p>{!! Str::limit(html_entity_decode(strip_tags($item->desc)), 200, '...') !!}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="article-actions uk-flex-wrap-bottom">
                                    <div class="count"><i class="" style="background: \f086"></i><span></span></div>
                                    <div class="read-more"><a href="{{ url('blog/p/' . $item->slug) }}">Read More</a></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <form method="post">
                            <div class="pagination">
                                <ul class="pagination-list">
                                    <li class="pagination-start"><span class="pagenav">Start</span></li>
                                    <li class="pagination-prev"><span class="pagenav">Prev</span></li>
                                    <li><span class="pagenav">1</span></li>
                                    <li><a href="#" class="pagenav">2</a></li>
                                    <li class="pagination-next"><a data-original-title="Next" title="" href="#" class="hasTooltip pagenav">Next</a></li>
                                    <li class="pagination-end"><a data-original-title="End" title="" href="#" class="hasTooltip pagenav">End</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </main>
                </div>
            </div>
        </div>
    </div>

    <div class="tm-top-e-box tm-full-width" style="background: url(assets/images/tr.png); margin-top:30px">
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


    {{-- <!-- Home Blog Start Here -->
    <div id="rs-blog" class="rs-blog sec-spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-ms-12">
                    <div class="row">
                        @foreach ($articles as $item)
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div class="single-blog-slide">
                                    <div class="images">
                                        <a href="{{ url('blog/p/' . $item->slug) }}"><img
                                                class="card-img-top post-img card-height"
                                                src="{{ asset('storage/admin/articles/' . $item->img) }}"
                                                alt="Blog Image"></a>
                                    </div>
                                    <div class="blog-details">
                                        <span class="date">
                                            <i class="fa fa-calendar-check-o"></i>
                                            {{ $item->created_at->format('d-m-Y') }}

                                            <a
                                                href="{{ url('blog/category/' . $item->Category->slug) }}">{{ $item->Category->name }}</a>
                                        </span>
                                        <h3><a href="{{ url('blog/p/' . $item->slug) }}">{{ $item->title }} </a></h3>
                                        <p>{!! Str::limit(html_entity_decode(strip_tags($item->desc)), 200, '...') !!}</p>
                                        <div class="read-more">
                                            <a href="{{ url('blog/p/' . $item->slug) }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="pagination justify-content-center my-4">
                                {{ $articles->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                @include('includes.frontend.blog.side-widget')
            </div>
        </div>
    </div>
    <!-- Home Blog End Here --> --}}

@endsection

@push('prepend-style')
    <!-- bootstrap v5.0.2 css -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
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
    <!-- Slick Theme css -->
    <link rel="stylesheet" href="{{ url('frontend/css/slick-theme.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ url('style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ url('frontend/css/responsive.css') }}">
    <!-- modernizr js -->
    <script src="{{ url('frontend/js/modernizr-2.8.3.min.js') }}"></script>
    {{-- custom css --}}
    <link rel="stylesheet" href="{{ url('frontend/css/custom.css') }}">
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
