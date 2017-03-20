<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  
        <link href="css/daterangepicker.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>        
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/Chart.min.js" type="text/javascript"></script>
        <script src="js/skycons.js" type="text/javascript"></script>
        <script src="js/jquery.vmap.js" type="text/javascript"></script>
        <script src="js/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="js/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <script src="js/gauge.min.js" type="text/javascript"></script>
        <script src="js/jquery.flot.js" type="text/javascript"></script>
        <script src="js/jquery.flot.time.js" type="text/javascript"></script>
        <script src="js/jquery.flot.spline.min.js" type="text/javascript"></script>
        <script src="js/date.js" type="text/javascript"></script>
        <script src="js/moment.min.js" type="text/javascript"></script>
        <script src="js/daterangepicker.js" type="text/javascript"></script>
        <script src="js/custom.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-25">
            <div class="container-fluid dashboard">
                <div class="Row">
                    <div class="col-md-2 left-col">
                        <div class="nav_title">
                            <a href="#"class="site_title">
                                <i class="fa fa-paw"></i> 
                                <span>Gentelella Alela!</span>
                            </a>
                        </div>
                        <div class="clearfix">
                            <div class="col-md-3 profile_pic">
                                <img src="images/img.jpg" alt="..." class="profile_img">
                            </div>
                            <div class=" col-md-9 profile_info">
                                <span>Welcome,</span>
                                <h2>John Doe</h2>
                            </div>
                        </div>
                        <div class="main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav">
                                    <div class="drop">
                                        <div type="button" class="bt" data-toggle="collapse" data-target="#home">
                                            <li>
                                                <a>
                                                    <i class="fa fa-home"></i> Home 
                                                    <span class="fa fa-chevron-down"></span>
                                                </a>
                                            </li>
                                            <h5>&nbsp;</h5>
                                        </div>
                                        <div id="home" class="collapse">
                                            <div class="c_home">
                                                <ul class="nav child_menu">
                                                    <li><a href="#">Dashboard</a></li>
                                                    <li><a href="#">Dashboard2</a></li>
                                                    <li><a href="#">Dashboard3</a></li>
                                                </ul>                  
                                            </div>
                                        </div>
                                    </div>
                                    <!------------------------------------------>
                                    <div class="drop">
                                        <div type="button" class="bt" data-toggle="collapse" data-target="#from">
                                            <a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                            <h5>&nbsp;</h5>
                                        </div>


                                        <div id="from" class="collapse">
                                            <div class="c_home">
                                                <ul class="nav child_menu">
                                                    <li><a href="general-form.php">General Form</a></li>
                                                    <li><a href="#">Advanced Components</a></li>
                                                    <li><a href="#">Form Validation</a></li>
                                                    <li><a href="#">Form Wizard</a></li>
                                                    <li><a href="#">Form Upload</a></li>
                                                    <li><a href="#">Form Buttons</a></li>
                                                </ul>                  
                                            </div>
                                        </div>
                                    </div>
                                    <!------------------------------------------>
                                    <div class="drop">
                                        <div type="button" class="bt" data-toggle="collapse" data-target="#ui">
                                            <a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                                            <h5>&nbsp;</h5>
                                        </div>


                                        <div id="ui" class="collapse">
                                            <div class="c_home">
                                                <ul class="nav child_menu">
                                                    <li><a href="#">General Elements</a></li>
                                                    <li><a href="#">Media Gallery</a></li>
                                                    <li><a href="#">Typography</a></li>
                                                    <li><a href="#">Icons</a></li>
                                                    <li><a href="#">Glyphicons</a></li>
                                                    <li><a href="#">Widgets</a></li>
                                                    <li><a href="#">Invoice</a></li>
                                                    <li><a href="#">Inbox</a></li>
                                                    <li><a href="#">Calendar</a></li>
                                                </ul>                  
                                            </div>
                                        </div>
                                    </div>
                                    <!--------------------------->
                                    <div class="drop">
                                        <div type="button" class="bt" data-toggle="collapse" data-target="#table">
                                            <a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                            <h5>&nbsp;</h5>
                                        </div>


                                        <div id="table" class="collapse">
                                            <div class="c_home">
                                                <ul class="nav child_menu">
                                                    <li><a href="#">Tables</a></li>
                                                    <li><a href="#">Table Dynamic</a></li>
                                                </ul>                  
                                            </div>
                                        </div>
                                    </div>
                                    <!--------------------------->
                                    <div class="drop">
                                        <div type="button" class="bt" data-toggle="collapse" data-target="#data">
                                            <a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                                            <h5>&nbsp;</h5>
                                        </div>


                                        <div id="data" class="collapse">
                                            <div class="c_home">
                                                <ul class="nav child_menu">
                                                    <li><a href="#">Chart JS</a></li>
                                                    <li><a href="#">Chart JS2</a></li>
                                                    <li><a href="#">Moris JS</a></li>
                                                    <li><a href="#">ECharts</a></li>
                                                    <li><a href="#">Other Charts</a></li>
                                                </ul>                  
                                            </div>
                                        </div>
                                    </div>
                                    <!--------------------------->
                                    <div class="drop">
                                        <div type="button" class="bt" data-toggle="collapse" data-target="#layout">
                                            <a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                                            <h5>&nbsp;</h5>
                                        </div>


                                        <div id="layout" class="collapse">
                                            <div class="c_home">
                                                <ul class="nav child_menu">
                                                    <li><a href="#">Fixed Sidebar</a></li>
                                                    <li><a href="#">Fixed Footer</a></li>
                                                </ul>                  
                                            </div>
                                        </div>
                                    </div>
                                    <!--------------------------->

                                </ul>
                            </div>
                            <div class="menu_section">
                                <h3>Live On</h3>
                                <ul class="nav">
                                    <div class="drop">
                                        <div type="button" class="bt" data-toggle="collapse" data-target="#page">
                                            <a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                                            <h5>&nbsp;</h5>
                                        </div>


                                        <div id="page" class="collapse">
                                            <div class="c_home">
                                                <ul class="nav child_menu">
                                                    <li><a href="#">E-commerce</a></li>
                                                    <li><a href="#">Projects</a></li>
                                                    <li><a href="#">Project Detail</a></li>
                                                    <li><a href="#">Contacts</a></li>
                                                    <li><a href="#">Profile</a></li>
                                                </ul>                  
                                            </div>
                                        </div>
                                    </div>
                                    <!--------------------------->
                                    <div class="drop">
                                        <div type="button" class="bt" data-toggle="collapse" data-target="#extras">
                                            <a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                                            <h5>&nbsp;</h5>
                                        </div>


                                        <div id="extras" class="collapse">
                                            <div class="c_home">
                                                <ul class="nav child_menu">
                                                    <li><a href="#">403 Error</a></li>
                                                    <li><a href="#">404 Error</a></li>
                                                    <li><a href="#">500 Error</a></li>
                                                    <li><a href="#">Plain Page</a></li>
                                                    <li><a href="#">Login Page</a></li>
                                                    <li><a href="#">Pricing Tables</a></li>
                                                </ul>                  
                                            </div>
                                        </div>
                                    </div>
                                    <!--------------------------->
                                    <div class="drop">
                                        <div type="button" class="bt" data-toggle="collapse" data-target="#menu">
                                            <a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                                            <h5>&nbsp;</h5>
                                        </div>

                                        <div id="menu" class="collapse">
                                            <div class="c_home">
                                                <ul class="nav child_menu">
                                                    <li><a href="#">Level One</a></li>
                                                    <li>
                                                        <div type="button" class="bt" data-toggle="collapse" data-target="#level">
                                                            <a class="one">Level One<span class="fa fa-chevron-down"></span></a>
                                                            <h5>&nbsp;</h5>
                                                        </div>
                                                        <div id="level" class="collapse">
                                                            <div class="c_level">
                                                                <ul class="tow">
                                                                    <li><a href="#">Level Two</a></li>
                                                                    <li><a href="#">Level Two</a></li>
                                                                    <li><a href="#">Level Two</a></li>
                                                                </ul>                 
                                                            </div>
                                                        </div>


                                                    </li>
                                                    <li><a href="#">Level One</a>
                                                    </li>
                                                </ul>                  
                                            </div>
                                        </div>
                                    </div>
                                    <!--------------------------->
                                    <div class="drop">
                                        <div type="button" class="bt" data-toggle="collapse" data-target="#landing">
                                            <a href="#">
                                                <i class="fa fa-laptop"></i> Landing Page
                                                <span class="label label-success pull-right">Coming Soon</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!---------------------------> 
                                </ul>
                            </div>
                            <!--------------------------->                
                        </div>
                        <div class="sidebar-footer">
                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="" href="#" data-original-title="Logout">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-10 right-col">
                        <div class="row nav_menu">
                            <nav>
                                <div class="nav toggle">
                                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                                </div>

                                <ul class="nav navbar-nav navbar-right">
                                    <div class="drop">
                                        <div type="button" class="bt" data-toggle="collapse" data-target="#john">
                                            <a>
                                                <img src="images/img.jpg" alt="">John Doe
                                                <span class="fa fa-chevron-down"></span>
                                            </a>
                                            <h5>&nbsp;</h5>
                                        </div>


                                        <div id="john" class="collapse">
                                            <div class="c_john">
                                                <ul>
                                                    <li><a> Profile</a></li>
                                                    <li>
                                                        <a>
                                                            <span class="badge bg-red pull-right">50%</span>
                                                            <span>Settings</span>
                                                        </a>
                                                    </li>
                                                    <li><a>Help</a></li>
                                                    <li><a><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                                </ul>                
                                            </div>
                                        </div>
                                    </div>



                                    <div class="drop">
                                        <div type="button" class="bt" data-toggle="collapse" data-target="#mail">
                                            <a>
                                                <i class="fa fa-envelope-o"></i>
                                                <span class="badge bg-green">6</span>
                                            </a>
                                            <h5>&nbsp;</h5>
                                        </div>
                                        <div id="mail" class="collapse">
                                            <div class="c_mail">
                                                <ul>
                                                    <li class="ago">
                                                        <a>
                                                            <span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
                                                            <span>
                                                                <span>John Smith</span>
                                                                <span class="time">3 mins ago</span>
                                                            </span>
                                                            <span class="message">
                                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="ago">
                                                        <a>
                                                            <span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
                                                            <span>
                                                                <span>John Smith</span>
                                                                <span class="time">3 mins ago</span>
                                                            </span>
                                                            <span class="message">
                                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="ago">
                                                        <a>
                                                            <span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
                                                            <span>
                                                                <span>John Smith</span>
                                                                <span class="time">3 mins ago</span>
                                                            </span>
                                                            <span class="message">
                                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="ago">
                                                        <a>
                                                            <span class="image"><img src="images/img.jpg" alt="Profile Image"></span>
                                                            <span>
                                                                <span>John Smith</span>
                                                                <span class="time">3 mins ago</span>
                                                            </span>
                                                            <span class="message">
                                                                Film festivals used to be do-or-die moments for movie makers. They were where...
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="ago">
                                                        <div class="text-center">
                                                            <a>
                                                                <strong>See All Alerts</strong>
                                                                <i class="fa fa-angle-right"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>                
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </nav>
                        </div>
                        <div class="clear"></div>
                        <div class="row content1">
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span>
                                    <i class="fa fa-user"></i> Total Users
                                </span>
                                <div class="count">2500</div>
                                <span>
                                    <i class="green">4% </i> From last Week
                                </span>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span>
                                    <i class="fa fa-clock-o"></i> Average Time
                                </span>
                                <div class="count">123.50</div>
                                <span>
                                    <i class="green">
                                        <i class="fa fa-sort-asc"></i>3% 
                                    </i> From last Week
                                </span>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span>
                                    <i class="fa fa-user"></i> Total Males
                                </span>
                                <div class="count green">2,500</div>
                                <span>
                                    <i class="green">
                                        <i class="fa fa-sort-asc"></i>34% 
                                    </i> From last Week
                                </span>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span>
                                    <i class="fa fa-user"></i> Total Females
                                </span>
                                <div class="count">4,567</div>
                                <span>
                                    <i class="red">
                                        <i class="fa fa-sort-desc"></i>12% 
                                    </i> From last Week
                                </span>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                                <span>
                                    <i class="fa fa-user"></i> Total Collections
                                </span>
                                <div class="count">2,315</div>
                                <span>
                                    <i class="green">
                                        <i class="fa fa-sort-asc"></i>34% 
                                    </i> From last Week
                                </span>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count last">
                                <span>
                                    <i class="fa fa-user"></i> Total Connections
                                </span>
                                <div class="count">7,325</div>
                                <span>
                                    <i class="green">
                                        <i class="fa fa-sort-asc"></i>34% 
                                    </i> From last Week
                                </span>
                            </div>
                        </div>
                        <div class="row content2">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="dashboard_graph">
                                    <div class="row x_title">
                                        <div class="col-md-6">
                                            <h3>Network Activities <small>Graph title sub-title</small></h3>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="reportrange">
                                                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                                <span>February 3, 2017 - March 4, 2017</span> <b class="caret"></b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div id="chart_plot_01" class="demo-placeholder" style="padding: 0px; position: relative;">
                                            <canvas class="flot-base"></canvas>
                                            <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                                <div class="flot-x1-axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                                    <div class="flot-tick-label" style="position: absolute; max-width: 99px; top: 264px; left: 6%; text-align: center;">Jan 01</div>
                                                    <div class="flot-tick-label" style="position: absolute; max-width: 99px; top: 264px; left: 22%; text-align: center;">Jan 02</div>
                                                    <div class="flot-tick-label" style="position: absolute; max-width: 99px; top: 264px; left: 37%; text-align: center;">Jan 03</div>
                                                    <div class="flot-tick-label" style="position: absolute; max-width: 99px; top: 264px; left: 53%; text-align: center;">Jan 04</div>
                                                    <div class="flot-tick-label" style="position: absolute; max-width: 99px; top: 264px; left: 69%; text-align: center;">Jan 05</div>
                                                    <div class="flot-tick-label" style="position: absolute; max-width: 99px; top: 264px; left: 85%; text-align: center;">Jan 06</div>

                                                </div>

                                                <div class="flot-y1-axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                                    <div class="flot-tick-label" style="position: absolute; top: 252px; left: 13px; text-align: right;">0
                                                    </div>
                                                    <div class="flot-tick-label" style="position: absolute; top: 232px; left: 7px; text-align: right;">10</div>
                                                    <div class="flot-tick-label" style="position: absolute; top: 213px; left: 7px; text-align: right;">20</div>
                                                    <div class="flot-tick-label" style="position: absolute; top: 194px; left: 7px; text-align: right;">30</div>
                                                    <div class="flot-tick-label" style="position: absolute; top: 174px; left: 7px; text-align: right;">40</div>
                                                    <div class="flot-tick-label" style="position: absolute; top: 155px; left: 7px; text-align: right;">50</div>
                                                    <div class="flot-tick-label" style="position: absolute; top: 136px; left: 7px; text-align: right;">60</div>
                                                    <div class="flot-tick-label" style="position: absolute; top: 116px; left: 7px; text-align: right;">70</div>
                                                    <div class="flot-tick-label" style="position: absolute; top: 97px; left: 7px; text-align: right;">80</div>
                                                    <div class="flot-tick-label" style="position: absolute; top: 78px; left: 7px; text-align: right;">90</div>
                                                    <div class="flot-tick-label" style="position: absolute; top: 58px; left: 1px; text-align: right;">100</div>
                                                    <div class="flot-tick-label" style="position: absolute; top: 39px; left: 2px; text-align: right;">110</div>
                                                    <div class="flot-tick-label" style="position: absolute; top: 20px; left: 1px; text-align: right;">120</div>
                                                    <div class="flot-tick-label" style="position: absolute; top: 1px; left: 1px; text-align: right;">130</div>
                                                </div>                                       
                                            </div>
                                            <canvas class="flot-overlay"></canvas>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                                        <div class="x_title">
                                            <h2>Top Campaign Performance</h2>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-6">
                                            <div>
                                                <p>Facebook Campaign</p>
                                                <div class="">
                                                    <div class="progress progress_sm" style="width: 76%;">
                                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80" aria-valuenow="79" style="width: 80%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p>Twitter Campaign</p>
                                                <div class="">
                                                    <div class="progress progress_sm" style="width: 76%;">
                                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60" aria-valuenow="59" style="width: 60%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-6">
                                            <div>
                                                <p>Conventional Media</p>
                                                <div class="">
                                                    <div class="progress progress_sm" style="width: 76%;">
                                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40" aria-valuenow="39" style="width: 40%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p>Bill boards</p>
                                                <div class="">
                                                    <div class="progress progress_sm" style="width: 76%;">
                                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" aria-valuenow="49" style="width: 50%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row content3">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>App Versions</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <h4>App Usage across versions</h4>
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span>0.1.5.2</span>
                                            </div>
                                            <div class="w_55">
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w_20">
                                                <span>123k</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span>0.1.5.3</span>
                                            </div>
                                            <div class=" w_55">
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" w_20">
                                                <span>53k</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span>0.1.5.4</span>
                                            </div>
                                            <div class=" w_55">
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" w_20">
                                                <span>23k</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span>0.1.5.5</span>
                                            </div>
                                            <div class=" w_55">
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w_20">
                                                <span>3k</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="widget_summary">
                                            <div class="w_left w_25">
                                                <span>0.1.5.6</span>
                                            </div>
                                            <div class="w_55">
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w_20">
                                                <span>1k</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Device Usage</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <table class="" style="width:100%">
                                            <tr>
                                                <th style="width:37%;">
                                                    <p>Top 5</p>
                                                </th>
                                                <th>
                                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                                        <p class="">Device</p>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                                        <p class="">Progress</p>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                                                </td>
                                                <td>
                                                    <table class="tile_info">
                                                        <tr>
                                                            <td>
                                                                <p><i class="fa fa-square blue"></i>IOS </p>
                                                            </td>
                                                            <td>30%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p><i class="fa fa-square green"></i>Android </p>
                                                            </td>
                                                            <td>10%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p><i class="fa fa-square purple"></i>Blackberry </p>
                                                            </td>
                                                            <td>20%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p><i class="fa fa-square aero"></i>Symbian </p>
                                                            </td>
                                                            <td>15%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p><i class="fa fa-square red"></i>Others </p>
                                                            </td>
                                                            <td>30%</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Quick Settings</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="">
                                            <ul class="quick-list">
                                                <li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
                                                </li>
                                                <li><i class="fa fa-bars"></i><a href="#">Subscription</a>
                                                </li>
                                                <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                                                <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                                                </li>
                                                <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                                                <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                                                </li>
                                                <li><i class="fa fa-area-chart"></i><a href="#">Logout</a>
                                                </li>
                                            </ul>

                                            <div class="sidebar-widget">
                                                <h4>Profile Completion</h4>
                                                <canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas>
                                                <div class="">
                                                    <span id="gauge-text" class=" pull-left">0</span>
                                                    <span class="pull-left">%</span>
                                                    <span class=" pull-right">100%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row content4">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Recent Activities <small>Sessions</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="">

                                            <ul class="list-unstyled timeline widget">
                                                <li>
                                                    <div class="block">
                                                        <h2 class="title">
                                                            <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>13 hours ago</span> by <a>Jane Smith</a>
                                                        </div>
                                                        <p>Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block">
                                                        <h2 class="title">
                                                            <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>13 hours ago</span> by <a>Jane Smith</a>
                                                        </div>
                                                        <p>Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block">
                                                        <h2 class="title">
                                                            <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>13 hours ago</span> by <a>Jane Smith</a>
                                                        </div>
                                                        <p>Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block">
                                                        <h2 class="title">
                                                            <a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
                                                        </h2>
                                                        <div class="byline">
                                                            <span>13 hours ago</span> by <a>Jane Smith</a>
                                                        </div>
                                                        <p>Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="content5">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2>Visitors location <small>geo-presentation</small></h2>
                                                    <ul class="nav navbar-right panel_toolbox">
                                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">Settings 1</a>
                                                                </li>
                                                                <li><a href="#">Settings 2</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">
                                                    <div class="col-md-4">
                                                        <h2>125.7k Views from 60 countries</h2>

                                                        <table class="countries_list">
                                                            <tbody>
                                                                <tr>
                                                                    <td>United States</td>
                                                                    <td class=" text-right">33%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>France</td>
                                                                    <td class="text-right">27%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Germany</td>
                                                                    <td class="text-right">16%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Spain</td>
                                                                    <td class="text-right">11%</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Britain</td>
                                                                    <td class="text-right">10%</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div id="world-map-gdp" class="col-md-8 col-sm-12 col-xs-12" style="height:230px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2>To Do List <small>Sample tasks</small></h2>
                                                    <ul class="nav navbar-right panel_toolbox">
                                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">Settings 1</a>
                                                                </li>
                                                                <li><a href="#">Settings 2</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">

                                                    <div class="">
                                                        <ul class="to_do">
                                                            <li>
                                                                <p>
                                                                    <input type="checkbox" class="flat"> Schedule meeting with new client </p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <input type="checkbox" class="flat"> Create email address for new intern</p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <input type="checkbox" class="flat"> Create email address for new intern</p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                                                            </li>
                                                            <li>
                                                                <p>
                                                                    <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End to do list -->

                                        <!-- start of weather widget -->
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2>Daily active users <small>Sessions</small></h2>
                                                    <ul class="nav navbar-right panel_toolbox">
                                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">Settings 1</a>
                                                                </li>
                                                                <li><a href="#">Settings 2</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class=""><b>Monday</b>, 07:30 AM
                                                                <span>F</span>
                                                                <span><b>C</b></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="weather-text">
                                                                <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="weather-text">
                                                        <h3 class="degrees">23</h3>
                                                    </div>


                                                    <div class="clearfix"></div>

                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                            <div class="daily-weather">
                                                                <h2 class="day">Mon</h2>
                                                                <h3 class="degrees">25</h3>
                                                                <canvas id="clear-day" width="32" height="32"></canvas>
                                                                <h5>15 <i>km/h</i></h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                            <div class="daily-weather">
                                                                <h2 class="day">Tue</h2>
                                                                <h3 class="degrees">25</h3>
                                                                <canvas height="32" width="32" id="rain"></canvas>
                                                                <h5>12 <i>km/h</i></h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                            <div class="daily-weather">
                                                                <h2 class="day">Wed</h2>
                                                                <h3 class="degrees">27</h3>
                                                                <canvas height="32" width="32" id="snow"></canvas>
                                                                <h5>14 <i>km/h</i></h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                            <div class="daily-weather">
                                                                <h2 class="day">Thu</h2>
                                                                <h3 class="degrees">28</h3>
                                                                <canvas height="32" width="32" id="sleet"></canvas>
                                                                <h5>15 <i>km/h</i></h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                            <div class="daily-weather">
                                                                <h2 class="day">Fri</h2>
                                                                <h3 class="degrees">28</h3>
                                                                <canvas height="32" width="32" id="wind"></canvas>
                                                                <h5>11 <i>km/h</i></h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                            <div class="daily-weather">
                                                                <h2 class="day">Sat</h2>
                                                                <h3 class="degrees">26</h3>
                                                                <canvas height="32" width="32" id="cloudy"></canvas>
                                                                <h5>10 <i>km/h</i></h5>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- end of weather widget -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <footer>
                            <div class="pull-right">
                                Gentelella - Bootstrap Admin Template by <a href="#">Colorlib</a>
                            </div>
                            <div class="clearfix"></div>
                        </footer>
                    </div>

                </div>

            </div>
        </div>
    </body>
</html>




