<?php 
  require_once "verif1.php";

  require_once "head.html";
  require_once "MySQLSetting.inc";
  $username = $_SESSION['user'];  

  $req="SELECT * from user where NOM='".addslashes($username)."' ";
  $eleves=mysqli_query($mysqli,$req) or die (mysqli_error($mysqli));

?>
<style>
  .texto{
   padding-top: 5%;
   
  } 
   body{
     background-color: darkcyan;
   }
   a{
     color: cyan;
   }

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vos informations</title>
</head>
<body>
    <center>
<div class=texto>

<?php foreach ($eleves as $eleve) :?>
<table style="width:50%" class="table table-striped table-bordered" >
  <tr>
    <th>Nom d'utilisateur:</th>
    <td><?= $eleve["nom"]; ?></td>
  </tr>
  <tr>
    <th>Nom:</th>
    <td><?= $eleve["Nomreel"]; ?></td>
  </tr>
  <tr>
    <th>Prenom:</th>
    <td><?= $eleve["Prenom"]; ?></td>
  </tr>
  <tr>
    <th>Telephone:</th>
    <td><?= $eleve["telephone"]; ?></td>
  </tr>
  <tr>
    <th>Adresse:</th>
    <td><?= $eleve["Adresse"]; ?></td>
  </tr>
  <tr>
    <th>Facebook:</th>
    <td><?= $eleve["Facebook"]; ?></td>
  </tr>
  <tr>
    <th>Github:</th>
    <td><?= $eleve["Github"]; ?></td>
  </tr>
</table>
<?php endforeach ?>
<a href="modif.php"> Modifier Vos informations</a>

</center>
</body>
</html>
