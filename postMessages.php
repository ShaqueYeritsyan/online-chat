<?php
	//The PHP Data Objects (PDO) extension defines a lightweight, consistent interface for accessing databases in PHP.
	$db = new PDO('mysql:host=localhost;dbname=chat', 'root', 'root');
	$text = ($_POST['text']);
	$name = ($_POST['name']);
	//Select the data from the table
	//PDO::prepare — Prepares a statement for execution and returns a statement object
	$insert = $db->prepare("INSERT INTO `messages` VALUES('', '".$name."', '".$text."')");
	//PDOStatement::execute — Executes a prepared statement
	$insert->execute();
?>