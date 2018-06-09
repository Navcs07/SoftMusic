@extends('layouts.auth')

@section('content')

    <div class="admin-form theme-info mw500" id="login">

        <!-- Login Logo -->
    @include('layouts.template.auth_logo')

    <!-- Login Panel/Form -->
        <div class="panel mt30 mb25">

            <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}

                <div class="panel-body bg-light p25 pb15">

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="section">
                        {!! Field::email('email', null, ['placeholder' => 'Email'], ['icon' => 'fa fa-user']) !!}
                    </div>

                    <!-- Password Input -->
                    <div class="section">
                        {!! Field::password('password', ['placeholder' => 'Password'], ['icon' => 'fa fa-lock']) !!}
                    </div>

                    <div class="section">
                        {!! Field::password('password_confirmation', ['placeholder' => 'Confirm Password'], ['icon' => 'fa fa-lock']) !!}
                    </div>

                </div>

                <div class="panel-footer clearfix">
                    <button type="submit" class="button btn-primary mr10 pull-right">Restablecer la contraseña</button>
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
