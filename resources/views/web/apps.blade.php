@extends('layouts.web')

@section('header')
    <header id="hero" style="height: 10vh; min-height: 150px;"></header>
@stop

@section('content')

    @include('web.partials.lasts_posts')

    <div align="center">
        {!! $posts->render() !!}
    </div>

@stop