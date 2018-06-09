@extends('layouts.web')

@section('header')
    <!-- Hero Content -->
    <header id="hero">
        <div class="container">
            <br><br><br>
            <div class="intro-text">
                <!-- Autoplay -->
                <div class="slider-demo9">
                    <div class="slick-autoplay">
                        <div class="slick-slide">
                            <h1>1</h1>
                        </div>
                        <div class="slick-slide">
                            <h1>2</h1>
                        </div>
                        <div class="slick-slide">
                            <h1>3</h1>
                        </div>
                        <div class="slick-slide">
                            <h1>4</h1>
                        </div>
                        <div class="slick-slide">
                            <h1>5</h1>
                        </div>
                        <div class="slick-slide">
                            <h1>6</h1>
                        </div>
                        <div class="slick-slide">
                            <h1>7</h1>
                        </div>
                        <div class="slick-slide">
                            <h1>8</h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>
@stop

@section('content')

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading mt20">Ultimas Publicaciones</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ asset('landing/img/portfolio/roundicons.png') }}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Round Icons</h4>
                        <p class="text-muted">Graphic Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ asset('landing/img/portfolio/startup-framework.png') }}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Startup Framework</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ asset('landing/img/portfolio/treehouse.png') }}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Template HTML</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ asset('landing/img/portfolio/golden.png') }}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Amazon Redesign</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ asset('landing/img/portfolio/escape.png') }}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Bootstrap Starter</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{ asset('landing/img/portfolio/dreams.png') }}" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Weekly Freebie!</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

@section('css')
    <!-- Slick.js CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/plugins/slick/slick.css') }}">

    <style>
        /* demo slider styles */
        .slick-slide h1 {
            background: #FFF;
            border: 1px solid #DDD;
            height: 200px;
            line-height: 190px;
            margin: 15px;
            text-align: center;
            font-weight: 600;
            font-size: 32px;
            color: #3498db;
        }
        .center-mode h1 {
            opacity: 0.8;
            transition: all 300ms ease;
        }
        .center-mode .slick-center h1 {
            color: #e67e22;
            opacity: 1;
            -webkit-transform: scale(1.08);
            transform: scale(1.08);
        }
    </style>
@stop


@section('js')
    <!-- Slick Slider Plugin -->
    <script src="{{ asset('vendor/plugins/slick/slick.js') }}"></script>

    <script>
        $('.slick-autoplay').slick({
            dots: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 800,
        });
    </script>
@stop