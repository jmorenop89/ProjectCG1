<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Taxi Metro | @yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    @include('admin.layout.style')

</head>

<body>
<div class="wrapper">

    @include('admin.layout.sidebar')

    <div class="main-panel">

        @include('admin.layout.panel')

        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    @yield('content')

                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>

@include('admin.layout.script')

@yield('script')
</html>
