<?php
session_start();



$username=$_POST["username"];
$password=$_POST["password"];
if(empty($username)||empty($password))
{
header("location:login.php?error=1");
}
else {
	
	 $obj=new check_login(trim($username),trim($password));
	$obj->check();


}
class check_login
{
     var $name;
	 var $pwd;
	 
	 function check_login($name , $pwd)
	 {
	     $this->name=$name;
		 $this->pwd=$pwd;
	 
	 
	 }

	 function get_user_info($name,$pwd)
	 {
	 if(!$db)
     {
         include '../assets/includes/db_config.php';

     }
	 $sql="SELECT * FROM customer WHERE username = '$name'and password='$pwd' ";
	 
	 $result=mysqli_query($db,$sql)or die( mysqli_error($db));
	 
	 $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	 
	 $_SESSION['user_info']=$row;
	 return $row;


	 }

	 function check()
	 {
	 
	 if(!$db)
     {
         include '../assets/includes/db_config.php';

     }

	 $sql="SELECT adName,password FROM admin WHERE adName = '$this->name'and password='$this->pwd' ";
	 
	 $result=mysqli_query($db,$sql)or die( mysqli_error($db));

	 $info=mysqli_fetch_array($result);


	 if($info!=FALSE)
	 {
	   header("location:login.php?error=4");

		 $_SESSION['username']=$this->name;
		 $_SESSION['pwd']=$this->pwd;
		 $_SESSION['login_flag']=TRUE;

	  
	 }
	 else
	 {
	  $sql="SELECT username,password FROM customer WHERE username = '$this->name'and password='$this->pwd' ";
	 
	 $result=mysqli_query($db,$sql)or die( mysqli_error($db));

	 $info=mysqli_fetch_array($result);
	 
	 
	 }

	 
	 if($info==FALSE)
	 {
	 
	 echo $info;

	     header("location:login.php?error=2");
	     exit;
	 
	 
	 }
	 else {
	
	     

		 $this->get_user_info($this->name,$this->pwd);
		 $_SESSION['username']=$this->name;
		 $_SESSION['pwd']=$this->pwd;
		 $_SESSION['login_flag']=TRUE;
	     header("location:login.php?error=3");
	}
	
	}
}
   

	 
	








?>