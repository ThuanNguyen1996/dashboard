<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> </title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/daterangepicker.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/25-2.less', 'css/25-2.css');
        ?>
        <link rel="stylesheet" href="css/25-2.css">
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.flot.js" type="text/javascript"></script>
        <script src="js/jquery.flot.time.js" type="text/javascript"></script>
        <script src="js/jquery.flot.spline.min.js" type="text/javascript"></script>
        <script src="js/date.js" type="text/javascript"></script>
        <script src="js/moment.min.js" type="text/javascript"></script>
        <script src="js/daterangepicker.js" type="text/javascript"></script>
        <script src="js/custom.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-25-2">
            <div class="container-fluid">
                <div class="row">
                    <div class=" col-md-2">

                    </div>
                    <div class="col-md-10">
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
                                            <div class="flot-text">
                                                <div class="flot-x1-axis">
                                                    <span class="flot-tick-label flot1" >Jan 01</span>>
                                                    <span class="flot-tick-label flot2">Jan 02</span>>
                                                    <span class="flot-tick-label flot3">Jan 03</span>>
                                                    <span class="flot-tick-label flot4">Jan 04</span>>
                                                    <span class="flot-tick-label flot5" >Jan 05</span>>
                                                    <span class="flot-tick-label flot6">Jan 06</span>

                                                </div>

                                                <div class="flot-y1-axis">
                                                    <span class="flot-tick-label tick1">0</span>
                                                    <span class="flot-tick-label tick2">10</span>
                                                    <span class="flot-tick-label tick3">20</span>
                                                    <span class="flot-tick-label tick4" >30</span>
                                                    <span class="flot-tick-label tick5" >40</span>
                                                    <span class="flot-tick-label tick6 " >50</span>
                                                    <span class="flot-tick-label tick7" >60</span>
                                                    <span class="flot-tick-label tick8" >70</span>
                                                    <span class="flot-tick-label tick9">80</span>
                                                    <span class="flot-tick-label tick10" >90</span>
                                                    <span class="flot-tick-label tick11" >100</span>
                                                    <span class="flot-tick-label tick12">110</span>
                                                    <span class="flot-tick-label tick13" >120</span>
                                                    <span class="flot-tick-label tick14">130</span>
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
                                                    <div class="progress progress_sm">
                                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80" aria-valuenow="79" style="width: 80%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p>Twitter Campaign</p>
                                                <div class="">
                                                    <div class="progress progress_sm">
                                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60" aria-valuenow="59" style="width: 60%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-6">
                                            <div>
                                                <p>Conventional Media</p>
                                                <div class="">
                                                    <div class="progress progress_sm">
                                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40" aria-valuenow="39" style="width: 40%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <p>Bill boards</p>
                                                <div class="">
                                                    <div class="progress progress_sm">
                                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" aria-valuenow="49" style="width: 50%;"></div>
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
            </div>
        </div>
    </body>
</html>