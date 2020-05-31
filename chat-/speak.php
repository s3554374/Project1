<?php
include 'db_config.php';
$debug=TRUE;

?>
<html>
<head>



</head>
<body>
<?php
session_start();
if ($_POST['words'])
{


if($debug=TRUE)
{
$nickname='debug';
}
else {
	
$nickname=$_SESSION['username'];
}
$words=$_POST['words'];
$sql="insert into chat(nickname,content) values ('$nickname','$words');";
mysqli_query($db,$sql);

}
?>
<form action="speak.php" method="post" target="_self">
  <input type="text" name="words" cols="20">
  <input type="submit" value="submit">
</form>





</body>



</html>