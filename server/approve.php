<?php

  $conn = mysqli_connect('localhost', 'root', '', 'sysengr') or die('Cannot connect to database');

  if (isset($_POST['approve'])) {
  	$id = $_POST['id'];
  	$matric = $_POST['matric'];

  	$query = "SELECT * FROM clearance WHERE ID = {$id}";

  	if (mysqli_query($conn, $query)) {

  		$answer = mysqli_query($conn, $query);

  		$status = mysqli_fetch_assoc($answer);

  		mysqli_free_result($answer);

  		$new_status = $status['status'] + 1;

  		// echo $payments['Payments'];

  		$query2 = "UPDATE clearance SET status = {$new_status} WHERE ID = {$id} AND matric = {$matric}";

  		$answer2 = mysqli_query($conn, $query2);

  		header('Location: ../staff/dashboard.php');
  	} else {
  		echo $id.','.$matric;
  		echo "I am dead";
  	};

  };

  mysqli_close($conn);

?>