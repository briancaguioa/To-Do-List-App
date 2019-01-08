<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>Document</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">

	<!-- external css -->
	<link rel="stylesheet" type="text/css" href="assets/stylelanding.css">
</head>


<body>
	<div class="container">
		<form action="./app/controllers/register.php" method="POST">

			<h1 class="text-center">To-Do LIST APP</h1>
			
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="enter task" name="task">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary btn-primary" type="submit" id="button-addon2"  name="submit">Button</button>
					</div>
			</div>
		</form>
	


	<!-- list -->

	<h1 class="text-center">To-do list</h1>
	<ul id="taskList">

	<?php

	require_once './app/controllers/connect.php';


	$sql = "SELECT * FROM tasks";

	$result = mysqli_query($conn, $sql);

	while($row =  mysqli_fetch_assoc($result)) { ?>
		<li data-id="<?php echo $row['id'] ; ?>">
			<?php echo $row['name'] . " is task number " . $row['id'] ; ?>
			<!-- <button name= done>Done</button> -->
			<button class="deleteBtn btn btn-outline-danger">Delete</button>
		</li>

	<?php } ?>
	</ul>



	<script>

		//delete
		$('#taskList').on('click', '.deleteBtn', function() {
			const task_id = $(this).parent().attr('data-id');
			$.ajax({
				method : 'post',
				url : './app/controllers/delet.php',
				data : { task_id : task_id }
			}).done( data => {
				$(this).parent().fadeOut();
			});
		});
	</script>
	


	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<!-- <script src="assets/js/"></script> -->
	<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>