<!-- Start: Sidebar Menu -->
<ul class="nav sidebar-menu">
    <li class="sidebar-label pt20">Menu</li>

    <li class="active">
        <a href="{{ route('dashboard') }}">
            <span class="glyphicon glyphicon-home"></span>
            <span class="sidebar-title">Dashboard</span>
        </a>
    </li>

    <li class="sidebar-label pt20">Systems</li>
    <li>
        <a class="accordion-toggle" href="#">
            <span class="fa fa-gears"></span>
            <span class="sidebar-title">Admin</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="{{ route('user.index') }}">
                    <span class="fa fa-users"></span> Users</a>
            </li>
        </ul>
    </li>

</ul>
<!-- End: Sidebar Menu -->