<?php

require 'database.php';

if (!empty($_POST)) {
	// keep track post values
	$id = $_POST['id'];
	$regNum = $_POST['regNum'];
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$balance = $_POST['balance'];

	// insert data
	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "INSERT INTO user_data (id, regNum, name, gender, email, mobile, balance) values(?, ?, ?, ?, ?, ?, ?)";
	$q = $pdo->prepare($sql);
	$q->execute(array($id, $regNum, $name, $gender, $email, $mobile, $balance));
	Database::disconnect();
	header("Location: user data.php");
}
?>