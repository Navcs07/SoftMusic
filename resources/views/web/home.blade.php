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
                        @foreach($posts as $post)
                            <div class="slick-slide">
                                <a href="{{ route('app', [$post->slug]) }}" class="portfolio-link">
                                    <img src="{{ asset('uploads/'.$post->image->path.'') }}" class="img-responsive" alt="{{ $post->image->name }}">
                                    <h4>{{ $post->title }}</h4>
                                </a>
                            </div>
                        @endforeach
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
        .slick-slide img {
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
        .center-mode img {
            opacity: 0.8;
            transition: all 300ms ease;
        }
        .center-mode .slick-center img {
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