<?php
	
	if(isset($_GET['msg'])){
		
		echo $_GET['msg'];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style type="text/css">
		button{background: #255b89; border: none;color: white;cursor: pointer; padding: 5px 10px; text-decoration: none;}
	</style>
</head>
<body>

	<form method="POST" action="../php/loginCheck.php">
		<fieldset>
			<legend>Login</legend>
		<table>
			<tr>
				<td>UserName:</td>
				<td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit" style="background: #255b89; border: none;color: white;cursor: pointer; padding: 5px 10px; text-decoration: none;"></td>
				<td></td>
			</tr>
		</table>
		</fieldset>
	</form>

	<a href="reg.php"><button>Signup</button></a>
</body>
</html>