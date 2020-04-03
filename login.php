<?php
    $page_title="Login";
    include("header.inc");
    include("nav.inc");
 ?>
 <!-- start of main content -->
<div id="main-content">
    <h2>Login</h2>
    <form method="post" action="process_login.php">
        Username:<input type="text" name="username" /><br>
        Password:<input type="password" name="password" /><br>
        <input type="submit" value="Login" />
        <input type="button" name="Submit" value="register" onclick="location.href='register.php'"/>
        <input type="button" name="Submit" value="Admin Login" onclick="location.href='register.php'"/>
    </form>
 </div>
 <!-- end of main content -->

 <?php
    include("footer.inc");
 ?>
