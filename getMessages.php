<?php
	//The PHP Data Objects (PDO) extension defines a lightweight, consistent interface for accessing databases in PHP.
	$db = new PDO('mysql:host=localhost;dbname=chat', 'root', 'root');
	//Select the data from the table
	//PDO::prepare — Prepares a statement for execution and returns a statement object 
	$query = $db->prepare("SELECT * FROM messages");
	//PDOStatement::execute — Executes a prepared statement
	$query->execute();
	//PDOStatement::fetch — Fetches the next row from a result set
	//PDO::FETCH_ASSOC: returns an array indexed by column name as returned in your result set 
	while($fetch = $query->fetch(PDO::FETCH_ASSOC))
	{
		$name = $fetch['name'];
		$message = $fetch['message'];
		//ucwords Uppercases the first character of each word in a string(the username in this case)
		echo "<li class='next-message'><b>".ucwords($name)."</b> : ".$message."</li>";
	}
?>