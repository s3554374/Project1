<?php
session_start();
$location=dirname(dirname(__FILE__));
$debug=TRUE;


if($debug==False){
if(isset($_SESSION['login_flag']))
{

if($_SESSION['login_flag']==FALSE)
{

header("location:$location/home/login.php");


}
}

else {
	header("location:$location/home/login.php");

}
}




?>


<html>
  <frameset rows= "80%, 20%">
  <frame src="chat_display_ajax.php" name="chat_display"/>
  <frame src="speak.php" name="speak"/>
  </frameset>



</html>