<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
<form class="form" method="post" action="check_login.php">
    <h1>Login</h1>
    <h6>Login your account</h6>
    <!--<div class="flex">
        <div class="form-group-left">
            <label for="FirstName">FirstName</label>
            <input type="text" class="form-control" id="FirstName" aria-describedby="FirstName" placeholder="FirstName" />

        </div>
        <div class="form-group-right">
            <label for="LastName">LastName</label>
            <input type="text" class="form-control" id="LastName" aria-describedby="LastName"
                   placeholder="LastName">
        </div>
    </div>-->


    <div class="form-group" >
        <label for="UserName">UserName</label>
        <input type="text" class="form-control" id="UserName" name="username"  required="required"    aria-describedby="UserName" placeholder="UserName">

    </div>
    <!--<div class="form-group">
        <label for="InputEmail1">Email address</label>
        <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp"
               placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>-->
    <div class="form-group">
    <label for="Password1">Password</label>
    <input type="password" class="form-control" id="Password1" name="password"  required="required"   placeholder="Password">
</div>
    <!--<div class="form-group">
        <label for="Password2">Confirm Password</label>
        <input type="password" class="form-control" id="Password2" placeholder="Password">
    </div>-->
    <!--<div class="form-check">
        <div class="custom-control custom-checkbox mr-sm-2">
            <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
            <label class="custom-control-label" for="customControlAutosizing">I agree with terms and conditions</label>
        </div>
    </div>-->
    <button type="submit" class="btn btn-primary" >Login</button>
    <div class="down"><a href="register.php">Don't have a account?</a></div>
    <a href="alter_password(1).php">Forget password?</a>
</form>

<!--<form>-->
<!--    <h1>Dashboard</h1>-->
<!--    <h3>Please complete to create your account</h3>-->
<!--    <label>-->
<!--        <p class="label-txt">ENTER YOUR EMAIL</p>-->
<!--        <input type="text" class="input">-->
<!--        <div class="line-box">-->
<!--            <div class="line"></div>-->
<!--        </div>-->
<!--    </label>-->
<!--    <label>-->
<!--        <p class="label-txt">ENTER YOUR NAME</p>-->
<!--        <input type="text" class="input">-->
<!--        <div class="line-box">-->
<!--            <div class="line"></div>-->
<!--        </div>-->

<!--        <p class="label-txt">NAME</p>-->
<!--        <input type="text" class="input">-->
<!--        <div class="line-box">-->
<!--            <div class="line"></div>-->
<!--        </div>-->
<!--    </label>-->
<!--    <label>-->
<!--        <p class="label-txt">ENTER YOUR PASSWORD</p>-->
<!--        <input type="text" class="input">-->
<!--        <div class="line-box">-->
<!--            <div class="line"></div>-->
<!--        </div>-->
<!--    </label>-->
<!--    <button type="submit">submit</button>-->
<!--</form>-->
</body>
</html>
<?php


if(!empty($_GET['error'])){
    $error=$_GET['error'];
    if($error==1){
    echo "<script>alert('username or password can not be none')</script>";
    }
    elseif($error==2)
    {
    echo "<script>alert('username or password is incorrect')</script>";
    
    }
    elseif($error==3)
    {
    
    echo "<script>alert('login succeed')  </script>";
    echo '<script> window.location.href="../index.php" </script>';
    


    }


}



?>