<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/25-14.less', 'css/25-14.css');
        ?>
        <link href="css/25-14.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="js/demo.js" type="text/javascript"></script>
    </head>

    <body>

        <div class="type-25-14">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
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
                    </div>   
                </div>
            </div>


        </div>
    </body>

</html>