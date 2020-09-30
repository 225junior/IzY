<div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>IzyConnect</span></a>
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
                                    <ul class="nav side-menu" style="">
                                        <li class="active"><a><i class="fa fa-home"></i> Home</a></li>
                                        <li ><a><i class="fa fa-users"></i> Users</a></li>
                                        <li>
                                            <a><i class="fa fa-edit"></i> Ressources <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="{{ Route('regions.index') }}">Regions</a></li>
                                                <li><a href="{{ Route('villes.index') }}">Viles</a></li>
                                                <li><a href="{{ Route('communes.index') }}">Communes</a></li>
                                                <li><a href="{{ Route('quartiers.index') }}">Quartiers</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /sidebar menu -->

                        </div>

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
