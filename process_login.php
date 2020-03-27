<?php
include ("header.inc");

	$username = $_POST['username'];
	$password = $_POST['password'];

	$db = mysqli_connect("localhost", "root","", "project1");
	$q = "select * from user where username='$username' and password=SHA('$password')";
	$results = mysqli_query($db, $q);
  if(mysqli_num_rows($results) > 0)
  {
    session_start();
    $_SESSION['username'] = $username;
?>

<!DOCTYPE html>
<html>

 <body>
	 <div class="container">
   <div class="alert alert-success">
    <strong>Success!</strong> You are loged in! <br>
	You successfully read this important message!!!!
  </div>

<?php
	}
	else {
	print "<h3>You are not registered</h3>";
	}
?>
	<meta http-equiv="refresh" content="1; index.php">
		</div>
	</body>
</html>
