<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap Core CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -- Local Version -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('landing/css/theme.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic'>

    @yield('css')

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('landing/img/favicon.ico') }}">

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default">

    <!-- Topbar Nav (hidden) -->
    <div class="topbar-nav clearfix">
        <div class="container">
            @include('web.partials.social')
        </div>
    </div>

    <div class="container" style="max-width: 1050px;">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="{{ route('home') }}">{{ config('app.name', 'Laravel') }}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        @include('web.partials.menu')
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

@yield('header')

<!-- Content -->
@yield('content')
<!-- End Content -->

{{--
<!-- Services Section -->
@include('layouts.landing.services')

<!-- Flat Features Section -->
@include('layouts.landing.features')

<!-- Portfolio Grid Section -->
@include('layouts.landing.portfolio')

<!-- Team Section (hidden) -->
@include('layouts.landing.team')
--}}

<!-- Clients Section -->
{{--
@include('layouts.landing.clients')
--}}

{{--
<!-- Contact Section -->
@include('layouts.landing.contact')
--}}

<!-- Footer -->
@include('layouts.landing.footer')

{{--
<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->
@include('layouts.landing.portfolio_modal')
--}}

<!-- jQuery -->
<!-- <script src="js/vendor/jquery.js"></script> -- Local Version -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<!-- <script src="js/vendor/bootstrap.min.js"></script> -- Local Version -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="{{ asset('landing/js/vendor/jqBootstrapValidation.js') }}"></script>
<script src="{{ asset('landing/js/contact_me.js') }}"></script>

@yield('js')

<!-- Custom Theme JavaScript -->
<script src="{{ asset('landing/js/main.js') }}"></script>

</body>

</html>
