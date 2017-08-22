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
        <?php
        define("CLIENT_ID", "607c3088d5b74eb9b31d63492527581e");
        define("Client_Secret", "500f1295f8074cc5a3b92b15f8279b37");
        define("Access_Token", "1507486508.607c308.e58f67ac6daa4c13b7795a74f5cededa");
        define("My Insta ID", "1507486508");
        $url = 'https://api.instagram.com/v1/users/' . $_GET["userid"] . '?access_token=1507486508.607c308.e58f67ac6daa4c13b7795a74f5cededa';
        $media = 'https://api.instagram.com/v1/users/' . $_GET["userid"] . '/media/recent/?access_token=1507486508.607c308.e58f67ac6daa4c13b7795a74f5cededa';

        $MyjsonData = json_decode((file_get_contents($url)));
        $json = (file_get_contents($media));
        $MyMediaData = json_decode($json);


        $countofRecentMedia = count($MyMediaData->data);
        $TotaLikes = 0;
        $TotalComments = 0;
        $likesPerHashtag=array();
        $likesArray = array();
        for ($i = 0; $i < $countofRecentMedia; $i++) {

            $TotaLikes = $TotaLikes + $MyMediaData->data[$i]->likes->count;
            $likesArray[$i] = array('y' => date('Y-m-d',$MyMediaData->data[$i]->created_time), 'a' => $MyMediaData->data[$i]->likes->count);
            $TotalComments = $TotalComments + $MyMediaData->data[$i]->comments->count;
           
        }
        
        ?>
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
                        session_start();
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
            <h1 class="page-header">User Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-comments fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">

                            <div class="huge"><?php echo $TotalComments; ?></div>
                            <div>Recent Comments!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $TotaLikes; ?></div>
                            <div>Recent Likes</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $countofRecentMedia; ?> </div>
                            <div>Recent Posts </div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-support fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">13</div>
                            <div>Support Tickets!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Users Likes Distribution 
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                Actions
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="Improveikes.php?userid=<?php echo $MyjsonData->data->id; ?>">Increase Likes </a>
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
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
<!--                    <div class="row">
                      <div class="col-sm-1 col-md-1 col-lg-1" style="padding-top: 15%">
                                <img src="Likes_img_final.jpg"/>          
                      </div>-->
<!--                    <div class="col-sm-10 col-md-10 col-lg-10">-->
                        <div id="morris-line-chart" ></div>
<!--                              <div style="text-align: center"><h2>Number Of Hashtags</h2></div>
                          </div>-->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Hash Tag Analysis
                    
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div >
                        <div >
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            
                                            <th>Post Date</th>
                                            <th>HashTag Count</th>
                                            <th>Likes </th>
                                            <th>Likes Per Hashtag </th>
                                             <th>HashTag Suggestion Engine </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        for ($i = 0; $i < $countofRecentMedia; $i++)
                                            
                                        {
                                            echo '<tr>';
                                            
                                            echo '<th>';
                                            echo $likesArray[$i]['y'];
                                            echo '</th>';
                                            
                                          
                                            echo '<th>';
                                            echo count($MyMediaData->data[$i]->tags);
                                            echo '</th>';
                                            
                                            echo '<th>';
                                            echo $MyMediaData->data[$i]->likes->count;
                                            echo '</th>';
                                            
                                            echo '<th>';
                                            
                                           // if(count($MyMediaData->data[$i]->tags)>0 ):
                                            
                                            if(count($MyMediaData->data[$i]->tags)!=0):
                                                 echo round(($MyMediaData->data[$i]->likes->count)/count($MyMediaData->data[$i]->tags));
                                                $likesPerHashtag[$i]=array('y' =>count($MyMediaData->data[$i]->tags) , 'a' => round(($MyMediaData->data[$i]->likes->count)/count($MyMediaData->data[$i]->tags)));
                                                
                                                
                                                else : 
                                                    echo 'No Hashtags in this post'; 
                                                    $likesPerHashtag[$i]=array('y' =>count($MyMediaData->data[$i]->tags) , 'a' => round(($MyMediaData->data[$i]->likes->count)));
                                            endif;
                                               
                                                
                                             //   } else  {
                                                   
                                                   //}
                                                    
                                            
                                            echo '</th>';
                                            
                                            echo '<th>';
                                            echo '<a href="index.php"> Suggest Hashtags to improve Likes</a>';
                                            echo '</th>';
                                            
                                            echo '</tr>';
                                        }
                                        
                                        
                                        
                                        ?>
                                    </tbody>
                                </table>
                                
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.col-lg-4 (nested) -->
                        <div class="row">
                            <div class="col-sm-1 col-md-1 col-lg-1" style="padding-top: 15%">
                                <img src="Likes_img_final.jpg"/>          
                            </div>
                          <div class="col-sm-11 col-md-11 col-lg-11"> <div id="morris-bar-chart" ></div>
                              <div style="text-align: center"><h2>Number Of Hashtags</h2></div>
                          </div>
                           
                        </div>
                        <!-- /.col-lg-8 (nested) -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-clock-o fa-fw"></i> Responsive Timeline
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-badge"><i class="fa fa-check"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                    <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago via Twitter</small>
                                    </p>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem quibusdam, tenetur commodi provident cumque magni voluptatem libero, quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias, officia repellendus.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge danger"><i class="fa fa-bomb"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge info"><i class="fa fa-save"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                                    <hr>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-gear"></i> <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
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
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam. Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur, commodi.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bell fa-fw"></i> Notifications Panel
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <i class="fa fa-comment fa-fw"></i> New Comment
                            <span class="pull-right text-muted small"><em>4 minutes ago</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                            <span class="pull-right text-muted small"><em>12 minutes ago</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-envelope fa-fw"></i> Message Sent
                            <span class="pull-right text-muted small"><em>27 minutes ago</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-tasks fa-fw"></i> New Task
                            <span class="pull-right text-muted small"><em>43 minutes ago</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                            <span class="pull-right text-muted small"><em>11:32 AM</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                            <span class="pull-right text-muted small"><em>11:13 AM</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-warning fa-fw"></i> Server Not Responding
                            <span class="pull-right text-muted small"><em>10:57 AM</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                            <span class="pull-right text-muted small"><em>9:49 AM</em>
                            </span>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="fa fa-money fa-fw"></i> Payment Received
                            <span class="pull-right text-muted small"><em>Yesterday</em>
                            </span>
                        </a>
                    </div>
                    <!-- /.list-group -->
                    <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Followers/Following Details
                </div>
                <div class="panel-body">
                    <div id="morris-donut-chart"></div>
                    <a href="#" class="btn btn-default btn-block">View Details</a>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            
            <!-- /.panel .chat-panel -->
        </div>
        <!-- /.col-lg-4 -->
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
        data: <?php echo json_encode($likesPerHashtag) ;?>,
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
            value: <?php echo $MyjsonData->data->counts->followed_by ;?>
        }],
        resize: true
    });
  
    }
</script>
</body>

</html>
