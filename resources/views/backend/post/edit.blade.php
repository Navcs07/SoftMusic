@extends('layouts.admin')

@section('top_bar')
    <li class="crumb-active">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>

    <li class="crumb-link">
        <a href="{{ route('post.index') }}">Posts</a>
    </li>

    <li class="crumb-trail">Editar post</li>
@stop

@section('content')

    <div class="mw1000 center-block">

        <!-- Begin: Content Header -->
        <div class="content-header">
            <div align="right">
                <a href="{{ route('post.index') }}" class="btn btn-dark animated zoomIn"><strong>Regresar</strong></a>
            </div>
        </div>

        <!-- Begin: Admin Form -->
        <div class="admin-form">

            <div class="panel heading-border">
                <div class="panel-body bg-light">

                    <div class="section-divider mb40" id="spy1">
                        <span>Editar post</span>
                    </div>

                    {!! Form::model($post ,['route' => ['post.update', $post], 'method' => 'PUT', 'files' => true]) !!}

                    @include('backend.post.partials.fields')

                        <div class="panel-footer">
                            <button type="submit" class="button btn-primary"><strong>Actualizar</strong></button>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>

        </div>

    </div>

@stop

@section('js')
    <script>
        CKEDITOR.replace('content_1');
    </script>
@endsection