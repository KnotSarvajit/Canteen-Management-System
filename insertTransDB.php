<?php

require 'database.php';

if (!empty($_POST)) {
	// keep track post values
    // insert data
	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
	$id = $_POST['id'];
	$item = $_POST['item'];
	$amount = $_POST['amount'];
    $date_time = new DateTime();    
    $date_str = $date_time->format('Y-m-d');
    $time_str = $date_time->format('H:i:s');
    $sql = "SELECT balance FROM user_data WHERE id = '$id'";
    $result = $pdo -> query($sql);
   
    $row = $result -> fetch(PDO::FETCH_ASSOC);
    $current_balance = $row["balance"];
    $new_balance = $current_balance - $amount;
    $sql = "UPDATE user_data SET balance = '$new_balance' WHERE id = '$id'";
    $q = $pdo->prepare($sql);
	$q->execute();
    echo "User $id has a balance of $current_balance";
    if ($pdo->query($sql) === TRUE) {
        echo "User $id balance updated successfully. New balance is $new_balance";
      } else {
        echo "Error updating user $id balance";
      }
    


	
	$sql = "INSERT INTO transact_data (id, item, amount, date, time) values(?, ?, ?, ?, ?)";
	$q = $pdo->prepare($sql);
	$q->execute(array($id, $item, $amount, $date_str, $time_str));
	Database::disconnect();
	header("Location: transact data.php");
}
?>