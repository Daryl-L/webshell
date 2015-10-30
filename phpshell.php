<!DOCTYPE html>
<html>
<head>
	<title>webshell</title>
</head>
<body>
	<form action="" method="post">
		<input name="password" type="password" />&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" />
	</form>
</body>
</html>

<?php
	$password = $_POST[password];
	if ('daryl' !== $password) {
		exit;
	}
?>