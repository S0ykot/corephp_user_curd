<?php
	//session_start();
	if(isset($_COOKIE['username'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<style type="text/css">
		button{background: #255b89; border: none;color: white;cursor: pointer; padding: 5px 10px; text-decoration: none;}
	</style>
</head>
<body>

	<h1>Add New User</h1> 
	
	<a href="home.php"><button>Back</button></a>   
	<a href="../php/logout.php"><button>logout</button></a>

	<form method="post" action="../php/insertUser.php">
		<table>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Save" style="background: #255b89; border: none;color: white;cursor: pointer; padding: 5px 10px; text-decoration: none;"></td>
			</tr>
		</table>
	</form>


</body>	
</html>



<?php		
	}else{
		header('location: login.php');
	}

?>

