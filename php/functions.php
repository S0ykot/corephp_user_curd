<?php
	require_once('db.php');

	function validate($uname, $password){

		$conn = getConnection();
		
		$sql = "SELECT * from users where username='{$uname}' and password='{$password}'";

		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		return count($user);
	}


	function register($uname, $password, $email){

		$conn = getConnection();
		$sql = "INSERT into users values('', '{$uname}','{$password}', '{$email}', 0)";

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}

	}

	function all_users()
	{
		$conn=getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn,$sql);
		return $result;
	}

	function get_user($id)
	{
		//ss
		$conn =getConnection();
		$sql = "SELECT * from users where id=".$id;
		$result = mysqli_query($conn,$sql);
		return $result;
	}
	function update_user($id,$username,$password,$type,$email)
	{
		$conn = getConnection();
		$sql="UPDATE users SET password='$password',email='$email',type=$type WHERE id=$id AND username='$username'";
		if (mysqli_query($conn,$sql)) {
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

?>