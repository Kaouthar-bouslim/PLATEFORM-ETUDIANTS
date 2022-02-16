<?php
  require_once "MySQLSetting.inc";


$user=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['passwd'];

$sql = "SELECT nom FROM user WHERE nom ='".addslashes($user)."' ";


$res = mysqli_query($mysqli, $sql);
$rowcount=mysqli_num_rows($res);
if($rowcount==1){
  header("Location:signup1.php?error=Error"); 

}else{


$req="INSERT into user(nom,email,passwrd) values ('$user','$email','$pass')";
$rs=mysqli_query($mysqli,$req) or die (mysqli_error($mysqli));

if($rs){
    header("location:confirm.html");
}

}
?> 
