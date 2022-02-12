<?php
    require_once "MySQLSetting.inc";

$cne=$_POST['CNE'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$filliere=$_POST['filliere'];
$ville=$adresse=$_POST['ville'];

$nomphoto=$_FILES['photo']['name'];
$file_tmp_name=$_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name,"./$nomphoto");

$req="INSERT into ETUDIANTS(CNE,NOM,PRENOM,FILLIERE,VILLE,EMAIL,PHOTO) values ('$cne','$nom','$prenom','$filliere','$ville','$email','$nomphoto')";
$rs=mysqli_query($mysqli,$req) or die (mysqli_error($mysqli));

header("location: $filliere.php");

?> 
