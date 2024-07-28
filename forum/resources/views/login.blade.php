<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>
</head>
<body>
	<form method="post" action="login">
		<label>
			Email
		</label>
		<input type="text" name="email"/>
		<label>
			Password
		</label>
		<input type="Password" name="password"/>
		@csrf
		<input type="submit" name="Login" value="Login">
		<a href="/register">Register</a>
	</form>
</body>
</html>