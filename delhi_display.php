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
			<th>city</th>
			<th>action</th>
		</tr>
		<?php
		include "dbcon.php";

		$data = "select * from delhi";
		$query = mysqli_query($con,$data);
       
        while ($result = mysqli_fetch_array($query)) 
        {
		?>
		<tr>
			<td><?php echo $result['id'] ?></td>
			<td><?php echo $result['name'] ?></td>
			<td><?php echo $result['city'] ?></td>
			<td>
				<a href="delhi_view.php?id=<?php echo $result['id'] ?>">view</a>
				<a href="">edit</a>
				<a href="">delete</a>
			</td>
			
		</tr>
		<?php 
	    }
	    ?>
	</table>

</body>
</html>