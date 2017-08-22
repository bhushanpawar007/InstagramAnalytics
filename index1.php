<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome TO Instagram Analytics</title>
    </head>
    <body>
        <!– Define Instagram Constants to establish the connection to API  –>
        <?php
          define("CLIENT_ID", "607c3088d5b74eb9b31d63492527581e");
          define("Client_Secret", "500f1295f8074cc5a3b92b15f8279b37");
          define("Access_Token", "1507486508.607c308.e58f67ac6daa4c13b7795a74f5cededa");
          define("My Insta ID","1507486508");
              
              $url='https://api.instagram.com/v1/users/self/?access_token=1507486508.607c308.e58f67ac6daa4c13b7795a74f5cededa';
              $MyjsonData = json_decode((file_get_contents($url)));
              
         

        ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Your Instagram ID </th>
                    <th><?php echo $MyjsonData->data->id ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Your Username</td>
                    <td><?php echo $MyjsonData->data->username ?></td>
                </tr>
                <tr>
                    <td>Your Full Name</td>
                    <td><?php echo $MyjsonData->data->full_name ?></td>
                </tr>
                <tr>
                    <td>Your Profile Picture </td>
                    <td><img src="<?php echo $MyjsonData->data->profile_picture ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Your Bio Details</td>
                    <td><?php echo $MyjsonData->data->bio ?></td>
                </tr>
                <tr>
                    <td>Your Website Details </td>
                    <td><?php echo $MyjsonData->data->website ?></td>
                </tr>
                <tr>
                    <td>Your Count of Media Files</td>
                    <td><?php echo $MyjsonData->data->counts->media ?></td>
                </tr>
                <tr>
                    <td>Count of How many people you Follow </td>
                    <td><?php echo $MyjsonData->data->counts->follows ?></td>
                </tr>
                <tr>
                    <td> Count of Followd by </td>
                    <td><?php echo $MyjsonData->data->counts->followed_by ?></td>
                </tr>
               
            </tbody>
        </table>

    
    </body>
</html>
