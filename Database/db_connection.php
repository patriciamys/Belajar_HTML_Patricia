<?php
	function openConn(){
		$databaseHost = "localhost";
		$username = "root";
		$password = "";
		$namaDatabase = "patricia_db";
		$link = mysqli_connect($databaseHost, $username, $password, $namaDatabase);
		
		if($link == false){
			die("ERROR: ".mysqli_connect_error());
		}
		
		return $link;
	}
	$link = openConn();
?>

