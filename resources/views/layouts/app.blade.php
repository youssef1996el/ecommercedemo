<!doctype html>
<html lang="en" >
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Register</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">



            <!--favicon-->
        <link rel="shortcut icon" href="https://bshopen.themeposh.net/public/media/06082021041057-favicon.ico" type="image/x-icon">
        <link rel="icon" href="https://bshopen.themeposh.net/public/media/06082021041057-favicon.ico" type="image/x-icon">
        <!-- css -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

            <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
            <style type="text/css">
                :root {
                --theme-color: #c62f2f;
                --menu-background-color: #2d3748;
                }
            </style>
            <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}">
            <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{asset('css/jquery.gritter.min.css')}}">
            <link rel="stylesheet" href="{{asset('css/style.css')}}">
            <link rel="stylesheet" href="{{asset('css/responsive.css')}}">





	</head>
    <body>
        <!-- js -->
        <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/scrolltop.js')}}"></script>
        <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.popupoverlay.min.js')}}"></script>
        <script src="{{asset('js/jquery.gritter.min.js')}}"></script>

        <script>
            var is_rtl = "0";
            if(is_rtl == 1){
                var isRTL = true;
            }else{
                var isRTL = false;
            }
            var theme_color = "#c62f2f";
            var base_url = "https://bshopen.themeposh.net";
            var public_path = "https://bshopen.themeposh.net/public";
        </script>
        <script src="https://bshopen.themeposh.net/public/frontend/js/scripts.js"></script>
        <script src="https://bshopen.themeposh.net/public/frontend/pages/cart.js"></script>
            <div class="custom-popup light width-100 dnone" id="lightCustomModal">
            <div class="padding-md">
                <h4 class="m-top-none"></h4>
            </div>
            <div class="text-center">
                <a href="javascript:void(0);" class="btn blue-btn lightCustomModal_close mr-10" onClick="onConfirm()">Confirm</a>
                <a href="javascript:void(0);" class="btn danger-btn lightCustomModal_close">Cancel</a>
            </div>
        </div>
        <a href="#lightCustomModal" class="btn btn-warning btn-small lightCustomModal_open dnone">Edit</a>
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>
        @yield('content')

    </body>
</html>



{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}
