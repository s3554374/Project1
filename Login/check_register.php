<?php
session_start();
function check_phone($phone)
{
   $check = "/^(04[0-9])\d{7}$/";
  
  if(preg_match($check, $phone))
  {
  
    return TRUE;


  }
  else{
    return FALSE;
  }

}
function check_date($dob)
{
    if(date('Y-m-d',strtotime($dob))==$dob)
    {
        return TRUE;

    }
    else {
        return FALSE;
    }
}
function check_email($email)
{
    $checkmail="/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/";


    if(preg_match($checkmail,$email)){

        return TRUE;


    }
    else {

        return FALSE;
    }
}


$username=$_POST["username"];
$f_name=$_POST["f_name"];
$l_name=$_POST["l_name"];
$hobby=$_POST["hobby"];
$country=$_POST["country"];
$zip=$_POST["zip"];
$city=$_POST["city"];
$address=$_POST["address"];
$street=$_POST["street"];
$password=$_POST["password"];
$confirm_pwd=$_POST["confirm_pwd"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];

$weight=$_POST["weight"];
$height=$_POST["height"];
$phone=$_POST["phone"];
$email=$_POST["email"];



if(empty($username)||empty($password)||empty($confirm_pwd)||empty($gender)||empty($phone)||empty($street)||empty($address)||empty($email)||empty($f_name)||empty($l_name)||empty($hobby)||empty($weight)||empty($height)||empty($country)||empty($zip)||empty($city))
{

    header("location:register.php?error=1");
    exit;

}
elseif($password!=$confirm_pwd){

    header("location:register.php?error=2");
    exit;

}
elseif(check_email($email)==FALSE)
{
    header("location:register.php?error=5");
    exit;

}
elseif(check_phone($phone)==FALSE)
{
    header("location:register.php?error=6"); 
    exit;
}

else{

    if(check_date($dob)==FALSE)
    {
        header("location:register.php?error=3");
        exit;

    }

    $obj=new check_register(trim($username),trim($password),trim($gender),trim($dob),trim($phone),trim($email),trim($hobby),trim($f_name),trim($l_name),trim($country),trim($zip),trim($city),trim($weight),trim($height),trim($street),trim($address));
    $obj->check();





}

class check_register
{
    var $name;
    var $pwd;
    var $gender;
    var $dob;

    var $phone;
    var $email;
    var $f_name;
    var $l_name;
    var $hobby;
    var $country;
    var $zip;
    var $city;
    var $weight;
    var $height;
    var $street;
    var $address;

    function check_register($name,$pwd,$gender,$dob,$phone,$email,$hobby,$f_name,$l_name,$country,$zip,$city,$weight,$height,$street,$address)
    {
        $this->name=$name;
        $this->pwd=$pwd;
        $this->gender=$gender;
        $this->dob=$dob;
        $this->phone=$phone;
        $this->email=$email;
        $this->hobby=$hobby;
        $this->f_name=$f_name;
        $this->l_name=$l_name;
        $this->country=$country;
        $this->zip=$zip;
        $this->city=$city;
        $this->weight=$weight;
        $this->height=$height;
        $this->street=$street;
        $this->address=$address;
    }

    function check()
    {
        if(!$db)
        {
            include '../assets/includes/db_config.php';

        }
        $sql = "SELECT count(*) FROM customer ";
        $result = mysqli_query($db, $sql) or die( mysqli_error($db));
        $rowcount = mysqli_fetch_row($result) or die( mysqli_error($db));
        $id=$rowcount[0]+1;
        $sql = "INSERT INTO customer (user_id,username,f_name,l_name,password,gender,hobby,country,zip,city,dayofbirth,weight,height,email,phone,street,address)
     VALUES ('$id', '$this->name', '$this->f_name','$this->l_name','$this->pwd','$this->gender','$this->hobby','$this->country','$this->zip','$this->city','$this->dob','$this->weight','$this->height','$this->email','$this->phone','$this->street','$this->address')";
        mysqli_query($db, $sql) or die( mysqli_error($db));
        if(mysqli_affected_rows($db)==FALSE)
        {

            header("location:register.php?error=3");
            include'../assets/includes/db_close.php';
            exit;

        }

        else
        {
            header("location:register.php?error=4");
            include'../assets/includes/db_close.php';
            exit;


        }

    }






}








?>