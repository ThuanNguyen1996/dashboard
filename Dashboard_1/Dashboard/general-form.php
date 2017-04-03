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
        $less->compileFile('less/general-form.less', 'css/general-form.css');
        ?>
        <link href="css/general-form.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/nump.js" type="text/javascript"></script>
        <script src="js/demo1.js" type="text/javascript"></script>
        <script src="js/error.js" type="text/javascript"></script>
        <script src="js/flexible-menu.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-25">
            <div class="container-fluid dashboard">
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
                                                <li><a href="john.php">Dashboard</a></li>
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
                                                <li><a href="form-validation.php">Form Validation</a></li>
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
                                                            <ul class="tow">
                                                                <li><a href="#">Level Two</a></li>
                                                                <li><a href="#">Level Two</a></li>
                                                                <li><a href="#">Level Two</a></li>
                                                            </ul>                 
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
                            <a href="#menu-toggle" id="menu-toggle" class="btn btn-default toggled"><i class="fa fa-bars"></i></a>
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
                    <!-------------------------------------->
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Form Elements</h3>
                        </div>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 pull-right ">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-------------------------------------->

                    <div class="row content2">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form Design <small>different form elements</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a data-toggle="collapse" href="#collapse1"><i class="fa fa-chevron-up"></i></a>
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
                                <div id="collapse1" class="panel-collapse">
                                    <br>
                                    <form class="form-horizontal" novalidate="">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span>*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="name" class="name"class="form-control col-md-7 col-xs-12">
                                                <p class="err"></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span>*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="name" class="name"class="form-control col-md-7 col-xs-12">
                                                <p class="err"></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input  class="form-control col-md-7 col-xs-12" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div id="gender" class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                        <input type="radio"value="male"> &nbsp; Male &nbsp;
                                                    </label>
                                                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                        <input type="radio" name="gender" value="female" data-parsley-multiple="gender"> Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span>*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="name"class="name" class=" form-control col-md-7 col-xs-12"type="text">
                                                <p class="err"></p>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button class="btn btn-primary" type="button">Cancel</button>
                                                <button class="btn btn-primary" type="reset">Reset</button>
                                                <button class="btn btn-success"type="button" onclick="Function()">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-------------------------------------->
                    <div class="row ">
                        <div class="col-md-6 col-xs-12">
                            <div class="content3">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Form Design <small>different form elements</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse" href="#collapse2"><i class="fa fa-chevron-up"></i></a>
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
                                    <div id="collapse2" class="pannel-collapse">
                                        <br>
                                        <form class="form-horizontal">

                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control feedback-left"placeholder="First Name">
                                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control" placeholder="Last Name">
                                                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control feedback-left" placeholder="Email">
                                                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                <input type="text" class="form-control" placeholder="Phone">
                                                <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" class="form-control" placeholder="Default Input">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Disabled Input </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Read-Only Input</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span>*</span>
                                                </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input class=" form-control col-md-7 col-xs-12" required="required" type="text">
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                    <button type="button" class="btn btn-primary">Cancel</button>
                                                    <button class="btn btn-primary" type="reset">Reset</button>
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>                    
                            </div>
                            <!-------------------------------------->

                            <div class="content4">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Star Rating</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse" href="#collapse3"><i class="fa fa-chevron-up"></i></a>
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
                                    <div id="collapse3" class="pannel-collapse">
                                        <h4>Star Ratings<small> Hover and click on a star</small></h4>
                                        <div>
                                            <div class="starrr"></div>
                                            You gave a rating of <span>0</span> star(s)
                                        </div>

                                        <p>Also you can give a default rating by adding attribute data-rating</p>
                                        <div class="starrr"></div>
                                        You gave a rating of <span>4</span> star(s)
                                    </div>
                                </div>
                            </div>
                            <!-------------------------------------->
                            <div class=" content5">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Registration Form <small>Click to validate</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse" href="#collapse4"><i class="fa fa-chevron-up"></i></a>
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
                                    <div id="collapse4"class="pannel-collapse">
                                        <form class="form-horizontal" novalidate="">
                                            <div class="form-group">
                                                <label for="fullname">Full Name * :</label>
                                                <input type="text" class="fullname form-control" name="fullname" required="">
                                                <p class="value"></p>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email * :</label>
                                                <input type="email" class="fullname form-control" name="email" data-parsley-trigger="change" required="">
                                                <p class="value"></p>
                                            </div>
                                            <label>Gender *:</label>
                                            <br>
                                            <label>
                                                M:
                                                <div class="iradio_flat-green checked" style="position: relative;">
                                                    <input type="radio" name="gender"value="M" checked="" required="" data-parsley-multiple="gender">

                                                </div>
                                                F:
                                                <div class="iradio_flat-green">
                                                    <input type="radio" name="gender"value="F" data-parsley-multiple="gender">

                                                </div>
                                            </label>
                                            <br>
                                            <label>Hobbies (2 minimum):</label>
                                            <br>
                                            <label style="padding: 5px;">
                                                <div class="icheckbox_flat-green" >
                                                    <input type="checkbox" name="hobbies[]"value="ski">                                                  
                                                </div> Skiing
                                                <br>
                                                <div class="icheckbox_flat-green">
                                                    <input type="checkbox" name="hobbies[]"value="run">                                                   
                                                </div> Running
                                                <br>
                                                <div class="icheckbox_flat-green">
                                                    <input type="checkbox" name="hobbies[]" value="eat">                                                   
                                                </div> Eating
                                                <br>
                                                <div class="icheckbox_flat-green">
                                                    <input type="checkbox" name="hobbies[]" value="sleep">                                                    
                                                </div> Sleeping
                                                <br>
                                            </label>
                                            <br>
                                            <label for="heard">Heard us by *:</label>
                                            <div class="form-group">
                                                <select class="fullname form-control" required="">
                                                    <option value="">Choose..</option>
                                                    <option value="press">Press</option>
                                                    <option value="net">Internet</option>
                                                    <option value="mouth">Word of mouth</option>                                            
                                                </select>
                                                <p class="value"></p>
                                            </div>

                                            <div class="form-group">
                                                <label for="message">Message (20 chars min, 100 max) :</label>
                                                <textarea  id="textarea"class="fullname form-control"  data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." ></textarea>
                                                <p class="value"></p>
                                            </div>



                                            <br>
                                            <span class="btn btn-primary" onclick="Function1()">Validate form</span>                                      
                                            </p> 
                                        </form>
                                        <!-- end form for validations -->

                                    </div>
                                </div>
                            </div>

                            <!-------------------------------------->

                        </div>

                        <div class="col-md-6 col-xs-12">
                            <div class="content6">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Form Basic Elements <small>different form elements</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse" href="#collapse5"><i class="fa fa-chevron-up"></i></a>
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
                                    <div id="collapse5"class="pannel-collapse">
                                        <br>
                                        <form class="form-horizontal">

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" class="form-control" placeholder="Default Input">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Disabled Input </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Read-Only Input</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span>*</span>
                                                </label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <textarea class="form-control" rows="3" placeholder="rows=&quot;3&quot;"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="password" class="form-control" value="passwordonetwo">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">AutoComplete</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" name="country"class="form-control col-md-10">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <select class="form-control">
                                                        <option>Choose option</option>
                                                        <option>Option one</option>
                                                        <option>Option two</option>
                                                        <option>Option three</option>
                                                        <option>Option four</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Custom</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <select class="form-control" tabindex="-1">
                                                        <option></option>
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="WA">Washington</option>
                                                        <option value="AZ">Arizona</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="WY">Wyoming</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Grouped</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <select class="form-control">
                                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                                            <option value="AK">Alaska</option>
                                                            <option value="HI">Hawaii</option>
                                                        </optgroup>
                                                        <optgroup label="Pacific Time Zone">
                                                            <option value="CA">California</option>
                                                            <option value="NV">Nevada</option>
                                                            <option value="OR">Oregon</option>
                                                            <option value="WA">Washington</option>
                                                        </optgroup>
                                                        <optgroup label="Mountain Time Zone">
                                                            <option value="AZ">Arizona</option>
                                                            <option value="CO">Colorado</option>
                                                            <option value="ID">Idaho</option>
                                                            <option value="MT">Montana</option>
                                                            <option value="NE">Nebraska</option>
                                                            <option value="NM">New Mexico</option>
                                                            <option value="ND">North Dakota</option>
                                                            <option value="UT">Utah</option>
                                                            <option value="WY">Wyoming</option>
                                                        </optgroup>
                                                        <optgroup label="Central Time Zone">
                                                            <option value="AL">Alabama</option>
                                                            <option value="AR">Arkansas</option>
                                                            <option value="IL">Illinois</option>
                                                            <option value="IA">Iowa</option>
                                                            <option value="KS">Kansas</option>
                                                            <option value="KY">Kentucky</option>
                                                            <option value="LA">Louisiana</option>
                                                            <option value="MN">Minnesota</option>
                                                            <option value="MS">Mississippi</option>
                                                            <option value="MO">Missouri</option>
                                                            <option value="OK">Oklahoma</option>
                                                            <option value="SD">South Dakota</option>
                                                            <option value="TX">Texas</option>
                                                            <option value="TN">Tennessee</option>
                                                            <option value="WI">Wisconsin</option>
                                                        </optgroup>
                                                        <optgroup label="Eastern Time Zone">
                                                            <option value="CT">Connecticut</option>
                                                            <option value="DE">Delaware</option>
                                                            <option value="FL">Florida</option>
                                                            <option value="GA">Georgia</option>
                                                            <option value="IN">Indiana</option>
                                                            <option value="ME">Maine</option>
                                                            <option value="MD">Maryland</option>
                                                            <option value="MA">Massachusetts</option>
                                                            <option value="MI">Michigan</option>
                                                            <option value="NH">New Hampshire</option>
                                                            <option value="NJ">New Jersey</option>
                                                            <option value="NY">New York</option>
                                                            <option value="NC">North Carolina</option>
                                                            <option value="OH">Ohio</option>
                                                            <option value="PA">Pennsylvania</option>
                                                            <option value="RI">Rhode Island</option>
                                                            <option value="SC">South Carolina</option>
                                                            <option value="VT">Vermont</option>
                                                            <option value="VA">Virginia</option>
                                                            <option value="WV">West Virginia</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Multiple</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <select class="form-control" multiple="multiple">
                                                        <option>Choose option</option>
                                                        <option>Option one</option>
                                                        <option>Option two</option>
                                                        <option>Option three</option>
                                                        <option>Option four</option>
                                                        <option>Option five</option>
                                                        <option>Option six</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Input Tags</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" class="tags form-control" value="social, adverts, sales" data-tagsinput-init="true" style="display: none;">
                                                    <div class="tagsinput" style="width: auto; min-height: 100px; height: 100px;">
                                                        <span class="tag1">
                                                            <span>social</span>
                                                            <a id="close-link1" href="#">x</a>
                                                        </span>
                                                        <span class="tag2">
                                                            <span>adverts</span>
                                                            <a id="close-link2" href="#">x</a>
                                                        </span>
                                                        <span class="tag3">
                                                            <span>sales</span>
                                                            <a id="close-link3" href="#">x</a>
                                                        </span>
                                                        <div class="form-group">
                                                            <input id="tags_1_tag" value="" placeholder="add a tag" style="color: rgb(102, 102, 102); width: 72px;">
                                                        </div>
                                                    </div>                                        
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Checkboxes and radios
                                                    <br>
                                                    <small>Normal Bootstrap elements</small>
                                                </label>

                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value=""> Option one. select more than one options
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value=""> Option two. select more than one options
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" checked="" value="option1" name="optionsRadios"> Option one. only select one option
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" value="option2" name="optionsRadios"> Option two. only select one option
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Checkboxes and radios
                                                    <br>
                                                    <small >Normal Bootstrap elements</small>
                                                </label>

                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="icheckbox_flat-green checked" style="position: relative;">
                                                                <input type="checkbox" checked="checked" style="position: absolute; opacity: 0;">
                                                                <ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                            </div> Checked
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="icheckbox_flat-green" style="position: relative;">
                                                                <input type="checkbox" style="position: absolute; opacity: 0;">
                                                                <ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                            </div> Unchecked
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="icheckbox_flat-green disabled" style="position: relative;">
                                                                <input type="checkbox"disabled="disabled" style="position: absolute; opacity: 0;">
                                                                <ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                            </div> Disabled
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <div class="icheckbox_flat-green checked disabled" style="position: relative;">
                                                                <input type="checkbox"disabled="disabled" checked="checked" style="position: absolute; opacity: 0;">
                                                                <ins  style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                            </div> Disabled &amp; checked
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <div class="iradio_flat-green checked" style="position: relative;">
                                                                <input type="radio" checked="" name="iCheck" style="position: absolute; opacity: 0;">
                                                                <ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                            </div> Checked
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <div class="iradio_flat-green" style="position: relative;">
                                                                <input type="radio" name="iCheck" style="position: absolute; opacity: 0;">
                                                                <ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                            </div> Unchecked
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <div class="iradio_flat-green disabled" style="position: relative;">
                                                                <input type="radio" name="iCheck" disabled="disabled" style="position: absolute; opacity: 0;">
                                                                <ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                            </div> Disabled
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <div class="iradio_flat-green checked disabled" style="position: relative;">
                                                                <input type="radio"name="iCheck3" disabled="disabled" checked="" style="position: absolute; opacity: 0;">
                                                                <ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                            </div> Disabled &amp; Checked
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Switch</label>
                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                    <div class="">
                                                        <label>
                                                            <input type="checkbox" checked="" data-switchery="true" style="display: none;">
                                                            <span class="switchery " style="background-color: rgb(38, 185, 154); border-color: rgb(38, 185, 154); box-shadow: rgb(38, 185, 154) 0px 0px 0px 11px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;">
                                                                <small style="left: 12px; background-color: rgb(255, 255, 255); transition: background-color 0.4s, left 0.2s;"></small>
                                                            </span> Checked
                                                        </label>
                                                    </div>
                                                    <div class="">
                                                        <label>
                                                            <input type="checkbox" data-switchery="true" style="display: none;">
                                                            <span class="switchery" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s, box-shadow 0.4s;">
                                                                <small style="left: 0px; transition: background-color 0.4s, left 0.2s;"></small>
                                                            </span> Unchecked
                                                        </label>
                                                    </div>
                                                    <div class="">
                                                        <label>
                                                            <input type="checkbox" disabled="disabled" data-switchery="true" readonly="" style="display: none;">
                                                            <span class="switchery " style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s, box-shadow 0.4s; opacity: 0.5;">
                                                                <small style="left: 0px; transition: background-color 0.4s, left 0.2s;"></small>
                                                            </span> Disabled
                                                        </label>
                                                    </div>
                                                    <div class="">
                                                        <label>
                                                            <input type="checkbox"  disabled="disabled" checked="checked" data-switchery="true" readonly="" style="display: none;">
                                                            <span class="switchery " style="background-color: rgb(38, 185, 154); border-color: rgb(38, 185, 154); box-shadow: rgb(38, 185, 154) 0px 0px 0px 11px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s; opacity: 0.5;">
                                                                <small style="left: 12px; background-color: rgb(255, 255, 255); transition: background-color 0.4s, left 0.2s;"></small>
                                                            </span> Disabled Checked
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                    <button type="button" class="btn btn-primary">Cancel</button>
                                                    <button type="reset" class="btn btn-primary">Reset</button>
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="content7">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Form Buttons <small>Sessions</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a data-toggle="collapse" href="#collapse6"><i class="fa fa-chevron-up"></i></a>
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
                                    <div id="collapse6"class="pannel-collapse">

                                        <form class="form-horizontal">

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Button addons</label>

                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-primary">Go!</button>
                                                        </span>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-primary">Go!</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="divider-dashed"></div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Button addons</label>

                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                        <div class="input-group-btn">
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                                <li><a href="#">Action</a>
                                                                </li>
                                                                <li><a href="#">Another action</a>
                                                                </li>
                                                                <li><a href="#">Something else here</a>
                                                                </li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Separated link</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- /btn-group -->
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-primary">Go!</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!-------------------------------------->
                    <div class="row content8">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Text areas<small>Sessions</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a data-toggle="collapse" href="#collapse7"><i class="fa fa-chevron-up"></i></a>
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
                                <div id="collapse7" class="pannel-collapse">                 
                                    <div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor-one">
                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                            </ul>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a data-edit="fontSize 5">
                                                        <p style="font-size:17px">Huge</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-edit="fontSize 3">
                                                        <p style="font-size:14px">Normal</p>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-edit="fontSize 1">
                                                        <p style="font-size:11px">Small</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                            <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                            <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                            <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                            <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                                            <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                                            <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                            <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                            <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                            <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                                            <div class="dropdown-menu">
                                                <input placeholder="URL" type="text" data-edit="createLink">
                                                <button class="btn" type="button">Add</button>
                                            </div>
                                            <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" title="Insert picture (or just drag &amp; drop)"><i class="fa fa-picture-o"></i></a>
                                            <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
                                        </div>

                                        <div class="btn-group">
                                            <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                            <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                                        </div>
                                    </div>

                                    <div class="editor-wrapper" contenteditable="true"></div>

                                    <textarea name="descr" id="descr" style="display:none;"></textarea>

                                    <br>

                                    <div class="ln_solid"></div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Resizable Text area</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <textarea class=" form-control" placeholder="This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-------------------------------------->
                    <div class="row content9">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form Input Grid <small>form input </small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a data-toggle="collapse" href="#collapse8"><i class="fa fa-chevron-up"></i></a>
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
                                <div id="collapse8" class="pannel-collapse">

                                    <div class="row">

                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-12" class="form-control">
                                        </div>

                                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-6" class="form-control">
                                        </div>

                                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-6" class="form-control">
                                        </div>


                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-4" class="form-control">
                                        </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-4" class="form-control">
                                        </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-4" class="form-control">
                                        </div>


                                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-3" class="form-control">
                                        </div>

                                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-3" class="form-control">
                                        </div>

                                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-3" class="form-control">
                                        </div>

                                        <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-3" class="form-control">
                                        </div>


                                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-2" class="form-control">
                                        </div>

                                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-2" class="form-control">
                                        </div>

                                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-2" class="form-control">
                                        </div>

                                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-2" class="form-control">
                                        </div>

                                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-2" class="form-control">
                                        </div>

                                        <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-2" class="form-control">
                                        </div>


                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-1" class="form-control">
                                        </div>

                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-1" class="form-control">
                                        </div>

                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-1" class="form-control">
                                        </div>

                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-1" class="form-control">
                                        </div>

                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-1" class="form-control">
                                        </div>

                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-1" class="form-control">
                                        </div>

                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-1" class="form-control">
                                        </div>

                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-1" class="form-control">
                                        </div>

                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-1" class="form-control">
                                        </div>

                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-1" class="form-control">
                                        </div>

                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-1" class="form-control">
                                        </div>

                                        <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                            <input type="text" placeholder=".col-md-1" class="form-control">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-------------------------------------->
                    <div class="row content10">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form Design <small>different form elements</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a data-toggle="collapse" href="#collapse9"><i class="fa fa-chevron-up"></i></a>
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
                                <div id="collapse9" class="pannel-collapse">
                                    <br>

                                    <h4>Horizontal labels</h4>
                                    <p>
                                        Using the grid system you can control the position of the labels. The form example below has the <b>col-md-10</b> which sets the width to 10/12 and <b>center-margin</b> which centers it.
                                    </p>
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="first-name">First Name <span>*</span>
                                            </label>
                                            <div class="col-md-7">
                                                <input type="text"  class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3" for="last-name">Last Name <span>*</span>
                                            </label>
                                            <div class="col-md-7">
                                                <input type="text"  class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                    </form>


                                    <h4>Vertical labels</h4>
                                    <p >
                                        For making labels vertical you have two options, either use the apropiate grid <b>.col-</b> class or wrap the form in the <b>form-vertical</b> class.
                                    </p>
                                    <div class="col-md-8 center-margin">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label>Email address</label>
                                                <input type="email" class="form-control" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>

                                        </form>
                                    </div>

                                    <h4>Inline Form </h4>
                                    <p >
                                        Add .form-inline to your form (which doesn't have to be a </p><form>) for left-aligned and inline-block controls.
                                        <p></p>

                                        <div class="form-group">
                                            <label for="ex3">Email address</label>
                                            <input type="text" class="form-control" placeholder=" ">
                                        </div>
                                        <div class="form-group">
                                            <label for="ex4">Email address</label>
                                            <input type="email" class="form-control" placeholder=" ">
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-default">Send invitation</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-------------------------------------->

                    <footer>
                        <div class="pull-right">
                            Gentelella - Bootstrap Admin Template by <a href="#">Colorlib</a>
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                </div>

            </div>
        </div>
    </body>
</html>




