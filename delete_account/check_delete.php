<?php
	session_start();
    $email=$_SESSION["email"];
    echo $email;
    echo "debug run";
    $result=delete_user($email);
        if($result>0)
    {
    header("location:delete_account.php?result=1");
	}
    else 
	{
    
    header("location:delete_account.php?result=2");
    
    
    }

	function back()
	{
		header("location:delete_account.php");
	}

	function delete_user($email)
    {

      if(!$db)
     {
         include 'assets/includes/db_config.php';

     }
     
     
     $sql="DELETE FROM customer WHERE email = '$email' ";
     
     mysqli_query($db,$sql)or die( mysqli_error($db));
     
	 return mysqli_affected_rows($db);
    }
  ?>