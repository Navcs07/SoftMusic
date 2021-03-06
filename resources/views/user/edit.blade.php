@extends('layouts.admin')

@section('top_bar')
    <li class="crumb-active">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>

    <li class="crumb-link">
        <a href="{{ route('user.index') }}">Usuarios</a>
    </li>

    <li class="crumb-trail">Editar usuario</li>
@stop

@section('content')

    <div class="mw1000 center-block">

        <!-- Begin: Content Header -->
        <div class="content-header">
            <div align="right">
                <a href="{{ route('user.index') }}" class="btn btn-dark animated zoomIn"><strong>Regresar</strong></a>
            </div>
        </div>

        <!-- Begin: Admin Form -->
        <div class="admin-form">

            <div class="panel heading-border">
                <div class="panel-body bg-light">

                    <div class="section-divider mb40" id="spy1">
                        <span>Editar usuario</span>
                    </div>

                    {!! Form::model($user ,['route' => ['user.update', $user], 'method' => 'PUT']) !!}

                        <div class="row">
                            <div class="col-md-6">
                                {!! Field::text('name', null, ['placeholder' => 'Name'], ['icon' => 'fa fa-user']) !!}
                            </div>
                            <div class="col-md-6">
                                {!! Field::email('email', null, ['placeholder' => 'Email'], ['icon' => 'fa fa-user']) !!}
                            </div>
                        </div>

                        <div class="panel-footer">
                            <button type="submit" class="button btn-primary"><strong>Actualizar</strong></button>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>

        </div>

    </div>

@stop
