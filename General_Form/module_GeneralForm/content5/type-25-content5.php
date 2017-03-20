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
        $less->compileFile('less/type-25-content5.less', 'css/type-25-content5.css');
        ?>
        <link href="css/type-25-content5.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="js/demo.js" type="text/javascript"></script>
        <script src="js/error.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-25-content5">
            <div class="col-md-2">
            </div>
            <div class="col-md-10">
                <div class="row content5">
                    <div class="col-md-6 col-xs-12">
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

                                <!-- start form for validation -->
                                <form class="form-horizontal" novalidate="">

                                    <div class="form-group">
                                        <label for="fullname">Full Name * :</label>
                                        <input type="text"  id="fullname"class="fullname form-control" name="fullname" required="">
                                        <p class="value"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email * :</label>
                                        <input type="email" id="fullname" class="fullname form-control" name="email" data-parsley-trigger="change" required="">
                                        <p class="value"></p>
                                    </div>



                                    <label>Gender *:</label>
                                    <br>
                                    <label>

                                        M:

                                        <div class="iradio_flat-green checked" style="position: relative;">

                                            <input type="radio" name="gender" id="genderM" value="M" checked="" required="" data-parsley-multiple="gender" style="position: absolute; opacity: 0;">
                                            <ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                        F:
                                        <div class="iradio_flat-green" style="position: relative;">
                                            <input type="radio" name="gender" id="genderF" value="F" data-parsley-multiple="gender" style="position: absolute; opacity: 0;">
                                            <ins  style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div>
                                    </label>
                                    <br>
                                    <label>Hobbies (2 minimum):</label>
                                    <br>
                                    <label style="padding: 5px;">
                                        <div class="icheckbox_flat-green" style="position: relative;">
                                            <input type="checkbox" name="hobbies[]" id="fullname" class="fullname" value="ski" style="position: absolute; opacity: 0;">
                                            <p class="value"></p>
                                            <ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>

                                        </div> Skiing
                                        <br>

                                        <div class="icheckbox_flat-green" style="position: relative;">
                                            <input type="checkbox" name="hobbies[]" id="hobby2" value="run" style="position: absolute; opacity: 0;">
                                            <ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div> Running
                                        <br>

                                        <div class="icheckbox_flat-green" style="position: relative;">
                                            <input type="checkbox" name="hobbies[]" id="hobby3" value="eat"  style="position: absolute; opacity: 0;">
                                            <ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div> Eating
                                        <br>

                                        <div class="icheckbox_flat-green" style="position: relative;">
                                            <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep"  style="position: absolute; opacity: 0;">
                                            <ins style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                        </div> Sleeping
                                        <br>
                                    </label>
                                    <p>

                                        <label for="heard">Heard us by *:</label>
                                        <select id="fullname" class="form-control" required="">
                                            <option value="">Choose..</option>
                                            <option value="press">Press</option>
                                            <option value="net">Internet</option>
                                            <option value="mouth">Word of mouth</option>
                                            <p class="value"></p>
                                        </select>
                                    <div class="form-group">
                                        <label for="message">Message (20 chars min, 100 max) :</label>
                                        <textarea id="fullname"  class="form-control"  data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." ></textarea>
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

                    <div class="col-md-6 col-xs-12">
                    </div>
                </div>
            </div>

        </div>
    </body>

</html>