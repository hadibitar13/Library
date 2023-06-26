<!DOCTYPE html>
<html>
<head>
	<title>Login - my website</title>
    <link rel="stylesheet" href="login.css" >
</head>
<body>


			<h2 style="text-align: center;">Login</h2>
			
            <form action="login_action.php" method="Post">
        <label for="#"><h3>log in</h3></label>
        <br>
        <label for="username">username</label>
        <input id="username" type="text" name="username" required>
        <br>
        <label for="password">password</label>
        <input type="password" name="password" required>
        <br>
        <input id="sub" type="submit" value="login">
        <br>
        <label id="register"><a href="register.php">Resgister now!</a></label>
    </form>
		</div>
	

</body>
</html>