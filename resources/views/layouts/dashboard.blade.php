<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Finvat') }}</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- Styles -->
        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

            <script src="{{ asset('js/jquery.3.2.1.min.js') }}"></script>
                    <script src="{{ asset('js/popper.min.js') }}"></script>

            <script src="{{ asset('js/bootstrap.min.js') }}"></script>


@yield('customStyle')
</head>
<body>
    <div class="container-fluid">
    	<div class="wrapper">
        <div class="sidebar"  data-color="orange" >
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="{{ config('app.url', 'www.finvat.com') }}" class="simple-text">
                        FINVAT
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>HOME</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('account/*') || Request::is('account')  ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('account') }}">
                            <i class="nc-icon nc-money-coins"></i>
                            <p>CUENTAS</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('financialstatus') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('financial-position') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>POSICIÓN FINANCIERA</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('forecast') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('forecast') }}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>PLAN FINANCIERO</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('profile') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('profile') }}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>PERFIL</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" ">
                            <i class="nc-icon nc-settings-tool-66"></i>
                            <p>CONFIGURACIÓN</p>
                        </a>
                    </li>
    
                    <li class="nav-item active-pro">
                        <a class="nav-link active" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="nc-icon nc-alien-33"></i>
                            <p> 
                                Logout

                             </p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            	@yield('navbar')



            <!-- content section -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>





            <!-- footer section -->
            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="{{ config('app.name', 'Finvat') }}">FinVat</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>

    </div>

    <!-- Scripts -->

    <script src="{{ asset('js/dashboard.js') }}"></script>

    @yield('customScript')
</body>
</html>
