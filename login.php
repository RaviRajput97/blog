<!DOCTYPE html>
`<html>
<head>
	<title>Login or Signup</title>
	<link rel="stylesheet" type="text/css" href="style.css
	">
</head>
<body>
	<div class="center">
		<h1>Login</h1>
		<form action="validation.php" method="post">
			<label>Username</label>
			<input type="text" name="luser">

			<label>Password</label>
			<input type="password" name="lpassword">

			<button type="submit">Login</button>
			<!-- we are given type to button tomake it submit -->

		</form>
	</div>

	<br>

	<div class="center">
		<h1>Signup</h1>
		<form action="registration.php" method="post">
			<label>Username</label>
			<input type="text" name="user">

			<label>Password</label>
			<input type="password" name="password">

			<button value="submit">Signup</button>

		</form>
	</div>
</body>
</html>