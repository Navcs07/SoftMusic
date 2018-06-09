@extends('layouts.admin')

@section('top_bar')
    <li class="crumb-active">
        <a href="{{ route('dashboard') }}">Dashboard</a>
    </li>
    {{--
    <li class="crumb-link">
        <a href="{{ route('dashboard') }}">Home</a>
    </li>
    <li class="crumb-trail">Dashboard</li>
    --}}
@stop

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    content

@stop
