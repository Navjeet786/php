<?php
include 'dbcon.php';

$id = $_GET['id'];
$a = "select * from internship where id = $id";
$b = mysqli_query($con,$a);
$result = mysqli_fetch_array($b);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card shadow">
					<div class="card-body">

					<center>
						<h1>
							Name: <?php echo$result['name'] ?>
						</h1><br>
						<h1>
							email: <?php echo$result['email'] ?>
						</h1><br>
						<h1>
							phone: <?php echo$result['phone'] ?>
						</h1><br>
						<h1>
							address: <?php echo$result['address'] ?>
						</h1><br>
						<h1>
							gender: <?php echo$result['gender'] ?>
						</h1><br>
						<h1>
							college: <?php echo$result['college'] ?>
						</h1><br>
						<h1>
						qualification: <?php echo$result['qualification'] ?>
						</h1><br>
						<h1>
							branch: <?php echo$result['branch'] ?>
						</h1><br>
						<h1>
							sem: <?php echo$result['sem'] ?>
						</h1><br>
						<h1>
							course: <?php echo$result['course'] ?>
						</h1>	</center>

						
					</div>
					
				</div>
				
			</div>
			
		</div>
	</div>

</body>
</html>