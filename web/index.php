<?php
	
// Import the application classes
require_once('classes.php');

// Create an instance of the Application class
$app = new Application();
$app->setup();

// Declare an empty array of error messages
$errors = array();

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Blog</title>
	<meta name="description" content="SneakDiss IT 5236">
	<meta name="author" content="Darius Williams">
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php include 'header.php'; ?>
	<h2>SNEAK DISS	</h2>
	<p>
		This is the official shoe search website! <a href="login.php">create an account</a> or proceed directly to the 
		<a href="login.php">login page</a>.
	</p>
	<?php include 'include/footer.php'; ?>
	<script src="js/site.js"></script>
</body>
</html>
