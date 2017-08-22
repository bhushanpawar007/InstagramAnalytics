<html>
    <boody>
        
        <div  style="width :50% ; float: left;margin-left:30%; margin-top: 8%;">
            <a class="btn btn-info btn-lg" onclick="callInsta();"><h2>Get Detail Insight Of Your Instagram Account</h2></a>
        </div>
        <script>
            function callInsta() {
                window.location = "https://api.instagram.com/oauth/authorize/?client_id=607c3088d5b74eb9b31d63492527581e&redirect_uri=http://localhost/instagramAnalytics/UserAuthrization.php&response_type=token&scope=public_content+follower_list+comments+relationships+likes";
                
            }
        </script>
    </body>
</html>