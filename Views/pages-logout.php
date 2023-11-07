<?php
	require '../Config/config.php';
	session_destroy();

	header('Location: home');
?>
