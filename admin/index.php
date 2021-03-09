<?php include 'links.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
</head>
<body>
<br><br><br><br><br><br>

<section>

<div class="container">
    <div class="row">
        
    <div class="col-md-3"></div>
    <div class="col-md-6">


<div class="card shadow">
    <div class="card-body">
<h1 class="text-center">ADMIN LOGIN</h1>
<br>
        <form method="post" action="admininsert.php">
            <div class="form-group">
            <label>Admin Name:</label>
            <input type="text" name="adminname" class="form-control a" placeholder="enter username">
        </div>

        <div class="form-group">
            <label>Password:</label>
            <input type="Password" name="adminpass" class="form-control a" placeholder="Enter password">
        </div>
        <center>
        <input type="submit" class="btn btn-outline-danger" value="submit"></input>
        </center>
        </form>
           <br>
        
</div>

</div>
<div class="col-md-3"></div>
</div>
</div>
</div>
<br><br><br><br>
</section>
</body>
</html>