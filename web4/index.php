<?php
	if (isset($_POST['submit'])){
		$user = htmlentities($_POST['user']);
		$pass = htmlentities($_POST['pass']);

		setcookie('user', $user, time()+3600);
		setcookie('pass', $pass, time()+3600);

		header('Location: loggedin.php');
	}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Data</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Name: <input type="text" name="user"><br>
    Password: <input type="text" name="pass"><br/><br/>
    <input type="submit" name="submit" value="Log Me In">
    </form>
</body>
</html>