<?php $dbusername="root";$dbpassword="root";$database="instagram";
      $con=mysqli_connect('localhost',$dbusername,$dbpassword);
      mysqli_select_db($con,$database) or die( "Unable to select database");
     $formusername= $_POST['form-username'];
     $formpassword=$_POST['form-password'];
     
     // To protect MySQL injection (more detail about MySQL injection)
$formusername = stripslashes($formusername);
$formpassword = stripslashes($formpassword);
$formusername = mysqli_real_escape_string($con,$formusername);
$formpassword = mysqli_real_escape_string($con,$formpassword);

$sql="SELECT * FROM users WHERE Email='$formusername' and password='$formpassword'";
$result=mysqli_query($con,$sql);

     // Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if ($count==1) {
    echo "Success! $count";
    session_start();
    $_SESSION['username'] = $formusername;
    header('Location: SearchUSer.php');
    
    
} else {
    echo "Unsuccessful! $count";
    //die(header("location:loginSignUp.php?loginFailed=true&reason=password"));

    echo "<script language=\"JavaScript\">\n";
    echo "alert('Username or Password was incorrect!');\n";
    echo "window.location='loginSignUp.php'";
    echo "</script>";
   
}

ob_end_flush();
      mysqli_close($con);
  ?>  