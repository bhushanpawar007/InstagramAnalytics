<?php
define("CLIENT_ID", "607c3088d5b74eb9b31d63492527581e");
define("Client_Secret", "500f1295f8074cc5a3b92b15f8279b37");
define("Access_Token", "1507486508.607c308.e58f67ac6daa4c13b7795a74f5cededa");
define("My Insta ID", "1507486508");
$url = 'https://api.instagram.com/v1/users/' . $_GET["userid"] . '?access_token=1507486508.8923420.b557837f086247a995b82edd526841e0';
$media = 'https://api.instagram.com/v1/users/' . $_GET["userid"] . '/media/recent/?access_token=1507486508.8923420.b557837f086247a995b82edd526841e0';

$MyjsonData = json_decode((file_get_contents($url)));
$json = (file_get_contents($media));
$MyMediaData = json_decode($json);

$ins_links = array();

$page = $MyMediaData->pagination;
$pagearray = json_decode(json_encode($page), true);
$pagecount = count($pagearray);



$_SESSION["followed_by"] = $MyjsonData->data->counts->followed_by;
$_SESSION["following"] = $MyjsonData->data->counts->follows;

/*
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//$i=0;
//foreach ($MyMediaData->data as $user_data) {
//    $posts[$i++] = $user_data->link;
//}
//
//if ($pagecount > 0)
//    return getPost($page->next_url, $i);
//else
//    return $posts;
//echo $posts;
?>
<html>
    <body>

        User data : 
        <table border='1'>
            <tr> <td><?php echo $MyjsonData->data->id ?>  </td></tr>
            <tr> <td><?php echo $MyjsonData->data->username ?>   </td></tr>
            <tr> <td><?php echo $MyjsonData->data->full_name ?>   </td></tr>
            <tr> <td> <?php echo $MyjsonData->data->profile_picture ?>  </td></tr>
            <tr> <td><?php echo $MyjsonData->data->bio ?>   </td></tr>
            <tr> <td> <?php echo $MyjsonData->data->website ?>  </td></tr>
            <tr> <td> <?php echo $MyjsonData->data->counts->media ?>  </td></tr>
            <tr> <td> <?php echo $MyjsonData->data->counts->follows ?>  </td></tr>
            <tr> <td> <?php echo $MyjsonData->data->counts->followed_by ?>  </td></tr>


        </table>
        Users Media Data : 


        <table border='1'>
            <tr> <td><?php echo $MyMediaData->data[0]->comments->count ?>  </td></tr>
            <tr> <td><?php echo $MyMediaData->data[0]->likes->count ?>   </td></tr>
            <tr> <td><img src='<?php echo $MyMediaData->data[0]->images->standard_resolution->url ?>'></td></tr>
            <tr> <td><?php   for($i=0;$i<count($MyMediaData->data[0]->tags);$i++){echo "#".$MyMediaData->data[0]->tags[$i] ."\t" ;} ?></td></tr>
            <tr><td> <?php $countofRecentMedia=count($MyMediaData->data);   echo 'Count of total Recent Media'.$countofRecentMedia  ?></td></tr>
          <?php 
          for($i=0;$i<$countofRecentMedia;$i++){
              echo '<tr><td>For ' .$i. 'th Post Likes are =' .$MyMediaData->data[$i]->likes->count.'</td></tr>' ;
              echo '<tr><td>For ' .$i. 'th Post Comments are =' .$MyMediaData->data[$i]->comments->count.'</td></tr>' ;
          }
          
          ?>
          
        
        </table>

    </body>

</html>