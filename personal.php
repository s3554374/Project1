<?
include(process_login.php);
	$page_title="Personal"
	$db = mysqli_connect("localhost", "root", "", "project1") or die(mysqli_error($db));
	$sql = "SELECT * FROM customer WHERE username = $username";
    $result = mysqli_query($db, $sql);
	$row = mysqli_fetch_assoc($result)
?>

<html>
 <body>
  <div id="main">
   <p>Name:</p>
   <span id="name"> </span>
   <script> 
   document.getElementById('name').value='<?php echo $username;?>'; 
   </script>
   <p>Gender:</p>
   <span id="gender"></span>
   <script> 
   document.getElementById('gender').value='<?php echo $row["gender"];?>'; 
   </script>
   <p>Age:</p>
   <span id="age"></span>
   <script> 
   document.getElementById('age').value='<?php echo $row["age"];?>'; 
   </script>
   <p>Email:</p>
   <span id="email"></span>
   <script> 
   document.getElementById('email').value='<?php echo $row["email"];?>'; 
   </script>
   <p>Habby:</p>
   <span id="habby"></span>
   <script> 
   document.getElementById('habby').value='<?php echo $row["habby"];?>'; 
   </script>
   
</div>
<div></div>

 <body>
</html>
	

