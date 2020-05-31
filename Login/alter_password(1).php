<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change password</title>
    <link href="../assets/css/register.css" rel="stylesheet" id="bootstrap-css">
    <script src="../assets/js/register.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</head>
<body>
<form class="form">
    <h1>Edit Password</h1>
    <h6>Input following informatio  &nbsp;</h6>
    <div class="flex">
    <div class="form-group">
            <label for="FirstName">FirstName</label>
            <input type="text" class="form-control" id="FirstName" aria-describedby="FirstName" placeholder="FirstName" />

        </div>

  </div>


    <div class="form-group">
        <label for="Password1">Old Password</label>
        <input type="password" name="oldpassword" id ="oldpassword"class="form-control" aria-describedby="oldpassword" placeholder="oldpassword">

    </div>
    <div class="form-group">
    <label for="Password1">New Password</label>
    <input type="password" class="form-control" id="Password1" placeholder="Password">
</div>
    <div class="form-group">
        <label for="Password2">Confirm Password</label>
        <input type="password" class="form-control" id="Password2" placeholder="Password">
  </div>
    <button type="submit" class="btn btn-primary" value="change password" onclick="return alter()">Change Password</button><br><br>
    <a href="login.php">Login</a><div class="down"></div>


</form>
	<script type="text/javascript">
          document.getElementById("username").value="<?php echo "${_SESSION["username"]}";?>"
		</script>
<script type="text/javascript">
		function alter() {
			
			var username=document.getElementById("username").value;
			var oldpassword=document.getElementById("oldpassword").value;
			var newpassword=document.getElementById("newpassword").value;
			var assertpassword=document.getElementById("assertpassword").value;
			var regex=/^[/s]+$/;
			if(regex.test(username)||username.length==0){
				alert("user name format is wrong");
				return false;
			}
			if(regex.test(oldpassword)||oldpassword.length==0){
				alert("password format is wrong");
				return false;
			}
			if(regex.test(newpassword)||newpassword.length==0) {
				alert("new password format is wrong");
				return false;
			}
			if (assertpassword != newpassword||assertpassword==0) {
				alert("two password are not same");
				return false;
			}
			return true;
 
		}

	</script> 

</body>
</html>