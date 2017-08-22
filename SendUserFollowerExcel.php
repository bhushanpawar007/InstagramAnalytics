<?php
session_start();
define("CLIENT_ID", "607c3088d5b74eb9b31d63492527581e");
          define("Client_Secret", "500f1295f8074cc5a3b92b15f8279b37");
          define("Access_Token", "1507486508.607c308.e58f67ac6daa4c13b7795a74f5cededa");
          define("My Insta ID","1507486508");
         $url='https://api.instagram.com/v1/users/self/followed-by?access_token='. $_SESSION['access_token'] ;
          
          $MyjsonData = json_decode((file_get_contents($url)));
          $TempMyjsonData=(array)$MyjsonData;
          $SearchCount= count($TempMyjsonData['data']);

?>

<?php
error_reporting(0);
header("Content-Type: application/vnd.ms-excel"); 

echo 'Instagram ID' . "\t" . 'Username' . "\t" . 'Full Name' . "\t" . 'Profile Picture' . "\t" . 'Bio Details' . "\t" . 'Website' . "\t" . 'Media' . "\t" . 'Follows' . "\t" . 'Followed by' . "\t" . "\n";
//for ($i=0; $followed_by_count !=0 ; $i-1) {
  for ($i=0; $i<$SearchCount ; $i++) {  
// $followed_by_count=$followed_by_count-1;   
 
 $temp_user='https://api.instagram.com/v1/users/' . $MyjsonData->data[$i]->id . '/?access_token='.$_SESSION['access_token'];
 
 $Temp_UserData = json_decode((file_get_contents($temp_user)));
 $Temp_TempMyjsonData=(array)$Temp_UserData;
          $Temp_SearchCount= count($Temp_TempMyjsonData['data']);
 if ($Temp_SearchCount=="0")
 {
    echo $MyjsonData->data[$i]->id . "\t" . $MyjsonData->data[$i]->username . "\t" . $MyjsonData->data[$i]->full_name . "\t" . $MyjsonData->data[$i]->profile_picture. "\t" . 'Private User' . "\t" . 'Private User' . "\t".  'Private User' . "\t" . 'Private User' . "\t" . 'Private User' . "\t" . "\n";  
 }
 else
 {
 $bio= str_replace("\n",' ', $Temp_UserData->data->bio);
 echo $Temp_UserData->data->id . "\t" . $Temp_UserData->data->username . "\t" . $Temp_UserData->data->full_name . "\t" . $Temp_UserData->data->profile_picture . "\t" . $bio . "\t" . $Temp_UserData->data->website . "\t".  $Temp_UserData->data->counts->media . "\t" . $Temp_UserData->data->counts->follows . "\t" . $Temp_UserData->data->counts->followed_by . "\t" . "\n"; 
  }
  }
header("Content-disposition: attachment; filename=FollowerDetails.xls");

?>

