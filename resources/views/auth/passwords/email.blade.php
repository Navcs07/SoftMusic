@extends('layouts.auth')

@section('content')

    <div class="admin-form theme-info mw500" id="login">

        <!-- Login Logo -->
        @include('layouts.template.auth_logo')

        <!-- Login Panel/Form -->
        <div class="panel mt30 mb25">

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}

                <div class="panel-body bg-light p25 pb15">

                    <div class="section">
                        {!! Field::email('email', null, ['placeholder' => 'Email'], ['icon' => 'fa fa-user']) !!}
                    </div>

                </div>

                <div class="panel-footer clearfix">
                    <button type="submit" class="button btn-primary mr10 pull-right">Send Password Reset Link</button>
                </div>

            </form>
        </div>

        <!-- Registration Links -->
        <div class="login-links">
            <p>
                <a href="{{ route('login') }}" class="active" title="Sign In">Login</a>
            </p>
        </div>

    </div>


@endsection
