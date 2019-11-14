<?php

session_start();
require_once('functions.php');

if (is_numeric($_GET['id'])) {
	$status = del_user($_GET['id']);
	echo "sure!";
	if ($status) {
		header('location: ../views/userlist.php');
	}
	else
	{
		die("Something Wrong");
	}
}
else
{
	die("Attempt!!!");
}

?>