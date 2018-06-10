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

    @include('web.partials.lasts_posts')

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