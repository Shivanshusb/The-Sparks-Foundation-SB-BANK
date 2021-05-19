<?php

	$conn = pg_connect('host = ec2-54-152-185-191.compute-1.amazonaws.com','port=5432','user= vcayosrkugadlp','password=8f652b6a92a91660b1aee253e9f656855bf1173840857a3fda803dc9d01dc9d6','dbname=d1bi89p4jngjnt');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".pg_connect_error());
	}

?>
