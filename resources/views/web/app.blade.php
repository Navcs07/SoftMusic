@extends('layouts.web')

@section('header')
    <header id="hero" style="height: 10vh; min-height: 150px;"></header>
@stop

@section('content')

    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="section-heading">{{ $post->title }}</h2>
                    <h3 class="section-subheading text-muted mbn"><br><br><br></h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('uploads/'.$post->image->path.'') }}" title="{{ $post->image->name }}" class="img-responsive pull-right mtn30">
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-subheading text-muted mbn">{!! $post->content_1 !!}</h3>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="section-heading">Enlaces de Descarga</h3>
                    @foreach($post->links as $link)
                        <h3 class="section-subheading text-muted mbn">
                            @if($link->type == 'local')
                                <a href="{{ asset('uploads/'.$link->link.'') }}" target="_blank">{{ $link->name }}</a>
                            @else
                                <a href="{{ $link->link }}" target="_blank">{{ $link->name }}</a>
                            @endif
                        </h3>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

@stop