<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
set_time_limit(30000);

$dbusername = "root";
$dbpassword = "root";
$database = "Tags_Data";
$con = mysqli_connect('localhost', $dbusername, $dbpassword);
mysqli_select_db($con, $database) or die("Unable to select database");



for ($char = 'a'; $char <= 'p'; $char++) {
    for ($temp = 'q'; $temp <= 'z'; $temp++) {
        //echo $char . $temp . "\n";


        $url = 'https://api.instagram.com/v1/tags/search?q=' . $char . $temp . '&access_token=1507486508.8923420.b557837f086247a995b82edd526841e0';
        $MyjsonData = json_decode((file_get_contents($url)));
        $SearchCount = count($MyjsonData->data);
        for ($i = 0; $i < $SearchCount; $i++) {
             $temp_name=$MyjsonData->data[$i]->name;
             $temp_Count=$MyjsonData->data[$i]->media_count;
            $sql = "INSERT INTO `tags_data`(`NAME`, `Media_Count`) VALUES ('$temp_name','$temp_Count')";

            $result = mysqli_query($con, $sql);
            if (!$result) {
                die("Could Not able to Insert data ");
            } else {
                echo "Data Entered successfully";
            }
        }
    }
}