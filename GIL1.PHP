<?php 
  require_once "verif1.php";

  require_once "head.html";
  require_once "MySQLSetting.inc";

  $req="SELECT * from ETUDIANTS where FILLIERE='GIL1'" ;
  $eleves=mysqli_query($mysqli,$req) or die (mysqli_error($mysqli));
  $fil="GIL1";
  require_once "fillieres.php";
?>
