<!DOCTYPE html>
<html lang="en">
	<head>
		<title>To Do List Alfin & Romadiah</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>

	</head>
<body>
	

<div class="card" style="width: 900px;display: flex; justify-content: center; align-items: center; margin-left: 500px; margin-top: 200px;">
  <div class="card-body">

			<h3><strong>To Do List</strong></h3>

			<br>
				<form method="POST" class="form-inline " action="add_query.php">
					<input type="text" class="form-control d-flex justify-content-center" name="form_task" required style="margin-bottom:2px;"/>
					<button class="btn btn-dark form-control d-flex justify-content-center" name="insert" style="margin-left:00px;">Insert Task</button>
				</form>

			<br><br><br><br>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Task</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
				<div>


					<?php
						include('koneksi.php');
						$query = $koneksi->query("SELECT * FROM `task` ORDER BY `task_id` ASC");
						$count = 1;
						while($fetch = $query->fetch_array()){
					?>
					<tr>
						<td><?php echo $count++?></td>
						<td><?php echo $fetch['task']?></td>
						<td><?php echo $fetch['status']?></td>
						<td colspan="2">
							<center>
								<?php
									if($fetch['status'] != "Done"){
										echo 
										'<a href="finish_task.php?task_id='.$fetch['task_id'].'" class="btn btn-success">Done<span class="glyphicon glyphicon-check"></span></a>';
									}
								?>
								<a href="delete_query.php?task_id=<?php echo $fetch['task_id']?>" class="btn btn-danger">Delete</a>
								<a href="update_form.php?task_id=<?php echo $fetch['task_id']?>" class="btn btn-danger">Edit</a>


									</div>
									</div>
								</div>
								</div>

							</center>
						</td>
					</tr>
					<?php
						}
					?>
				</div>
		</table>
		</div>
	</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>