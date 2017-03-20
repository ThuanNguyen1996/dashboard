<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gentelella Alela! | </title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/daterangepicker.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-25-content2.less', 'css/type-25-content2.css');
        ?>
        <link rel="stylesheet" href="css/type-25-content2.css">
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
        <div class="type-25-content2">
            <div class=" col-md-2">

            </div>
            <div class="col-md-10 col-right">
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
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </body>
</html>