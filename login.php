<!DOCTYPE html>
<html>
<head>
	<title>my login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="form" class="form">
		<form action="process.php" method ="POST">
			<p>
				<label>Username:</label>
				<input type="text" id="user" name="user"/>
			</p>
			<p>
				<label>Password:</label>
				<input type="Password" id="pass" name="pass"/>
			</p>
			<p>
				<input type="submit" id="btn" value="Login"/>
			</p>
		</form>
	</div>
</body>
</html>