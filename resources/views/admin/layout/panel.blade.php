<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-minimize">
            <button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a class="navbar-brand" href="">
                @yield('title.section')
            </a>
        </div>
        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#settings" class="btn-rotate dropdown-toggle" data-toggle="dropdown">
                        <i class="ti-settings"></i>
                        <p class="hidden-md hidden-lg">
                            Settings
                        </p>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="">Usuarios</a></li>
                        <li><a href="{{ route('logout') }}">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>