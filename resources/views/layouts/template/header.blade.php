<!-- Start: Header -->
<header class="navbar navbar-fixed-top navbar-shadow bg-dark">

    <div class="navbar-branding">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <b>Admin</b>Designs
        </a>
        <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
    </div>

    <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
            <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="{{ asset('assets/img/avatars/1.jpg') }}" alt="avatar" class="mw30 br64 mr15"> John.Smith
                <span class="caret caret-tp hidden-xs"></span>
            </a>
            <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
                <li class="list-group-item">
                    <a href="#" class="animated animated-short fadeInUp">
                        <span class="fa fa-envelope"></span> Messages
                        <span class="label label-warning">2</span>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="animated animated-short fadeInUp">
                        <span class="fa fa-user"></span> Friends
                        <span class="label label-warning">6</span>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="animated animated-short fadeInUp">
                        <span class="fa fa-gear"></span> Account Settings </a>
                </li>
                <li class="list-group-item">
                    <a class="animated animated-short fadeInUp" href="{{ route('logout') }} "
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        <span class="fa fa-power-off"></span> Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    </ul>

</header>
<!-- End: Header -->