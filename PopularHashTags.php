<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>User Dashboard</title>
        <link rel="stylesheet" href="style.css">
        <!-- Bootstrap Core CSS -->
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="Dashboard/css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="Dashboard/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="Dashboard/css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="Dashboard/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>

    <body onload="load()">
        
       
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">

                    <a class="navbar-brand" href="index.php"><img src="FinalLogo.png" alt="iData Analytics" style="height: 170% ; padding: 0px;"></a>
                </div>
                <!-- /.navbar-header -->

                <div id="navbar2" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>



<?php
if (!empty($_SESSION['username'])) {
    echo '<li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">';

    echo $_SESSION['username'];
    echo '<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="logout.php">Logout</a></li>
            
          </ul>';
    echo '</li>';
} else {

    echo '<li><a href="loginSignUp.php" >Login/SignUp</a></li>';
}
?>

                    </ul>
                </div>
                <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>


    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> User Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="flot.html">Flot Charts</a>
                        </li>
                        <li>
                            <a href="morris.html">Morris.js Charts</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                </li>
                <li>
                    <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="panels-wells.html">Panels and Wells</a>
                        </li>
                        <li>
                            <a href="buttons.html">Buttons</a>
                        </li>
                        <li>
                            <a href="notifications.html">Notifications</a>
                        </li>
                        <li>
                            <a href="typography.html">Typography</a>
                        </li>
                        <li>
                            <a href="icons.html"> Icons</a>
                        </li>
                        <li>
                            <a href="grid.html">Grid</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Third Level <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                            </ul>
                            <!-- /.nav-third-level -->
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="blank.html">Blank Page</a>
                        </li>
                        <li>
                            <a href="login.html">Login Page</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Popular HashTags</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-comments fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">

                            <div class="huge">TotalComments</div>
                            
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Top 25 Popular HashTags</span>
                        <span class="pull-right"></span>
                         <div class="clearfix"><span class="pull-right"> Copy Tags</span> </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">TotaLikes</div>
                            
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Top 50 POpular HashTAgs</span>
                        <span class="pull-right"></span>
                         <div class="clearfix"><span class="pull-right"> Copy Tags</span> </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">countofRecentMedia</div>
                            
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Top 75 Popular HashTags</span>
                        <span class="pull-right"></span>
                         <div class="clearfix"><span class="pull-right"> Copy Tags</span> </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-support fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">13</div>
                            
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Top 100 Most Popular HashTags</span>
                        <span class="pull-right"></span>
                        <div class="clearfix"><span class="pull-right"> Copy Tags</span> </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row"><!-- /.col-lg-8 --><!-- /.col-lg-4 -->
  </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="Dashboard/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="Dashboard/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="Dashboard/js/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="Dashboard/js/raphael.min.js"></script>
<script src="Dashboard/js/morris.min.js"></script>
<script src="Dashboard/js/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="Dashboard/js/sb-admin-2.js"></script>
<script>
        function load() {
            Morris.Line({
                element: 'morris-line-chart',
                data: <?php echo json_encode($likesArray); ?>,
                xkey: 'y',
                ykeys: 'a',
                labels: ['Likes']
            });

            Morris.Bar({
                element: 'morris-bar-chart',
                data: <?php echo json_encode($likesPerHashtag); ?>,
                xkey: 'y',
                ykeys: 'a',
                labels: ['Total Likes']

            });

            Morris.Donut({
                element: 'morris-donut-chart',
                data: [{
                        label: "Following",
                        value: <?php echo $MyjsonData->data->counts->follows; ?>
                    }, {
                        label: "Followed-By",
                        value: <?php echo $MyjsonData->data->counts->followed_by; ?>
                    }],
                resize: true
            });

        }
</script>
</body>

</html>
