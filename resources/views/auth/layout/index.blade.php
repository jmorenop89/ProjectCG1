<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <!-- link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" -->
    <!-- link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png" -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Login | @yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    @include('auth.layout.style')

</head>

<body>
<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <div class="navbar-header">
            {{-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> --}}
            <a class="navbar-brand" href="/">Login</a>
        </div>
        {{-- <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="register.html">
                        Register
                    </a>
                </li>
                <li>
                    <a href="../dashboard/overview.html">
                        Dashboard
                    </a>
                </li>
            </ul>
        </div> --}}
    </div>
</nav>

<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="tk" >
        <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            @yield('content')
        </div>

        <footer class="footer footer-transparent">
            <div class="container">
                <div class="copyright">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    {{--, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative
                        Tim</a> --}}
                </div>
            </div>
        </footer>
    </div>
</div>
</body>

@include('auth.layout.scripts')

</html>
