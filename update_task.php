<?php
include('koneksi.php');

if(ISSET($_POST['insert'])){
    if($_POST['edit_task'] != ""){
        $task = $_POST['edit_task'];

        $koneksi->query("INSERT INTO `task` VALUES('', '$task', '')");
        header('location:index.php');
    }
}

?>

// ga kepake