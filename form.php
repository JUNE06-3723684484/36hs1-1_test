<?php
$nametext = array($_POST['email'], " / ", $_POST['text']);

	file_put_contents('database/'.$_POST['name'], $nametext);
	header('Location: /contact.html');
?>
