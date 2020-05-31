<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
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
<form class="form" method="post" action="check_register.php">
    <h1>Register</h1>
    <h6>Please complete to create your account</h6>


    <div class="form-group">
        <label for="UserName">First Name</label>
        <input type="text" class="form-control" id="UserName"  name="f_name" required="required" aria-describedby="f_Name" placeholder="UserName">

    </div>
    <div class="form-group">
        <label for="UserName">Laster Name</label>
        <input type="text" class="form-control" id="UserName"  name="l_name" required="required" aria-describedby="l_Name" placeholder="UserName">

    </div>

    <div class="form-group">
        <label for="UserName">UserName</label>
        <input type="text" class="form-control" id="UserName"  name="username" required="required" aria-describedby="UserName" placeholder="UserName">

    </div>
    <div class="form-group">
        <label for="InputEmail1">Email address</label>
        <input type="email" class="form-control" id="InputEmail1"  name="email" required="required" aria-describedby="emailHelp"
               placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="Password">Password</label>
        <input type="password" class="form-control" id="Password" name="password" required="required" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="Password1">Confirm Password</label>
        <input type="password" class="form-control" id="Password1" name="confirm_pwd" required="required" placeholder="Confirm Password">
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationTooltip03">Address</label>
            <input type="text" class="form-control" id="validationTooltip03" name="address" placeholder="Address" required>
            <div class="invalid-feedback">
                Please provide a valid Address.
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <label for="validationTooltip03">Street</label>
            <input type="text" class="form-control" id="validationTooltip03" name="street" placeholder="Street" required>
            <div class="invalid-feedback">
                Please provide a valid Street.
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="validationTooltip03">City</label>
            <input type="text" class="form-control" id="validationTooltip03" name="city" placeholder="City" required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        Elements can not be none
        <div class="col-md-3 mb-3">
            <label for="validationTooltip05">Zip</label>
            <input type="text" class="form-control" id="validationTooltip05" name="zip" placeholder="Zip" required>
            <div class="invalid-tooltip">
                Please provide a valid zip.
            </div>
        </div>
    </div>
    <div class="form-group">

        <label for="country">Country</label>

        <select class="custom-select" id="country" name="country" required="required">
            <option selected>Choose...</option>
            <option value="AU">AU</option>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
        </select>
    </div>
    <div class="form-group">
        <label for="weight">Weight</label>
        <input type="text" class="form-control" id="weight" name="weight" required="required" placeholder="60(kg)">
        
    </div>
    <div class="form-group">
        <label for="height">Height</label>
        <input type="text" class="form-control" id="height" name="height" required="required" placeholder="1.75">
    </div>


    <div class="form-group">
        <label for="gender">Gender</label>
        <select id="gender" name="gender" required="required">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>

        </select>

    </div>

    <div class="form-group">
        <label for="selectDate">Date of Birth:</label>

            <input class="form-control" type="date" value="2011-08-19" id="dob" name="dob">

    </div>

    <div class="form-group">
        <label for="hobby">hobby</label>
        <input type="text" class="form-control" id="hobby"  name="hobby" required="required" aria-describedby="hobby" placeholder="Play game">

    </div>



    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" required="required" placeholder="0416589564">
    </div>
    <div class="form-check">
        <div class="custom-control custom-checkbox mr-sm-2">
            <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
            <label class="custom-control-label" for="customControlAutosizing">I agree with terms and conditions</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign Up</button>
    <div class="down">
        <a href="login.php">Already have a account</a>

    </div>

</form>

</body>
</html>
<?php

if(!empty($_GET['error'])){
    $error=$_GET['error'];
    if($error==1){
        echo "<script>alert( 'Elements can not be none')</script>";
    }
    elseif($error==2)
    {
        echo "<script>alert(' password is different with comfirm password')</script>";

    }
    elseif($error==3)
    {

        echo "<script>alert('Format is wrong (example DOB: 1990-01-01)')</script>";
    }
    elseif($error==4)
    {
        echo "<script>alert('Register succeed , auto jump to login page');parent.location.href='login.php';</script>";


    }
    elseif($error==5)
    {
        echo "<script>alert('Email format is wrong (example email: xxxx@xxx.xxx)')</script>";


    }
    elseif($error==6)
    {
        echo "<script>alert('Phone format is wrong (start at 04 and Ten digits)')</script>";


    }

}






?>