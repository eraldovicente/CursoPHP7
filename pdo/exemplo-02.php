<?php
	$serverName = "(local)";   
	$database = "dbphp7";  
	  
	   
	$uid = "sa";                    
	$pwd = "root";

	$conn = new PDO("sqlsrv:server=$serverName;Database = $database", $uid, $pwd);


	$stmt = $conn->prepare("SELECT * FROM td_usuario ORDER BY deslogin");

	$stmt->execute();

	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


	foreach ($results as $row)
	{
			foreach ($row as $key => $value)
			{
				echo "<strong>" .$key. "</strong>" . $value . "<br/>";
			}

			echo "================================<br/>";
	}

	//var_dump($results);


?>