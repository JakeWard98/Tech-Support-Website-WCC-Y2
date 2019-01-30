<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="PC Wizards">
<meta name="keywords" content="PC, Help, PC Wizards">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<head>
	<title>PC Wizards</title>
</head>
<!--MAIN CSS-->
<link rel="stylesheet" type="text/css" href="css/main.css">
<!--FONT-->
<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet" type="text/css">
<style>
       .js [data-entrance] { visibility: hidden; }
</style>

<?php include 'includes/header.php';?>
<?php include 'includes/nav.php';?>

<div class="text">
	<h1> FAULT LOG </h1>
		<p></p>
		
		<form name="fault" onsubmit="return regCheck()" method="POST">
	
			<input type="text" name="firstname" placeholder="First Name">
			<br>
			<br>
			<input type="text" name="lastname" placeholder="Last Name">
			<br>
			<br>
			<input type="email" name="email" placeholder="Email">
			<br>
			<br>
			<textarea type="text" name="description" placeholder="Place a Description of Your Fault here:"></textarea>
			<br>
			<br>
			<input type="submit" value="Submit">
		
		</form>
</div>

<script src="js/fontSize.js"></script>

</html>