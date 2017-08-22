<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <header>
<!-- Latest compiled and minified CSS -->


</header>
    <body >
        <?php include 'SearchUser.php'; ?>
        <div class="container " style="margin-top:20%;">   
            <?php
            $i = 0;
            $SearchQuery = $_GET["UserName"];
            define("CLIENT_ID", "607c3088d5b74eb9b31d63492527581e");
            define("Client_Secret", "500f1295f8074cc5a3b92b15f8279b37");
            define("Access_Token", "1507486508.607c308.e58f67ac6daa4c13b7795a74f5cededa");
            define("My Insta ID", "1507486508");

            $url = 'https://api.instagram.com/v1/users/search?q=' . $SearchQuery . '&access_token=1507486508.607c308.e58f67ac6daa4c13b7795a74f5cededa';
            $MyjsonData = json_decode((file_get_contents($url)));
            $TempMyjsonData = (array) $MyjsonData;
            $SearchCount = count($TempMyjsonData['data']);

            
            
            //$media = 'https://api.instagram.com/v1/users/' .$_GET["userid"]. '/media/recent/?access_token=1507486508.607c308.e58f67ac6daa4c13b7795a74f5cededa';

           // $json = (file_get_contents($media));
          //  $MyMediaData = json_decode($json);


           // $SearchCount = count($MyMediaData->data);
           // $TotaLikes = 0;
           // $TotalComments = 0;
            
            
            
            if ($SearchCount == 0) {
                echo "<h1>No User Found ,Please try again With different Username..!!</h1>";
            } else if ($SearchCount == 1) {
                $e1 = '<ul class="list-group " >';
                $e2 = '<li class="list-group-item " style="border:0px">';
                $e3 = '<div class="row">'; /* Beginning Of Row Item */
               $e4 = '<div class="col-xs-6 col-sm-6 col-lg-6">
      <div class = "panel panel-primary " >
        <div class = "panel-heading " >
<div class="row">
<div class="col-xs-3 col-sm-3 col-lg-3"><img class= "img-circle" src="' . $MyjsonData->data[$i]->profile_picture . '" style="width:100% ; height:100%;" /></div>
<div class="col-xs-9 col-sm-9 col-lg-9">
              <!--All Excel Sheet Downoad links will go here-->
<table ">
                <tr >
                  <td style="padding-top: .5em;
    padding-bottom: .5em;"><h2 class = "panel-title">Full Name :' . $MyjsonData->data[$i]->full_name . '</h2></td>
                </tr>
                <tr >
                  <td style="padding-top: .5em;
    padding-bottom: .5em;">
<h2 class = "panel-title"> Username : ' . $MyjsonData->data[$i]->username . '</h2></td>
                </tr>
                 <tr >
                  <td style="padding-top: .5em;
    padding-bottom: .5em;">
<h2 class = "panel-title"> <a href="Dashboard.php?userid='.$MyjsonData->data[$i]->id.'"><u>Click Here For more details About the User</u></a>
                </tr>
              </table>
              </div>
</div>

 </div>

       
      </div>
    </div>';  /* first panel */


                $e6 = ' </div>';  /* End Of Row Item */


                echo $e1 . $e2 . $e3 . $e4 . $e6;
            } else if ($SearchCount % 2 == 0) {
                $i = 0;
                $j=0;
                echo '<ul class="list-group " >';
                
                while ($i < $SearchCount / 2) {
                    
                $e2 = '<li class="list-group-item " style="border:0px">';    
                    $e3 = '<div class="row">'; /* Beginning Of Row Item */
                    $e4 = '<div class="col-xs-6 col-sm-6 col-lg-6">
      <div class = "panel panel-primary " >
        <div class = "panel-heading " >
<div class="row">
<div class="col-xs-3 col-sm-3 col-lg-3"><img class= "img-circle" src="' . $MyjsonData->data[$j]->profile_picture . '" style="width:100% ; height:100%;" /></div>
<div class="col-xs-9 col-sm-9 col-lg-9">
              <!--All Excel Sheet Downoad links will go here-->
<table ">
                <tr >
                  <td style="padding-top: .5em;
    padding-bottom: .5em;"><h3 class = "panel-title">Full Name :' . $MyjsonData->data[$i]->full_name . '</h3></td>
                </tr>
                <tr >
                  <td style="padding-top: .5em;
    padding-bottom: .5em;">
<h3 class = "panel-title"> Username : ' . $MyjsonData->data[$j]->username . '</h3></td>
                </tr>
                <tr >
                  <td style="padding-top: .5em;
    padding-bottom: .5em;">
<h2 class = "panel-title"> <a href="Dashboard.php?userid='.$MyjsonData->data[$j]->id.'"><u>Click Here For more details About the User</u></a>
                </tr>
              </table>
              </div>
</div>

 </div>

       
      </div>
    </div>'; /* first panel */
                    $j++;
                   
                    $e5 = '<div class="col-xs-6 col-sm-6 col-lg-6">
      <div class = "panel panel-primary " >
        <div class = "panel-heading " >
<div class="row">
<div class="col-xs-3 col-sm-3 col-lg-3"><img class= "img-circle" src="' . $MyjsonData->data[$j]->profile_picture . '" style="width:100% ; height:100%;" /></div>
<div class="col-xs-9 col-sm-9 col-lg-9">
              <!--All Excel Sheet Downoad links will go here-->
<table ">
                <tr >
                  <td style="padding-top: .5em;
    padding-bottom: .5em;"><h2 class = "panel-title">Full Name :' . $MyjsonData->data[$i]->full_name . '</h2></td>
                </tr>
                <tr >
                  <td style="padding-top: .5em;
    padding-bottom: .5em;">
<h2 class = "panel-title"> Username : ' . $MyjsonData->data[$j]->username . '</h2></td>
                </tr>
                <tr >
                  <td style="padding-top: .5em;
    padding-bottom: .5em;">
<h2 class = "panel-title"> <a href="Dashboard.php?userid='.$MyjsonData->data[$j]->id.'"><u>Click Here For more details About the User<u/></a>
                </tr>
              </table>
</div>

 </div>

      </div> 
      </div>
    </div>'; /* Second panel */

                    $e6 = ' </div></li>';  /* End Of Row Item */


                    echo $e2 . $e3 . $e4 . $e5 . $e6;
                    $j++;
                    $i++;
                }
                echo '</ul>';
                ///ul and ll end
                
                
            } else if ($SearchCount % 2 == 1) {
                $i = 0;
                while ($i < $SearchCount / 2) {
                    $e1 = '<ul class="list-group " >';
                    $e2 = '<li class="list-group-item " style="border:0px">';
                    $e3 = '<div class="row">'; /* Beginning Of Row Item */
                    $e4 = '<div class="col-xs-6 col-sm-6 col-lg-6">
      <div class = "panel panel-primary " >
        <div class = "panel-heading " >
<div class="row">
<div class="col-xs-3 col-sm-3 col-lg-3"><img class= "img-circle" src="' . $MyjsonData->data[$i]->profile_picture . '" style="width:100% ; height:100%;" /></div>
<div class="col-xs-9 col-sm-9 col-lg-9">
              <!--All Excel Sheet Downoad links will go here-->
<table ">
                <tr >
                  <td style="padding-top: .5em;
    padding-bottom: .5em;"><h2 class = "panel-title">Full Name :' . $MyjsonData->data[$i]->full_name . '</h2></td>
                </tr>
                <tr >
                  <td style="padding-top: .5em;
    padding-bottom: .5em;">
<h2 class = "panel-title"> Username : ' . $MyjsonData->data[$i]->username . '</h2></td>
                </tr>
                <tr >
                  <td style="padding-top: .5em;
    padding-bottom: .5em;">
<h2 class = "panel-title"> <a href="Dashboard.php?userid='.$MyjsonData->data[$i]->id.'"><u>Click Here For more details About the User</u></a>
                </tr>
              </table>
</div>

 </div>

       
      </div>
    </div>'; /* first panel */
                    $i++;
                    $e5 = '<div class="col-xs-6 col-sm-6 col-lg-6">
      <div class = "panel panel-primary " >
        <div class = "panel-heading " >
<div class="row">
<div class="col-xs-3 col-sm-3 col-lg-3"><img class= "img-circle" src="' . $MyjsonData->data[$i]->profile_picture . '" style="width:100% ; height:100%;" /></div>
<div class="col-xs-9 col-sm-9 col-lg-9">
              <!--All Excel Sheet Downoad links will go here-->
<table ">
                <tr >
                  <td style="padding-top: .5em;
    padding-bottom: .5em;"><h2 class = "panel-title">Full Name :' . $MyjsonData->data[$i]->full_name . '</h2></td>
                </tr>
                <tr >
                  <td style="padding-top: .5em;
    padding-bottom: .5em;">
<h2 class = "panel-title"> Username : ' . $MyjsonData->data[$i]->username . '</h2></td>
                </tr>
                <tr >
                  <td style="padding-top: .5em;
    padding-bottom: .5em;">
<h2 class = "panel-title"> <a href="Dashboard.php?userid='.$MyjsonData->data[$i]->id.'"><u>Click Here For more details About the User</u></a>
                </tr>
              </table>
</div>

 </div>

       
      </div>
    </div>'; /* Second panel */

                    $e6 = ' </div>';  /* End Of Row Item */


                    echo $e1 . $e2 . $e3 . $e4 . e5 . $e6;
                    $i++;
                }
                /* For the Last One */

                $e1 = '<ul class="list-group " >';
                $e2 = '<li class="list-group-item " style="border:0px">';
                $e3 = '<div class="row">'; /* Beginning Of Row Item */
                $e4 = '<div class="col-xs-6 col-sm-6 col-lg-6">
      <div class = "panel panel-primary " >
        <div class = "panel-heading " >
<div class="row">
<div class="col-xs-3 col-sm-3 col-lg-3"><img class= "img-circle" src="' . $MyjsonData->data[$i]->profile_picture . '" style="width:100% ; height:100%;" /></div>
<div class="col-xs-9 col-sm-9 col-lg-9">
              <!--All Excel Sheet Downoad links will go here-->
<table ">
                <tr >
                  <td style="padding-top: .5em;
    padding-bottom: .5em;"><h2 class = "panel-title">Full Name :' . $MyjsonData->data[$i]->full_name . '</h2></td>
                </tr>
                <tr >
                  <td style="padding-top: .5em;
    padding-bottom: .5em;">
<h2 class = "panel-title"> Username : ' . $MyjsonData->data[$i]->username . '</h2></td>
                </tr>
                <tr >
                  <td style="padding-top: .5em;
    padding-bottom: .5em;">
<h2 class = "panel-title"> <a href="Dashboard.php?userid='.$MyjsonData->data[$i]->id.'"><u>Click Here For more details About the User</u></a>
                </tr>
              </table>
</div>

 </div>

       
      </div>
    </div>'; /* first panel */


                $e6 = ' </div>';  /* End Of Row Item */


                echo $e1 . $e2 . $e3 . $e4 . $e6;
            }
            ?>
        </div>

        
        </body>
</html>
