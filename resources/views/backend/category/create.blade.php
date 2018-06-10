@extends('layouts.admin')

@section('top_bar')
    <li class="crumb-active">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>

    <li class="crumb-link">
        <a href="{{ route('category.index') }}">Cátegorias</a>
    </li>

    <li class="crumb-trail">Crear cátegoria</li>
@stop

@section('content')

    <div class="mw1000 center-block">

        <!-- Begin: Content Header -->
        <div class="content-header">
            <div align="right">
                <a href="{{ route('category.index') }}" class="btn btn-dark animated zoomIn"><strong>Regresar</strong></a>
            </div>
        </div>

        <!-- Begin: Admin Form -->
        <div class="admin-form">

            <div class="panel heading-border">
                <div class="panel-body bg-light">

                    <div class="section-divider mb40" id="spy1">
                        <span>Crear cátegoria</span>
                    </div>

                    {!! Form::open(['route' => 'category.store', 'method' => 'POST']) !!}

                        <div class="row">
                            <div class="col-md-12">
                                {!! Field::text('name', null, ['placeholder' => trans('validation.attributes.name')], ['icon' => 'fa fa-list']) !!}
                            </div>
                        </div>

                        <div class="panel-footer">
                            <button type="submit" class="button btn-primary"><strong>Guardar</strong></button>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>

        </div>

    </div>

@stop
