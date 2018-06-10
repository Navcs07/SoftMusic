<!-- Start: Sidebar Menu -->
<ul class="nav sidebar-menu">
    <li class="sidebar-label pt20">Menu</li>

    <li class="active">
        <a href="{{ route('dashboard') }}">
            <span class="glyphicon glyphicon-home"></span>
            <span class="sidebar-title">Dashboard</span>
        </a>
    </li>

    <li class="sidebar-label pt20">Usuarios</li>
    <li>
        <a class="accordion-toggle" href="#">
            <span class="fa fa-users"></span>
            <span class="sidebar-title">Usuarios</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="{{ route('user.create') }}">
                    <span class="fa fa-plus"></span> Nuevo Usuario</a>
            </li>
            <li>
                <a href="{{ route('user.index') }}">
                    <span class="fa fa-users"></span> Lista de Usuarios</a>
            </li>
        </ul>
    </li>


    <li class="sidebar-label pt20">Cátegorias</li>
    <li>
        <a class="accordion-toggle" href="#">
            <span class="fa fa-list"></span>
            <span class="sidebar-title">Cátegorias</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="{{ route('category.create') }}">
                    <span class="fa fa-plus"></span> Nueva Cátegoria</a>
            </li>
            <li>
                <a href="{{ route('category.index') }}">
                    <span class="fa fa-list"></span> Lista de Cátegorias</a>
            </li>
        </ul>
    </li>


    <li class="sidebar-label pt20">Posts</li>
    <li>
        <a class="accordion-toggle" href="#">
            <span class="fa fa-file-code-o"></span>
            <span class="sidebar-title">Posts</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="{{ route('post.create') }}">
                    <span class="fa fa-plus"></span> Nuevo Post</a>
            </li>
            <li>
                <a href="{{ route('post.index') }}">
                    <span class="fa fa-file-code-o"></span> Lista de Posts</a>
            </li>
        </ul>
    </li>


    <li class="sidebar-label pt20"></li>

    <li class="">
        <a href="{{ route('home') }}">
            <span class="glyphicon glyphicon-home"></span>
            <span class="sidebar-title">Ir a la Web</span>
        </a>
    </li>

</ul>
<!-- End: Sidebar Menu -->