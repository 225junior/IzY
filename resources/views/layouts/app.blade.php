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



    <link href="{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

  </head>


</head>
<body class="nav-md">
    <div id="app" class="container body">
        <div class="main_container">


            @Auth()
                <!-- side bar -->

                        @include('layouts.sidebar')


                <!-- fin side bar  -->

                <!-- topbar -->

                        @include('layouts.topbar')

                <!-- fin topbar -->



			<div class="right_col" role="main" style="min-height: 5183px;">
				<div class="">

					<!-- Titre de page -->
					<div class="page-title">
						<div class="title_left">
							<h3>Tableau de Bord</h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Rechercher...">
									<span class="input-group-btn">
										<button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
									</span>
								</div>
							</div>
						</div><!-- fin title_right -->
					</div><!-- fin page-title -->
					@endauth()



					<div class="clearfix"></div>


						@yield('content')

				</div>
			</div><!-- righr_col -->
        </div><!-- main_container -->
    </div><!-- #app -->

    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js')}}" async></script>
    <!-- Bootstrap -->
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}" async></script>
    <!-- FastClick -->
    <script src="{{ asset('vendors/fastclick/lib/fastclick.js')}}" async></script>
    <!-- NProgress -->
    <script src="{{ asset('vendors/nprogress/nprogress.js')}}" async></script>
    <!-- Chart.js -->
    <script src="{{ asset('vendors/Chart.js/dist/Chart.min.js')}}" async></script>
    <!-- gauge.js -->
    <script src="{{ asset('vendors/gauge.js/dist/gauge.min.js')}}" async></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}" async></script>
    <!-- iCheck -->
    <script src="{{ asset('vendors/iCheck/icheck.min.js')}}" async></script>
    <!-- Skycons -->
    <script src="{{ asset('vendors/skycons/skycons.js')}}" async></script>
    <!-- Flot -->
    <script src="{{ asset('vendors/Flot/jquery.flot.js')}}" async></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.pie.js')}}" async></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.time.js')}}" async></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.stack.js')}}" async></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.resize.js')}}" async></script>
    <!-- Flot plugins -->
    <script src="{{ asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}" async></script>
    <script src="{{ asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}" async></script>
    <script src="{{ asset('vendors/flot.curvedlines/curvedLines.js')}}" async></script>
    <!-- DateJS -->
    <script src="{{ asset('vendors/DateJS/build/date.js')}}" async></script>
    <!-- JQVMap -->
    <script src="{{ asset('vendors/jqvmap/dist/jquery.vmap.js')}}" async></script>
    <script src="{{ asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}" async></script>
    <script src="{{ asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}" async></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('vendors/moment/min/moment.min.js')}}" async></script>
    <script src="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}" async></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('build/js/custom.js')}}" async></script>
</body>
</html>
