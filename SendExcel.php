<?php


define("CLIENT_ID", "607c3088d5b74eb9b31d63492527581e");
define("Client_Secret", "500f1295f8074cc5a3b92b15f8279b37");
define("Access_Token", "1507486508.607c308.e58f67ac6daa4c13b7795a74f5cededa");
$url='https://api.instagram.com/v1/users/self/?access_token=1507486508.607c308.e58f67ac6daa4c13b7795a74f5cededa';

$MyjsonData = json_decode((file_get_contents($url)));
              
  ?>       
<?php
header("Content-Type: application/vnd.ms-excel"); 
//echo 'Your Instagram ID' . "\t" . $MyjsonData->data->id . "\n";
//echo 'Your Username' . "\t" . $MyjsonData->data->username . "\n";
//echo 'Your Full Name' . "\t" . $MyjsonData->data->full_name . "\n";
//echo 'Your Profile Picture' . "\t" . $MyjsonData->data->profile_picture . "\n";
//echo 'Your Bio Details' . "\t" . $MyjsonData->data->bio . "\n";
//echo 'Your Website Details' . "\t" . $MyjsonData->data->website . "\n";
//echo 'Your Count of Media Files' . "\t" . $MyjsonData->data->counts->media . "\n";
//echo 'Count of How many people you Follow' . "\t" . $MyjsonData->data->counts->follows . "\n";
//echo 'Count of Followd by' . "\t" . $MyjsonData->data->counts->followed_by . "\n";

echo 'Your Instagram ID' . "\t" . 'Your Username' . "\t" . 'Your Full Name' . "\t" . 'Your Profile Picture' . "\t" . 'Your Bio Details' . "\t" . 'Your Website Details' . "\t" . 'Your Count of Media Files' . "\t" . 'Count of How many people you Follow' . "\t" . 'Count of Followd by' . "\t" . "\n";
echo $MyjsonData->data->id . "\t" . $MyjsonData->data->username . "\t" . $MyjsonData->data->full_name . "\t" . $MyjsonData->data->profile_picture . "\t" . $MyjsonData->data->bio . "\t" . $MyjsonData->data->website . $MyjsonData->data->counts->media . "\t" . $MyjsonData->data->counts->follows . "\t" . $MyjsonData->data->counts->followed_by . "\n";

header("Content-disposition: attachment; filename=spreadsheet.xls");

?>


