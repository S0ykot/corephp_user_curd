<?php

require_once('../php/functions.php');

if ($_COOKIE['username']) {

?>
<html>
<head>
	<title>User List</title>
	<style type="text/css">
		#B1{background: #255b89; border: none;color: white;cursor: pointer; padding: 5px 10px; text-decoration: none;}
		#B2{background: #76c54f; border: none;color: white;cursor: pointer; padding: 5px 13px; text-decoration: none;}
		#B3{background: #ff493b; border: none;color: white;cursor: pointer; padding: 5px 13px; text-decoration: none;}
	</style>
</head>
<body>

	<h2>User List</h2>
	<a href="home.php"><button id="B1">Back</button></a> 
	<a href="../php/logout.php"><button id="B1">logout</button></a>

	<br>
	<br>

	<table border="1" >
		<tr>
			<th>UserName</th>
			<th>Password</th>
			<th>Email</th>
			<th>Type</th> 
			<th>Action</th> 
		</tr>
		<?php

		$users = all_users();
		if (mysqli_num_rows($users)>0) {
			while ($row=mysqli_fetch_assoc($users)) {
			if ($row['type']=='0') {
				$type='user';
			}
			else
			{
				$type='admin';
			}
			echo '
			<tr>
			<td>'.$row['username'].'</td>
			<td>'.$row['password'].'</td>
			<td>'.$row['email'].'</td>
			<td>'.$type.'</td>
			<td>
				<a href="edit.php?id='.$row['id'].'"><button id="B2">Edit</button></a> 				<a href="../php/delete.php?id='.$row['id'].'" onclick="return confirm(`Are you sure?`);"><button id="B3">Delete</button></a>
			</td>
			</tr>
			';
		}
		}
		?>
	</table>
</body>
</html>

<?php

}
else
{
	header('Location: login.php?msg=login first');
}

?>