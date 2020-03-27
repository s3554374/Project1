<?php
	if(isset($_POST['username']))
        $username = $_POST['username'];
	if(isset($_POST['password']))
        $password = $_POST['password'];

	$db = mysqli_connect("localhost", "root","", "user");
	$q = "insert into user values(null, '$username', SHA('$password'),CURRENT_TIME())";
	mysqli_query($db, $q) or die(mysqli_error($db));

	header("Location:index.php");
?>
