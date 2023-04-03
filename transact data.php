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
		
		.table {
			margin: auto;
			width: 90%; 
		}
		
		thead {
			color: #FFFFFF;
		}
		</style>
		
		<title>Transaction Data</title>
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
			<li><a  href="transaction.php">Transaction</a></li>
			<li><a class="active" href="transact data.php">Transact Data</a></li>
		</ul>
	</nav>
		<br>
		<div class="container">
            <div class="row">
                <h3>Transact Data Table</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
					  <tr bgcolor="#10a0c5" color="#FFFFFF">
					  <th>ID</th>
                      <th>Item Name</th>
                      <th>Amount</th>
                      <th>Date</th>
                      <th>Time</th>
					  
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM transact_data';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['id'] . '</td>';
                            echo '<td>'. $row['item'] . '</td>';
                            echo '<td>'. $row['amount'] . '</td>';
                            echo '<td>'. $row['date'] . '</td>';
                            echo '<td>'. $row['time'] . '</td>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
				</table>
			</div>
		</div> <!-- /container -->
	</body>
</html>