<?php
$sum = array($_POST['user-email'], " / ", $_POST['user-text']);

	file_put_contents('database/'.$_POST['user-name'], $sum);
	header('Location: contact.html');
?>
