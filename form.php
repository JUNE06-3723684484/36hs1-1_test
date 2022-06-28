<?php
$sum = array($_POST['email'], " / ", $_POST['text']);

	file_put_contents('./database/'.$_POST['name'], $sum);
	header('Location: ./contact.html');
?>
