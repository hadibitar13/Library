<!DOCTYPE html>
<html>
<head>
	<title>Register - my website</title>
    <link rel="stylesheet" href="css/style.css" >
</head>
<body>




		<div style="margin: auto;max-width: 600px">

			<h2 style="text-align: center;">Register</h2>

            <form action="regis.php" method="Post">
        <table>
            <tr><td colspan="2" align="center">Register Now</td></tr>
            <tr><td>username</td><td><input type="text" name="username" placeholder="enter your username"></td></tr>
            <tr><td>password</td><td><input type="password" name="password" placeholder="enter your password"></td></tr>
            <tr><td>email</td><td><input type="email" name="email" placeholder="enter your email"></td></tr>
            <tr><td><input type="submit"></td><td><input type="reset"></td></tr>
        </table>
    </form>
		</div>

</body>
</html>