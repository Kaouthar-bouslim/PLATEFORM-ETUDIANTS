<?php
  require_once "MySQLSetting.inc";


$user=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['passwd'];

$req="INSERT into user(nom,email,passwrd) values ('$user','$email','$pass')";
$rs=mysqli_query($mysqli,$req) or die (mysqli_error($mysqli));

if($rs){
    header("location:confirm.html");
}
else{
  header("Location:signup.php?error=Error"); 

}
?> 