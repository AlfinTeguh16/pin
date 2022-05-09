<?php
	include('koneksi.php');
 
	if($_GET['task_id'] != ""){
		$task_id = $_GET['task_id'];
 
		$koneksi->query("UPDATE `task` SET `status` = 'Finish' WHERE `task_id` = $task_id") or die(mysqli_errno($koneksi));
		header('location: index.php');
	}
?>