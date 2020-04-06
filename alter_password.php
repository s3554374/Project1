
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>process_change password</title>
</head>
<body>
	<?php
	session_start ();
	$username = $_REQUEST ["username"];
	$oldpassword = $_REQUEST ["oldpassword"];
	$newpassword = $_REQUEST ["newpassword"];
	
	$con = mysql_connect ( "localhost", "root","", "projec1" );
	if (! $con) {
		die ( 'connect failed' . $mysql_error () );
	}
	mysql_select_db ( "user_info", $con );
	$dbusername = null;
	$dbpassword = null;
	$result = mysql_query ( "select * from customer where username ='{$username}' and isdelete =0;" );
	while ( $row = mysql_fetch_array ( $result ) ) {
		$dbusername = $row ["username"];
		$dbpassword = $row ["password"];
	}
	if (is_null ( $dbusername )) {
		?>
	<script type="text/javascript">
		alert("username not exist");
		window.location.href="alter_password.html";
	</script>	
	<?php
	}
	if ($oldpassword != $dbpassword) {
		?>
	<script type="text/javascript">
		alert("wrong password");
		window.location.href="alter_password.html";
	</script>
	<?php
	}
	mysql_query ( "update  customer set password='{$newpassword}' where username='{$username}'" ) or die ( "faied to update" . mysql_error () );
	mysql_close ( $con );
	?>
 
 
	<script type="text/javascript">
		alert("succeed");
		window.location.href="index.html";
	</script>
</body>
</html>
