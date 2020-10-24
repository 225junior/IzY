<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                        	<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>IzyConnect</span></a>
                        </div>

                        <div class="clearfix"></div>

                            <!-- menu profile quick info -->
                                <div class="profile clearfix">
                                    <div class="profile_pic">
                                        <img src="{{ asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
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
                    <ul class="nav side-menu" style="">
                        <li class=" {{ Route::currentRouteNamed('home') ? 'active' : '' }}"><a href="{{ Route('home') }} "><i class="fa fa-home"></i> Home</a></li>
                        <li class="{{ request()->routeIs('ursers.*') ? 'active' : '' }}"><a><i class="fa fa-users"></i> Users</a></li>
                        <li class="{{ request()->routeIs('prestataires.*') ? 'active' : '' }}"><a href="{{ Route('prestataires.index') }}"><i class="fa fa-briefcase"></i> Prestataires</a></li>
					</ul>
				</div>

				<div class="menu_section">
					<h3>Ressources </h3>
					<ul class="nav side-menu">

						<li>
							<a><i class="fa fa-list"></i> Prestations <span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu" style="display: none;">
								<li class="{{ request()->routeIs('domaines.*')?'current-page':'' }}"><a href="{{ Route('domaines.index') }}"> Domaines</a></li>
								<li class="{{ request()->routeIs('cards.*')?'current-page':'' }}"><a href="{{ Route('cards.index') }}"> {{__("Carte d'identité")}}</a></li>
								<li class="{{ request()->routeIs('services.*')?'current-page':'' }}"><a href="{{ Route('services.index') }}"> Services </a></li>
							</ul>
						</li>
						<li>
							<a><i class="fa fa-building-o"></i> Situation Géo<span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu" style="display: none;">
								<li class="{{ request()->routeIs('regions.*')?'current-page':'' }}"><a href="{{ Route('regions.index') }}">Regions</a></li>
								<li class="{{ request()->routeIs('villes.*') ? 'current-page' : '' }}"><a href="{{ Route('villes.index') }}">Viles</a></li>
								<li class="{{ request()->routeIs('communes.*') ? 'current-page' : '' }}"><a href="{{ Route('communes.index') }}">Communes</a></li>
								<li class="{{ request()->routeIs('quartiers.*') ? 'current-page' : '' }}"><a href="{{ Route('quartiers.index') }}">Quartiers</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- menu_section -->
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
