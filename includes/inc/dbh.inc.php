<?php

	$dbServername = "127.0.0.1:3306";
	$dbUsername = "pzi_dsaric";
	$dbPassword = "68mCxHxJwTl4";
	$dbName = "pzidb_dsaric";

	//povezujen se na bazu
	$conn = new mysqli( $dbServername, $dbUsername, $dbPassword, $dbName);
	

	//provjera konekcije
	if($conn->connect_error) {

		die("Connection failed: ". $conn->connect_error);
	}

