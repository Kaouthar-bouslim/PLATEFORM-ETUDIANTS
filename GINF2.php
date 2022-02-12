<?php 
  require_once "verif1.php";

  require_once "head.html";
  require_once "MySQLSetting.inc";

  $req="SELECT * from ETUDIANTS where FILLIERE='GINF2'" ;
  $eleves=mysqli_query($mysqli,$req) or die (mysqli_error($mysqli));
  $fil="GINF2";
  require_once "fillieres.php";
?>
