
<?php
session_start();
require_once('../php/functions.php');
$uname = '';
$pass = '';
$type = '';
$email = '';
$type=null;
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	if (is_numeric($id)) {
		$data = get_user($id);
		$row=mysqli_fetch_assoc($data);
		if ($row['id']<$id) {
			$uname = '';
			$pass = '';
			$type = '';
			$email = '';
			$type=-1;
		}
		else
		{
			$_SESSION['id']=$row['id'];
			$_SESSION['uname'] = $row['username'];
			$_SESSION['pass'] =$row['password'];
			$uname = $row['username'];
			$pass = $row['password'];
			$type = $row['type'];
			$email = $row['email'];
			$type = $row['type'];
		}
	}
	else
	{
		die ( "Hacking attempt!!!" );
	}
	
}
else
{
			$id='';
			$uname = '';
			$pass = '';
			$type = '';
			$email = '';
			$type=-1;
}

?>

<html>
<head>
	<title>Edit user</title>
</head>
<body>

<fieldset>
	<legend>Edit user</legend>
	<form method="POST" action="../php/update_usr.php">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" value="<?=$uname;?>" disabled></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email" value="<?=$email;?>"></td>
		</tr>
		<tr>
			<td>New Password:</td>
			<td><input type="password" name="npass"></td>
		</tr>
		<tr>
			<td>Current Password:</td>
			<td><input type="password" name="cpass"></td>
		</tr>
		<tr>
			
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Update"></td>
			<td><input type="reset" name="reset"></td>
		</tr>
	</table>
</form>
</fieldset>
<a href="home.php">Back</a>
</body>
</html>