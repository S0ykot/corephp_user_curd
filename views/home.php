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

	<h1>Welcome Home! <?=$_COOKIE['username']?></h1> 
	
	<a href="userlist.php"><button>User List</button></a>  
	<a href="adduser.php"><button>Add User</button></a> 
	<a href="../php/logout.php"><button>logout</button></a>

</body>	
</html>


<?php		
	}else{
		header('location: login.php');
	}

?>

