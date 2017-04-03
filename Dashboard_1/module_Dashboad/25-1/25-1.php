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
        $less->compileFile('less/25-1.less', 'css/25-1.css');
        ?>
        <link href="css/25-1.css" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <div class="type-25-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class=" col-md-10">
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
                    </div> 
                </div>
            </div>

            <div class="clear"></div>

        </div>
    </body>

</html>