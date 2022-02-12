<?php

require_once "verif1.php";
require_once "MySQLSetting.inc";


$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$telephone=$_POST['telephone'];
$adresse=$_POST['adresse'];
$facebook=$_POST['facebook'];
$github=$_POST['github'];
$user=$_SESSION['user'];

$req="UPDATE  user   SET Nomreel='$nom',Prenom='$prenom',Telephone='$telephone', Adresse='$adresse', Facebook='$facebook' ,Github='$github' WHERE nom='$user' ";
$rs=mysqli_query($mysqli,$req) or die (mysqli_error($mysqli));

header("location:info.php");
?> 