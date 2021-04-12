<?php
	

	// Database connection
	
	$conn = new mysqli('localhost','root','','phpmyadmin');
	$Id = $_POST['Id'];
	$Password = $_POST['Password'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$PhoneNumber = $_POST['PhoneNumber'];
	$gender = $_POST['gender'];
    $Person =$_POST['Person'];
    $Description =$_POST['Description'];

	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration( Id, Password, username, email, PhoneNumber, gender, Person , Description) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $Id, $Password, $username, $email, $password, $PhoneNumber, $gender , $Person ,$Description );
		$execval = $stmt->execute();
		echo $execval;
		echo "Your Submition succesfully";
		$stmt->close();
		$conn->close();
	}
?>