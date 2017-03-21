<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-25.less', 'css/type-25.css');
        ?>
        <link href="css/type-25.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-25">

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
                                                <li><a href="#">General Form</a></li>
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
                <div class="col-md-10">

                </div>



            <div class="clear"></div>
        </div>
    </body>
</html>




