
<?php

require_once('../php/functions.php');

if ($_GET['id']) {
	$id=$_GET['id'];
	$data = get_user($id);
	if (mysqli_num_rows($data)>0) {
		while ($row=mysqli_fetch_assoc($data)) {
			$uname = $row['username'];
			$pass = $row['password'];
			$type = $row['type'];
			$email = $row['email'];
			$type = $row['type'];
		}
	}
}
else
{
			$uname = '';
			$pass = '';
			$type = '';
			$email = '';
			$type='';
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
			<td>Type</td>
			<td>
				<select name="type">
					<option></option>
					<option value="1"
					<?php if($type==1){echo "selected";}else{echo "";} ?>
					>Admin</option>
					<option value="0"
					<?php if($type==0){echo "selected";}else{echo "";} ?>
					>User</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Update"></td>
			<td><input type="reset" name="reset"></td>
		</tr>
	</table>
</form>
</fieldset>

</body>
</html>