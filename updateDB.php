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
	$sql = "UPDATE user_data SET regNum = '$regNum', name = '$name', gender = '$gender', email = '$email', mobile = '$mobile', balance = '$balance' WHERE id = '$id'";
	$q = $pdo->prepare($sql);
	$q->execute();
	Database::disconnect();
	header("Location: user data.php");
}
?>