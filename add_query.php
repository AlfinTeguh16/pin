<?php
	include('koneksi.php');
	
	if(ISSET($_POST['insert'])){
		if($_POST['form_task'] != ""){
			$task = $_POST['form_task'];
 
			$koneksi->query("INSERT INTO `task` VALUES('', '$task', '')");
			header('location:index.php');
		}
	}
?>