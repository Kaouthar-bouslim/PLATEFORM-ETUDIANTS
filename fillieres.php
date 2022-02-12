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
  <title>Document</title>
</head>
<body>
  <div class=texto>
  <CENter><h1> Liste des étudiants <?php echo $fil; ?> en : 2020/2021 </h1>
<table class="table table-striped table-bordered" >
<tr>
        <td> </td>
        <td>  </td>
		    <td align=center><b>CNE</b></td>
		    <td align=center><b>Nom</b></td>
		    <td align=center><b>Prénom</b></td>

        <td align=center><b>Ville</b></td>
        <td align=center><b>Email</b></td>
        <td align=center><b>Photo</b></td>
	</tr>
<?php
foreach ($eleves as $eleve) :?>
		<tr>
        <td style="text-align: center; vertical-align: middle;"><a href="supprimer.php?CNE=<?php echo $eleve['CNE'] ?>&FILLIERE=<?php echo $eleve['FILLIERE'] ?> "> Supprimer </a></td>
        <td style="text-align: center; vertical-align: middle;"><a href="edit.php?CNE=<?php echo $eleve['CNE'] ?>&FILLIERE=<?php echo $eleve['FILLIERE'] ?> "> Editer </a></td>
		<td style="text-align: center; vertical-align: middle;"><?= $eleve["CNE"]; ?></td>
		<td style="text-align: center; vertical-align: middle;"><?= $eleve["NOM"]; ?></td>
		<td style="text-align: center; vertical-align: middle;"><?= $eleve["PRENOM"]; ?></td>

        <td style="text-align: center; vertical-align: middle;"><?= $eleve["VILLE"]; ?></td>
        <td style="text-align: center; vertical-align: middle;"><?= $eleve["EMAIL"]; ?></td>
        <td style="text-align: center; vertical-align: middle;"><img src=<?php echo $eleve["PHOTO"];  ?> width="200px"  /></td>
	</tr>
	<?php endforeach ?>

</table>	
    <a href="ajouter.php"> Ajouter un nouveau étudiant</a>

</div>
</CENter>
</body>
</html>

