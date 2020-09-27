<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

        <!-- apell des elements du template -->
            <!-- Bootstrap -->
            <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
            <!-- Font Awesome -->
            <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
            <!-- NProgress -->
            <link href="{{ asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
            <!-- iCheck -->
            <link href="{{ asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

            <!-- bootstrap-progressbar -->
            <link href="{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
            <!-- JQVMap -->
            <link href="{{ asset('vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
            <!-- bootstrap-daterangepicker -->
            <link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

            <!-- Custom Theme Style -->
            <link href="{{ asset('../build/css/custom.min.css')}}" rel="stylesheet">
        <!-- fin appel -->


</head>
<body class="nav-md">
    <div id="app" class="container body">
        <div class="main_container">

            <!-- side bar -->
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{Auth::user()->name}}</h2>
                        </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br>

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section active">
                                <h3>General</h3>
                                <ul class="nav side-menu" style="">
                                    <li class="active"><a><i class="fa fa-home"></i> Home</a></li>
                                    <li>
                                        <a><i class="fa fa-edit"></i> Ressources <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="form.html">Regions</a></li>
                                            <li><a href="form_advanced.html">Viles</a></li>
                                            <li><a href="form_validation.html">Communes</a></li>
                                            <li><a href="form_wizards.html">Quartiers</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="general_elements.html">General Elements</a></li>
                                            <li><a href="media_gallery.html">Media Gallery</a></li>
                                            <li><a href="typography.html">Typography</a></li>
                                            <li><a href="icons.html">Icons</a></li>
                                            <li><a href="glyphicons.html">Glyphicons</a></li>
                                            <li><a href="widgets.html">Widgets</a></li>
                                            <li><a href="invoice.html">Invoice</a></li>
                                            <li><a href="inbox.html">Inbox</a></li>
                                            <li><a href="calendar.html">Calendar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                            <div class="sidebar-footer hidden-small">
                                <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
                                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="" data-original-title="FullScreen">
                                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
                                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="" href="login.html" data-original-title="Logout">
                                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                                </a>
                            </div>
                        <!-- /menu footer buttons -->

                    </div>
                </div>
            <!-- fin side bar  -->
            <!-- menu -->
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">
                    <div class="row">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                    </div>
                </nav>
            <!-- fin menu -->





            <main class="py-4">
                @yield('content')
            </main>


        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{ asset('vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{ asset('vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{ asset('vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{ asset('vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{ asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{ asset('vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{ asset('vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{ asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{ asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('build/js/custom.min.js')}}"></script>
</body>
</html>
