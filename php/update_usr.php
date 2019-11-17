<?php
session_start();
require_once('functions.php');

if (isset($_POST['submit'])) {
	

	$email = $_POST['email'];
	$npass = $_POST['npass'];
	$cpass = $_POST['cpass'];

	if (empty($email) || empty($cpass) || $type==-1) {
		die ( "Blank / invalid input" );
	}
	else
	{
		if ($cpass==$_SESSION['pass']) {
			if ($npass=='') {
				$npass = $_SESSION['pass'];
				$status = update_user($_SESSION['id'],$_SESSION['uname'],$npass,0,$email);
			if ($status) {
				header('location: ../views/userlist.php');
				$_SESSION['id']='';
				$_SESSION['uname'] = '';
				$_SESSION['pass'] ='';
			}
			else
			{
				die("Something wrong!!");
			}
			}
		}
		else
		{
			die("Current password not matching");
		}
	}

}



?>