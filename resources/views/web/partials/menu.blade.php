<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
        <li class="active">
            <a class="page-scroll" href="{{ route('home') }}">Inicio</a>
        </li>
        <li>
            <a class="page-scroll" href="{{ route('apps') }}">Aplicaciones</a>
        </li>
        <li>
            <a class="page-scroll" href="#">Acerca</a>
        </li>
        @if(Auth::check())

            <li>
                <a class="page-scroll" href="{{ route('dashboard') }}">Panel Administrativo</a>
            </li>

            <li>
                <a class="page-scroll" href="{{ route('logout') }} "
                   onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    Salir
                </a>
            </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @else
            <li>
                <a class="page-scroll" href="{{ route('login') }}">Login</a>
            </li>
            <li>
                <a class="page-scroll" href="{{ route('register') }}">Registro</a>
            </li>
        @endif
    </ul>
</div>