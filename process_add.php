<?php
session_start();

	$filename = $_FILES['image']['name'];   //name of the file index is 'name' not 'filename'
	$location = $_FILES['image']['tmp_name'];
	move_uploaded_file($location, "uploads/$filename");

	$username = $_SESSION['username'];
	$title = $_POST['title'];
	$category = $_POST['category'];
	$description = $_POST['description'];
	$tags = $_POST['tags'];


	//connect to the database server
	$db = mysqli_connect("localhost", "root", "", "project1") or die(mysqli_error($db));

	//run an insert query using the form data
	$q = "insert into project1 values(‘null’,'$username', '$gender', '$age', '$email', '$habby', '$filename')";

	//execute the query
    mysqli_query($db, $q) or die(mysqli_error($db));\

	 //back to home
    header("Location:index.php");
    exit(0);


?>
