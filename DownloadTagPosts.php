<?php

$i = 0;
$SearchQuery = $_GET["tagname"];
define("CLIENT_ID", "607c3088d5b74eb9b31d63492527581e");
define("Client_Secret", "500f1295f8074cc5a3b92b15f8279b37");
define("Access_Token", "1507486508.607c308.e58f67ac6daa4c13b7795a74f5cededa");
define("My Insta ID", "1507486508");

$url = 'https://api.instagram.com/v1/tags/' . $SearchQuery . '/media/recent?access_token=1507486508.607c308.e58f67ac6daa4c13b7795a74f5cededa';
$MyjsonData = json_decode((file_get_contents($url)));

$SearchCount = count($MyjsonData->data);

//if ($MyjsonData->data[$i]->type == "image") {
//echo $MyjsonData->data[$i]->type ;
//echo count($MyjsonData->data[$i]->users_in_photo) ;
//echo  $MyjsonData->data[$i]->filter ;
//echo json_encode($MyjsonData->data[$i]->tags);
//echo $MyjsonData->data[$i]->comments->count ;
//echo $MyjsonData->data[$i]->caption->text ;
//echo $MyjsonData->data[$i]->created_time ;
//echo $MyjsonData->data[$i]->user->username ;
//echo $MyjsonData->data[$i]->link ;
//echo $MyjsonData->data[$i]->images->low_resolution ->url;
//echo $MyjsonData->data[$i]->images->standard_resolution ->url;
//}
error_reporting(0);


header("Content-Type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=TagPosts.xls");
echo 'type' . "\t" . 'users_in_photo' . "\t" . 'filter' . "\t" . 'tags' . "\t" . 'comments' . "\t" . 'caption' . "\t" . 'created_time' . "\t" . 'By User' . "\t" . 'likes' . "\t" . 'By User' . "\t" . 'Post Link' . "\t" . 'Media low_resolution' . "\t" . 'Media standard_resolution' . "\t" . "\n";
for ($i = 0; $i < $SearchCount; $i++) {

    if ($MyjsonData->data[$i]->type == "image") {
        if (count($MyjsonData->data[$i]->caption) != 0) {
            $caption = str_replace("\n", ' ', $MyjsonData->data[$i]->caption->text);

            echo $MyjsonData->data[$i]->type . "\t" . count($MyjsonData->data[$i]->users_in_photo) . "\t" . $MyjsonData->data[$i]->filter . "\t" . json_encode($MyjsonData->data[$i]->tags) . "\t" . $MyjsonData->data[$i]->comments->count . "\t" . $caption . date('Y-m-d',$MyjsonData->data[$i]->created_time) . "\t" . $MyjsonData->data[$i]->user->username . "\t" . $MyjsonData->data[$i]->link . "\t" . $MyjsonData->data[$i]->images->low_resolution->url . "\t" . $MyjsonData->data[$i]->images->standard_resolution->url . "\n";
        } else {
            echo $MyjsonData->data[$i]->type . "\t" . count($MyjsonData->data[$i]->users_in_photo) . "\t" . $MyjsonData->data[$i]->filter . "\t" . json_encode($MyjsonData->data[$i]->tags) . "\t" . $MyjsonData->data[$i]->comments->count . "\t" . 'No Caption is there' . date('Y-m-d',$MyjsonData->data[$i]->created_time) . "\t" . $MyjsonData->data[$i]->user->username . "\t" . $MyjsonData->data[$i]->link . "\t" . $MyjsonData->data[$i]->images->low_resolution->url . "\t" . $MyjsonData->data[$i]->images->standard_resolution->url . "\n";
        }
    } else if ($MyjsonData->data[$i]->type == "video") {
        if (count($MyjsonData->data[$i]->caption) != 0) {
            $caption = str_replace("\n", ' ', $MyjsonData->data[$i]->caption->text);
            echo $MyjsonData->data[$i]->type . "\t" . count($MyjsonData->data[$i]->users_in_photo) . "\t" . $MyjsonData->data[$i]->filter . "\t" . json_encode($MyjsonData->data[$i]->tags) . "\t" . $MyjsonData->data[$i]->comments->count . "\t" . $caption . date('Y-m-d',$MyjsonData->data[$i]->created_time) . "\t" . $MyjsonData->data[$i]->user->username . "\t" . $MyjsonData->data[$i]->link . "\t" . $MyjsonData->data[$i]->videos->low_resolution->url . "\t" . $MyjsonData->data[$i]->videos->standard_resolution->url . "\n";
        }
        else {
            
            echo $MyjsonData->data[$i]->type . "\t" . count($MyjsonData->data[$i]->users_in_photo) . "\t" . $MyjsonData->data[$i]->filter . "\t" . json_encode($MyjsonData->data[$i]->tags) . "\t" . $MyjsonData->data[$i]->comments->count . "\t" . 'No Caption is there ' . date('Y-m-d',$MyjsonData->data[$i]->created_time ). "\t" . $MyjsonData->data[$i]->user->username . "\t" . $MyjsonData->data[$i]->link . "\t" . $MyjsonData->data[$i]->videos->low_resolution->url . "\t" . $MyjsonData->data[$i]->videos->standard_resolution->url . "\n";
        }
    }
}




