<?php
	$koneksi = new mysqli("localhost", "root", "", "to_do_list");
 
	if(!$koneksi){
		echo("Error: Cannot connect to the database");
	}
?>