@extends('layouts.admin')

@section('top_bar')
    <li class="crumb-active">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>

    <li class="crumb-link">
        <a href="{{ route('link.index', [$post]) }}">Enlaces</a>
    </li>

    <li class="crumb-trail">Editar enlace</li>
@stop

@section('content')

    <div class="mw1000 center-block">

        <!-- Begin: Content Header -->
        <div class="content-header">
            <div align="right">
                <a href="{{ route('link.index', [$post]) }}" class="btn btn-dark animated zoomIn"><strong>Regresar</strong></a>
            </div>
        </div>

        <!-- Begin: Admin Form -->
        <div class="admin-form">

            <div class="panel heading-border">
                <div class="panel-body bg-light">

                    <div class="section-divider mb40" id="spy1">
                        <span>Editar enlace</span>
                    </div>

                    {!! Form::model($link ,['route' => ['link.update', $post, $link], 'method' => 'PUT']) !!}

                        @include('backend.link.partials.fields')

                        <div class="panel-footer">
                            <button type="submit" class="button btn-primary"><strong>Actualizar</strong></button>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>

        </div>

    </div>

@stop
