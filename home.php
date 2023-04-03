<?php
$Write = "<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
file_put_contents('UIDContainer.php', $Write);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Canteen Management System</title>
	<style>
		/* basic styles */
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
	</style>
</head>

<body>
	<header>
		<h1>Canteen Management System</h>
	</header>
	<nav>
		<ul>
			<li><a class="active" href="home.php">Home</a></li>
			<li><a href="user data.php">User Data</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
			<li><a href="transaction.php">Transaction</a></li>
			<li><a href="transact data.php">Transact Data</a></li>
		</ul>
	</nav>
	<main class="container">
		<div >
			<img class="banner-img" src="https://cdni.iconscout.com/illustration/premium/thumb/boy-collecting-food-from-school-food-canteen-6257663-5121390.png" alt="">
		</div>
		<div>
			<h2>Welcome to our Canteen Management System!</h2>
			<p>Our system helps you manage your canteen operations more efficiently and effectively.</p>
			<p>With our system, you can:</p>
			<ul>
				<li>Track inventory levels in real time</li>
				<li>Manage food and drink orders more easily</li>
				<li>Generate reports on sales and profits</li>
			</ul>
			<p>Try our system today and see the difference it can make for your canteen!</p>
			<a href="#" class="cta-btn">Get Started</a>
		</div>

	</main>
</body>

</html>