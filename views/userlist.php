<?php

require_once('../php/functions.php');

?>
<html>
<head>
	<title>User List</title>
</head>
<body>

	<h2>User List</h2>
	<a href="home.php">Back</a> |
	<a href="../php/logout.php">logout</a>

	<br>
	<br>

	<table border="1" >
		<tr>
			<th>UserName</th>
			<th>Password</th>
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
			<td>'.$row['username'].'</td>
			<td>'.$type.'</td>
			<td>
				<a href="edit.php?id='.$row['id'].'">EDIT</a> |
				<a href="../php/delete.php?id='.$row['id'].'" onclick="return confirm(`Are you sure?`);">DELETE</a>
			</td>
			</tr>
			';
		}
		}
		?>
	</table>
</body>
</html>