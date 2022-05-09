<?php
include('koneksi.php');

if(ISSET($_GET['update_form'])){
    if($_GET['update_form'])
        $task_id = $_GET['task_id'];

        $koneksi->query("UPDATE `task` SET `task` = '$task' WHERE `task_id` = '$task_id'");
        header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>To Do List Alfin & Romadiah</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>

	</head>
<body>

<div style="width: 400px; margin-top: 300px; margin-left: 700px; ">
<form>
  <div class="form-group">
<!---
    <label for="update_task" style="font-size: 40px;"><strong>Edit Task</strong> <?php= $edit_task -> task ?></label>
    <input type="form" class="form-control" id="update_form" name="update_form" aria-describedby="emailHelp" placeholder="Insert New Task" style="margin-bottom: 10px; margin-top: 10px;">
  </div>

  <button type="submit" class="btn btn-primary" name="submit_edit" onclick="return confirm('Task already changed!!')">Save New Task</button>
  <a href="index.php?"  class="btn btn-primary">Back</a>
</form>
--->
<form method="POST" class="form-inline " action="update_form.php">
	<input type="text" class="form-control d-flex justify-content-center" name="update_form" required style="margin-bottom:2px;"/>
	<button class="btn btn-dark form-control d-flex justify-content-center" name="insert_update" style="margin-left:00px;">Insert Update</button>
</form>

</body>