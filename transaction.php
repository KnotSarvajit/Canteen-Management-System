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
			text-align: center;
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
			flex-direction: column;

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
		.form-horizontal{
			background: #fff;
			padding: 20px 20px 0 20px;
			border-radius: 20px;
		}
		.form-actions{
			background: #fff;
		}
		</style>
		
		<title>Transaction</title>
	</head>
	
	<body>
	<header>
		<h1>Canteen Management System</h>
	</header>
	<nav>
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="user data.php">User Data</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a  href="read tag.php">Read Tag ID</a></li>
			<li><a class="active" href="transaction.php">Transaction</a></li>
			<li><a href="transact data.php">Transact Data</a></li>
		</ul>
	</nav>
		<h2 align="center">Pay for your bills....</h2>

		<div class="container">
			<br>
			<div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: #f2f2f2;">
				<div class="row">
					<h3 align="center">Transact</h3>
				</div>
				<br>
				<form id="transactForm" class="form-horizontal" action="insertTransDB.php" method="post" >
					<div class="control-group">
						<label class="control-label">ID</label>
						<div class="controls">
							<textarea name="id" id="getUID" placeholder="Please Scan your Card / Key Chain to display ID" rows="1" cols="1" required></textarea>
						</div>
					</div>				
					
					<div class="control-group">
						<label class="control-label">Item Name</label>
						<div class="controls">
							<input id="itemName" name="item" type="text"  placeholder="" required>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Amount</label>
						<div class="controls">
							<input id="amount" name="amount" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="form-actions">
						<button id="pay-now" type="submit" class="btn btn-success">Pay Now</button>
                    </div>
				</form>
				
			</div>               
		</div> <!-- /container -->	
		<script>
			var myVar = setInterval(myTimer, 1000);
			var myVar1 = setInterval(myTimer1, 1000);
			var oldID="";
			clearInterval(myVar1);

			function myTimer() {
				var getID=document.getElementById("getUID").innerHTML;
				oldID=getID;
				if(getID!="") {
					myVar1 = setInterval(myTimer1, 500);
					pay(getID);
					clearInterval(myVar);
				}
			}
			
			function myTimer1() {
				var getID=document.getElementById("getUID").innerHTML;
				if(oldID!=getID) {
					myVar = setInterval(myTimer, 500);
					clearInterval(myVar1);
				}
			}
			
			function pay(str) {				
					document.getElementById("transactForm").submit();
				}		
			
		</script>
	</body>
	
</html>