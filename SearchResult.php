<?php
$SearchQuery=$_GET["SearchBox"];
define("CLIENT_ID", "607c3088d5b74eb9b31d63492527581e");
          define("Client_Secret", "500f1295f8074cc5a3b92b15f8279b37");
          define("Access_Token", "1507486508.607c308.e58f67ac6daa4c13b7795a74f5cededa");
          define("My Insta ID","1507486508");
          
          $url='https://api.instagram.com/v1/users/search?q=' . $SearchQuery . '&access_token=1507486508.607c308.e58f67ac6daa4c13b7795a74f5cededa';
              $MyjsonData = json_decode((file_get_contents($url)));
			  $TempMyjsonData=(array)$MyjsonData;
         $SearchCount= count($TempMyjsonData['data']);
              
              
              
/* 
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php
// Starting session
session_start();
 
// Storing session data

?>
<body>
<?php
$i=0; 
while($i < $SearchCount){

$element1 ='<div>';
$element2='<img src="'. $MyjsonData->data[$i]->profile_picture .'">';
$element3='<a href="Dashboard?userid='. $MyjsonData->data[$i]->id .'" >'. $MyjsonData->data[$i]->full_name .'</a>';
$element4='</div>';
       $i++;
	   echo $element1.$element2.$element3.$element4;
   }


?>
</body>
<!--

<div>
    <img src="<?php echo $MyjsonData->data[0]->profile_picture; ?>">
    <a href="UserDetails.php?userid=<?php echo $MyjsonData->data[0]->id ; ?>" ><?php echo $MyjsonData->data[0]->full_name; ?></a>
</div>
<div>
    <img src="<?php echo $MyjsonData->data[1]->profile_picture; ?>">
    <a href="UserDetails.php?userid=<?php echo $MyjsonData->data[1]->id ; ?>" ><?php echo $MyjsonData->data[1]->full_name; ?></a>
</div>
<div>
    <img src="<?php echo $MyjsonData->data[2]->profile_picture; ?>">
    <a href="UserDetails.php?userid=<?php echo $MyjsonData->data[2]->id ; ?>" ><?php echo $MyjsonData->data[2]->full_name; ?></a>
</div>-->