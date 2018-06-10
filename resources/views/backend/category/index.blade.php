@extends('layouts.admin')

@section('top_bar')
    <li class="crumb-active">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>

    <li class="crumb-link">
        <a href="{{ route('category.index') }}">Cátegorias</a>
    </li>
@stop

@section('content')

    @include('layouts.messages')

    <div class="mw1000 center-block">

        <!-- Begin: Content Header -->
        <div class="content-header">
            <div align="right">
                <a href="{{ route('category.create') }}" class="btn btn-primary animated zoomIn"><strong>Nueva Cátegoria</strong></a>
            </div>
        </div>

        <!-- Begin: Admin Form -->
        <div class="admin-form">
            <div class="panel heading-border">
                <div class="panel-body bg-light">

                    <div class="section-divider mb40" id="spy1">
                        <span>
                            <strong>Lista de Cátegorias</strong>
                        </span>
                    </div>
                    <table class="table table-striped table-hover table" id="data-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr data-id="{{ $category->id }}">
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td class="actions-buttons">
                                        <a href="{{ route('category.edit', [$category->id]) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top">
                                            <i class="fa fa-edit animated zoomIn"></i></a>
                                        <a href="" class="btn btn-danger btn-sm btn-delete" data-toggle="tooltip" data-placement="top">
                                            <i class="fa fa-trash-o animated zoomIn"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        {{ Form::open(['route' => ['category.delete', ':DATA_ID'], 'method' => 'delete', 'id' => 'form-delete']) }}
        {{ Form::close()}}
    </div>
@stop

@section('js')
    <script src="{{ asset('assets/js/delete_data.js') }}"></script>
@stop