<?php  session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Users</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<header>
		<div class="appname">User Management System</div>
		<div class="loggedin">Welcome <?php $_SESSION['first_name'];?>! <a href="logout.php">Log Out</a></div>
	</header>
	<h1>Users</h1>
	

</body>
</html>