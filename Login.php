<!DOCTYPE html>
<html>
<head>
	<title>Login
	</title>
</head>
<body>
<table cellpadding="5" cellspacing="10" align="center">
	<h3 align ="center" style="background-color:#ff2222; padding:10px; margin:70px;color:#ffffff">Please login to continue!</h3>
	<form method="post" action="validate.php">
		<tr><th>ID</th><td><input type="text" name="id"></td></tr>
		<tr><th>Password</th><td><input type="password" name="password"></td></tr>
		<tr><td colspan="2" align="center"><input type="checkbox" name="remember" value="1">Remember Me</td></tr>
		<tr><td colspan="2" align="right"><input type="submit" name="login" value="Login"></td></tr>
	</form>
</table>
</body>
</html>