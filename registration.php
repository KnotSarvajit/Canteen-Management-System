<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<script src="jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				 $("#getUID").load("UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("UIDContainer.php");
				}, 500);
			});
		</script>
		
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
		}
		
		textarea {
			resize: none;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #4CAF50;
			width: 70%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #3e8e41;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		* {
			box-sizing: border-box;
			margin: 0;
			padding: 0;
		}

		body {
			font-family: Arial, sans-serif;
			background-color: #f7f0e9;
			/* cream */
			color: #333;
		}

		/* header */
		header {
			background-color: #293e71;
			/* blue */
			color: #fff;
			padding: 1rem;
			text-align: center;
		}

		header h1 {
			margin: 0;
			font-size: 2rem;
			font-weight: normal;
		}

		.container {
			padding: 2rem 2rem;
			display: flex;

		}

		/* navigation */
		nav {
			background-color: #fff;
			color: #333;
			padding: 0.5rem;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		}

		nav ul {
			list-style: none;
			display: flex;
			justify-content: center;
			margin: 0;
		}

		nav li {
			margin: 0 1rem;
		}

		nav a {
			color: #333;
			text-decoration: none;
			padding: 0.5rem;
		}

		nav a.active {
			background-color: #3a4750;
			/* blue */
			color: #fff;
		}

		/* hero banner */
		.banner-img {
			height: 400px;
			display: flex;
			justify-content: center;
			align-items: center;
			text-align: center;
			color: #000;	
		}

		.hero-banner h2 {
			font-size: 3rem;
			margin-bottom: 1rem;
			text-shadow: 2px 2px #333;
		}

		.hero-banner p {
			font-size: 1.5rem;
			text-shadow: 2px 2px #333;
		}

		/* main content */
		main {
			max-width: 1000px;
			margin: 2rem auto;
			padding: 1rem;
			background-color: #fff;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			border-radius: 5px;
			line-height: 2rem;
		}

		main h2 {
			font-size: 1.5rem;
			margin-bottom: 1rem;
		}

		main p {
			line-height: 1.5;
			margin-bottom: 1rem;
		}

		/* call to action button */
		.cta-btn {	
			display: inline-block;
			margin-left: 200px;
			background-color: #3a4750;
			/* blue */
			color: #fff;
			padding: 0.75rem 1.5rem;
			border-radius: 5px;
			text-decoration: none;
			transition: background-color 0.3s ease;
		}

		.cta-btn:hover {
			background-color: #526278;
			/* darker blue */
		}
		.form-horizontal{
			background: #fff;
			padding: 20px 20px 0 20px;
			border-radius: 20px;
		}
		.form-actions{
			background: #fff;
		}
		</style>
		
		<title>Registration</title>
	</head>
	
	<body>

	<header>
		<h1>Canteen Management System</h>
	</header>
	<nav>
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="user data.php">User Data</a></li>
			<li><a class="active"  href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
			<li><a href="transaction.php">Transaction</a></li>
			<li><a href="transact data.php">Transact Data</a></li>
		</ul>
	</nav>

		<div class="container">
			<br>
			<div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: #f2f2f2;">
				<div class="row">
					<h3 align="center">Registration Form</h3>
				</div>
				<br>
				<form class="form-horizontal" action="insertDB.php" method="post" class="form">
					<div class="control-group">
						<label class="control-label">ID</label>
						<div class="controls">
							<textarea name="id" id="getUID" placeholder="Please Scan your Card / Key Chain to display ID" rows="1" cols="1" required></textarea>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Registration Number</label>
						<div class="controls">
							<input id="regNum" name="regNum" type="text"  placeholder="" required>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label">Name</label>
						<div class="controls">
							<input id="div_refresh" name="name" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Gender</label>
						<div class="controls">
							<select name="gender">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Email Address</label>
						<div class="controls">
							<input name="email" type="text" placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Mobile Number</label>
						<div class="controls">
							<input name="mobile" type="text"  placeholder="" required>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label">Balance</label>
						<div class="controls">
							<input name="balance" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Save</button>
                    </div>
				</form>
				
			</div>               
		</div> <!-- /container -->	
	</body>
</html>