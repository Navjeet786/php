<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th>dob</th>
		<th>phone</th>
		<th>college</th>
		<th>gender</th>
	</tr>
	<?php
include "dbcon.php";
        $data = "select * from teacher";
		$query = mysqli_query($con,$data);

		while ($result = mysqli_fetch_array($query))
		{
			
		
		


	?>
	<tr>
			<td><?php echo $result['id'] ?></td>
			<td><?php echo $result['name'] ?></td>
			<td><?php echo $result['email'] ?></td>
			<td><?php echo $result['dob'] ?></td>
			<td><?php echo $result['phone'] ?></td>
			<td><?php echo $result['college'] ?></td>
			<td><?php echo $result['gender']?></td>
					
			</tr>
			<?php
		    }
		    ?>
		
	</table>

</body>
</html>