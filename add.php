<?php
session_start();
 if(!isset($_SESSION['username'])) // check if session variable exist
 { header("Location:login.php");
 exit(0); }

 else {
   echo "welcome back! ";
 print $_SESSION['username'];
 }

    include("header.inc");
    include("nav.inc");
 ?>

 <!-- start of main content -->
 <div id="main-content">
   <h2>Add Information</h2>
    <form method="post" action="process_add.php" enctype="multipart/form-data">
        Gender:<input type="text" name="gender" /><br>
        Age:<input type="text" name="age" /><br>
        Email:<br><input type="text" name="email" /><br>
        <!-- add hobby here using drop down list -->
        Image<input type="file" name = "image" id = "image"/><br>
        <input type="submit" name = "image" value = "Uploads"/>
    </form>
  </div>
 <!-- end of main content -->

 <?php
    include("footer.inc");
 ?>
