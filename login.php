<?php
if(isset($_POST['user']) && isset($_POST['passwd']) ){
    session_start();
    $compte = $_POST['user'];
    $pass   = $_POST['passwd'];  
//paramètres d'accéer au serveur base de données MySQL    
  require_once "MySQLSetting.inc";
// Create connection and Check connection
if (!$mysqli) {
  echo "Échec lors de la connexion à MySQL : " . mysqli_connect_error();
}else{
//Connected successfully to MYSQL server
/* requête à executer */
$sql = "SELECT nom, passwrd FROM user WHERE nom ='".addslashes($compte)."' AND passwrd = '".addslashes($pass)."'";

$res = mysqli_query($mysqli, $sql);
$rowcount=mysqli_num_rows($res);
if($rowcount==1){
  $_SESSION['user']=$_POST['user'];
  header("location:menu.php");
}else{
  header("Location:index.php?error=Error"); 
}
}
}
?>