
<html>

    <header>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="Login.css" rel="stylesheet">
        
    </header>
    <body style="background-color: rgb(227, 228, 228);">
<?php include 'header.php'; ?>

    <div class="container" style="width: 50%;">
    

    <div class="omb_login">
        <h3 class="omb_authTitle">Login or <a href="SignUp.php">Sign up</a></h3>
		
	
		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">	
			    <form class="omb_loginForm" action="" autocomplete="off" method="POST">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text" class="form-control" name="username" placeholder="email address">
					</div>
					<span class="help-block"></span>
										
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<input  type="password" class="form-control" name="password" placeholder="Password">
					</div>
                    <span class="help-block"></span> <!- Use When Username password combination is wrong ->

					<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
				</form>
			</div>
    	</div>
		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-3">
				<label class="checkbox">
					<input type="checkbox" value="remember-me">Remember Me
				</label>
			</div>
			<div class="col-xs-12 col-sm-3">
				<p class="omb_forgotPwd">
					<a href="#">Forgot password?</a>
				</p>
			</div>
		</div>	    	
	</div>



        </div>
</body></html>