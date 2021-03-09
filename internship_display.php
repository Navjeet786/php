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
			<th>phone</th>
			<th>address</th>
			<th>gender</th>
			<th>college</th>
			<th>qualification</th>
			<th>branch</th>
			<th>sem</th>
			<th>course</th>
			<th>action</th>

		</tr>
		<?php
		include "dbcon.php";
		$data = "select * from internship";
		$query = mysqli_query($con,$data);

		while ($result = mysqli_fetch_array($query))
		 {?>

		<tr>
			<td><?php echo $result['id'] ?></td>
			<td><?php echo $result['name'] ?></td>
			<td><?php echo $result['email'] ?></td>
			<td><?php echo $result['phone'] ?></td>
			<td><?php echo $result['address'] ?></td>
			<td><?php echo $result['gender'] ?></td>
			<td><?php echo $result['college'] ?></td>
			<td><?php echo $result['qualification'] ?></td>
			<td><?php echo $result['branch'] ?></td>
			<td><?php echo $result['sem'] ?></td>
			<td><?php echo $result['course'] ?></td>
			<td>
				<a href="internship_view.php?id=<?php echo$result['id']?>">view</a>
				<a href="internship_edit.php?id=<?php echo$result['id']?>">edit</a>
				<a href="internship_delete.php?id=<?php echo$result['id']?>">delete</a>
			</td>
		</tr>
		<?php
		}
		?> 	
	</table>

</body>
</html>