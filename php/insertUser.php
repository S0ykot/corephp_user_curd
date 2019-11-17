<?php
	require_once 'functions.php';
	if (isset($_POST['submit'])) {
		$uname = $_POST['username'];
		$pass = $_POST['password'];
		$email = $_POST['email'];

		if (empty($uname) OR empty($pass) OR empty($email)) {
			die('Empty value found');
		}
		else
		{
			$data = register($uname,$pass,$email);
			if ($data) {
				header('Location: ../views/userlist.php');
			}
			else
			{
				die('Something wrong');
			}
		}
	}
?>