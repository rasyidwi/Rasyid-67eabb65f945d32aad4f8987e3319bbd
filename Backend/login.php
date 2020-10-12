<!DOCTYPE html>
<html>
<head>
	
	<title>Login</title>
</head>
<body>
	<div class="login-form">
         <form class="form-signin" method="POST" id="login-form" action="login_process.php">
	        <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
	        <input type="password" name="password" class="form-control" placeholder="Password">
	        <button class="btn btn-lg btn-primary btn-block" name="btn-login" id="btn-login" type="submit">
	            Sign in</button>
	        <a href="register.php">Register</a>
	        </form>
    </div>
</body>
</html>