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
        $less->compileFile('less/25-15.less', 'css/25-15.css');
        ?>
        <link href="css/25-15.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="js/demo.js" type="text/javascript"></script>
    </head>

    <body>

        <div class="type-25-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
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
                    </div>  
                </div>
            </div>


        </div>
    </body>

</html>