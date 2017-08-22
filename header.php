<html>
<header>
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
          <link rel="stylesheet" href="style.css">

          <script src="jquery/1.12.4/jquery.min.js"></script>
          <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
</header>
<body>
<div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        
          <a class="navbar-brand" href="index.php"><img src="FinalLogo.png" alt="iData Analytics">
        </a>
      </div>
      <div id="navbar2" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          
          
        
<?php session_start(); if(!empty($_SESSION['username']))
   {    echo '<li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">';
   
        echo $_SESSION['username'];
        echo '<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="logout.php">Logout</a></li>
            
          </ul>';
        echo '</li>';
   } 
  else {
      
      echo '<li><a href="loginSignUp.php" >Login/SignUp</a></li>';
  }
   ?>
        
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</div>
</body>
</html>