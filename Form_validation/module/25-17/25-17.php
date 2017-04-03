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
        $less->compileFile('less/25-17.less', 'css/25-17.css');
        ?>
        <link href="css/25-17.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/demo.js" type="text/javascript"></script>
        <script src="js/nump1.js" type="text/javascript"></script>
    </head>

    <body>

        <div class="type-25-17">
            <div class="container-fluid">
                <div class="row">
                    <div class=" col-md-2">

                    </div>
                    <div class="col-md-10">
                        <div class="row content2">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Form validation <small>sub title</small></h2>
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

                                            <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                                            </p>
                                            <span class="section">Personal Info</span>                               
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span>*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="numb" class="form-control col-md-7 col-xs-12" placeholder="both name(s) e.g Jon Doe" type="text">

                                                </div>
                                                <p class="error"></p>                                       

                                            </div>

                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span>*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="email" class="numb"class="form-control col-md-7 col-xs-12">
                                                </div>
                                                <p class="error"></p>
                                            </div>


                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Confirm Email <span>*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="email" class="numb" name="confirm_email"  class="form-control col-md-7 col-xs-12">
                                                </div>
                                                <p class="error"></p>
                                            </div>

                                            <div class="item form-group ">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Number <span>*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="number" class="numb" name="number" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                                                </div>
                                                <p class="error"></p>
                                            </div>


                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Website URL <span>*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="url" class="numb" name="website" required="required" placeholder="www.website.com" class="form-control col-md-7 col-xs-12">
                                                </div>
                                                <p class="error"></p>
                                            </div>

                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Occupation <span>*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" name="occupation" data-validate-length-range="5,20" class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label for="password" class="control-label col-md-3">Password</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="numb" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                                                </div>
                                                <p class="error"></p>
                                            </div>
                                            <div class="item form-group ">
                                                <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input class="numb" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                                                </div>
                                                <p class="error"></p>
                                            </div>
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span>*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="tel" class="numb" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                                                </div>
                                                <p class="error"></p>
                                            </div>
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Textarea <span>*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <textarea id="textarea" class="numb" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                                                </div>                                             
                                                    <p class="error"></p>                                                                               

                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-3">
                                                    <button type="submit" class="btn btn-primary">Cancel</button>
                                                    <button  class=" btn btn-success" type="button" onclick="myFunction()">Submit</button>
                                                </div>
                                            </div>
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