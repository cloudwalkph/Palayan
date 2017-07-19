<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Palayan') }}</title>

    <!-- Styles -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/probootstrap/styles-merged.css') }}">
    <link rel="stylesheet" href="{{ asset('css/probootstrap/style.css') }}">

    <style>
        .wizard ul, .tabcontrol ul{
            display: none;
        }
        .wizard.vertical > .content{
            margin-left: 169px;
            width: 76%;
        }
        .wizard.vertical > .actions {
            text-align: center;
        }
        .wizard > .content > .body{
            font-size: 17px;
        }
    </style>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    @yield('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-fixed-top navbar-default probootstrap-navbar scrolled navbar-white">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img class="navbar-logo" src="{{ asset('/images/pchb-logo.png') }}" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Why Palayan City</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#" onclick="navredirect('services')" target="-self">Services</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Locators</a></li>
                        <li><a href="#">Leasing</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#"><i class="fa fa-search fa-1" aria-hidden="true"></i></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        {{--<nav class="navbar navbar-default navbar-fixed-top probootstrap-navbar">--}}
            {{--<div class="container">--}}
                {{--<div class="navbar-header">--}}
                    {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">--}}
                        {{--<span class="sr-only">Toggle navigation</span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                    {{--</button>--}}
                    {{--<a class="navbar-brand" href="index.html" title="ProBootstrap:FineOak">FineOak</a>--}}
                {{--</div>--}}

                {{--<div id="navbar-collapse" class="navbar-collapse collapse">--}}
                    {{--<ul class="nav navbar-nav navbar-right">--}}
                        {{--<li class="active"><a href="#" data-nav-section="welcome">Welcome</a></li>--}}
                        {{--<li><a href="#" data-nav-section="specialties">Specialties</a></li>--}}
                        {{--<li><a href="#" data-nav-section="menu">Menu</a></li>--}}
                        {{--<li><a href="#" data-nav-section="reservation">Reservation</a></li>--}}
                        {{--<li><a href="#" data-nav-section="events">Events</a></li>--}}
                        {{--<li><a href="#" data-nav-section="contact">Contact</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}


        <div class="container-fluid">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.2.0.min.js') }}"></script>
    <script src="{{ asset('js/probootstrap/scripts.min.js') }}"></script>
    <script src="{{ asset('js/probootstrap/custom.min.js') }}"></script>

    <script>
        function navredirect(event) {
            if(event=='services'){
                location.href="/services"
            }else if(event=='services'){

            }

        }
//        toastr.options = {
//            "closeButton": true,
//            "debug": false,
//            "newestOnTop": false,
//            "progressBar": false,
//            "positionClass": "toast-top-right",
//            "preventDuplicates": false,
//            "onclick": null,
//            "showDuration": "300",
//            "hideDuration": "1000",
//            "timeOut": "5000",
//            "extendedTimeOut": "1000",
//            "showEasing": "swing",
//            "hideEasing": "linear",
//            "showMethod": "fadeIn",
//            "hideMethod": "fadeOut"
//        }
    </script>

    @yield('scripts')


</body>
</html>
