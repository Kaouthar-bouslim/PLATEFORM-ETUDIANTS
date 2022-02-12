<?php
  require_once "verif1.php";

require_once "MySQLSetting.inc";
$code=$_GET['CNE'];
$filliere=$_GET['FILLIERE'];
$req="DELETE from etudiants where CNE='$code'";

$rs=mysqli_query($mysqli,$req) or die (mysqli_error($mysqli));
header("location: $filliere.php");

?>