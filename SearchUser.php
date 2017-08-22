<html>
    <header>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="jquery/1.12.4/jquery.min.js"></script>

        <link rel="stylesheet" href="SearchUserPage.css">

    </header>
    <body background="1.jpg" style="color: #fff">
        <?php
        include 'header.php';
        if (empty($_SESSION['username'])) {
            header('Location: loginSignUp.php');
        }
        ?> 

        <div style="width :40% ; float: left;margin-left: 7%;margin-top: 7%;">
            <form action="ResultsOfUserSearch.php" method="get">
                <div >
                    <div >
                        <h2>Search Using User Name :</h2>
                        <span>&nbsp;</span>
                        <span>&nbsp;</span>
                        <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" name="UserName" class="form-control input-lg" placeholder="UserName" required/>
                                <span class="input-group-btn">
                                    <button class="btn btn-info btn-lg" type="submit" >
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </form>

    <form action="ResultsOfTagSearch.php" method="get">
        <div style="width :40% ; float: right; margin-right: 7%;margin-top:7%;" >
            <div >
                <div  >
                    <h2>Search Using HashTag Name :</h2>
                    <span>&nbsp;</span>
                    <span>&nbsp;</span>
                    <div id="custom-search-input">
                        <div class="input-group col-md-12">
                            <input type="text" name="TagName" class="form-control input-lg" placeholder="HashTag" required/>
                            <span class="input-group-btn">
                                <button class="btn btn-info btn-lg" type="submit">
                                    <i class="glyphicon glyphicon-search" > </i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

   <?php include 'LoginOwnAccount.php'; ?>
</body>
</html>