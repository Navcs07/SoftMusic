@extends('layouts.admin')

@section('top_bar')
    <li class="crumb-active">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>

    <li class="crumb-link">
        <a href="{{ route('user.index') }}">Usuarios</a>
    </li>
@stop

@section('content')

    <div class="col-md-1 col-md-offset-11" style="margin-bottom:10px;">
        <!--<a href="{{ route('user.create') }}" class="btn btn-success animated zoomIn">create</a>-->
    </div>

    @include('layouts.messages')

    <div class="mw1000 center-block">

        <!-- Begin: Content Header -->
        <div class="content-header">
            <div align="right">
                <a href="{{ route('user.create') }}" class="btn btn-primary animated zoomIn"><strong>Nuevo Usuario</strong></a>
            </div>
        </div>

        <!-- Begin: Admin Form -->
        <div class="admin-form">
            <div class="panel heading-border">
                <div class="panel-body bg-light">

                    <div class="section-divider mb40" id="spy1">
                        <span>
                            <strong>Lista de Usuarios</strong>
                        </span>
                    </div>
                    <table class="table table-striped table-hover table" id="data-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Perfil</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr data-id="{{ $user->id }}">
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->getRoles() }}</td>
                                    <td class="actions-buttons">
                                        <a href="{{ route('user.edit', [$user->id]) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top">
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
        {{ Form::open(['route' => ['user.delete', ':DATA_ID'], 'method' => 'delete', 'id' => 'form-delete']) }}
        {{ Form::close()}}
    </div>
@stop

@section('js')
    <script src="{{ asset('assets/js/delete_data.js') }}"></script>
@stop