<?php
//           
//            define("CLIENT_ID", "607c3088d5b74eb9b31d63492527581e");
//            define("Client_Secret", "500f1295f8074cc5a3b92b15f8279b37");
//            define("Access_Token", "1507486508.607c308.e58f67ac6daa4c13b7795a74f5cededa");
//            define("My Insta ID", "1507486508");
//            $url = 'https://api.instagram.com/oauth/authorize/?client_id=607c3088d5b74eb9b31d63492527581e&redirect_uri=http://127.0.0.1&response_type=token';
//            $MyjsonData = json_decode((file_get_contents($url)));
//            echo $MyjsonData;
//            
//            curl -F 'client_id=607c3088d5b74eb9b31d63492527581e' \;
//    -F 'client_secret=500f1295f8074cc5a3b92b15f8279b37' \;
//    -F 'grant_type=token' \;
//    -F 'redirect_uri=http://127.0.0.1' \;
//    -F 'code=CODE' \;
//    https://api.instagram.com/oauth/access_token;
// Get cURL resource
//$curl = curl_init();
//// Set some options - we are passing in a useragent too here
//curl_setopt_array($curl, array(
//    CURLOPT_RETURNTRANSFER => 1,
//    CURLOPT_SSL_VERIFYPEER=>FALSE,
//    CURLOPT_SSL_VERIFYHOST=>FALSE,
//    CURLOPT_URL => 'https://api.instagram.com/oauth/',
//    CURLOPT_USERAGENT => 'Access Token For User',
//    CURLOPT_POST => 1,
//    CURLOPT_POSTFIELDS => array(
//       $client_id='607c3088d5b74eb9b31d63492527581e',
//       $redirect_uri='http://127.0.0.1',
//       $response_type='token'
//    )
//));
//// Send the request & save response to $resp
//$resp = curl_exec($curl);
//if(!curl_exec($curl)){
//    die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
//}
//// Close request to clear up some resources
//curl_close($curl);
//echo $_GET['access_token'];
//
//if(access_token!='')
//{
//    $_SESSION['access_token']=$_GET['access_token'];
//    $json='https://api.instagram.com/v1/users/self/?access_token='.$_GET['access_token'];
//    $MyjsonData= json_decode($json);
//    header("Location: " ,'Dashboard.php');
//}
//
//else
//{
//    $auth_request_url = 'https://api.instagram.com/oauth/authorize/?client_id=607c3088d5b74eb9b31d63492527581e&redirect_uri=http://localhost/instagramAnalytics/UserAuthrization.php&response_type=token';
///* Send user to authorisation */
// header("Location: " . $auth_request_url);
//    
//}
?>
<html>
    <body>
        <form id="access_form" method="post" action="http://localhost/instagramAnalytics/UserDashBoard.php">

            <input id="access" name="access_token" visibility="hidden" type="hidden"></input>

        </form>
        <script>
            var query = location.href.split('#');
            var myarray = query[1].split('=');

            document.getElementById('access').value = myarray[1];

            document.getElementById('access_form').submit();

        </script>
    </body>
</html>