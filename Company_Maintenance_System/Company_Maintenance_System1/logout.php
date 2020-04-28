<?php
		session_start();
		session_unset($_SESSION['User_Name']);
		session_destroy();
		header("location:login.php");

	?>
	