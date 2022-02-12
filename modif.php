<?php 
  require_once "verif1.php";
  require_once "head.html";
  require_once "MySQLSetting.inc";

  $username = $_SESSION['user'];  

  $req="SELECT * from user where NOM='".addslashes($username)."' ";
  $eleves=mysqli_query($mysqli,$req) or die (mysqli_error($mysqli));
  

  $et=mysqli_fetch_assoc($eleves);
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
      <center>
  <h1>AJOUTER DES ELEVES</h1>
    <form action="modif2.php" method="post" >
        <table border="1">
         
            <tr>
                <td><b>Nom :</b></td>
                <td><input type="text" name="nom" value="<?php echo $et['Nomreel'] ?>" ></td>
            </tr>
            <tr>
                <td><b>Prenom :</b></td>
                <td> <input type="text" name="prenom" value="<?php echo $et['Prenom'] ?>"> </td>
            </tr>
            <tr>
                <td><b>Adresse :</b></td>
                <td><input type="text" name="adresse" value="<?php echo $et['Adresse'] ?>" ></td>
            </tr>
            
           
            <tr>
                <td><b>Telephone :</b></td>
                <td><input type="text" name="telephone" value="<?php echo $et['telephone'] ?>" ></td>
            </tr>
            <tr>
                <td><b>Facebook :</b></td>
                <td> <input type="text" name="facebook" value="<?php echo $et['Facebook'] ?>" > </td>
            </tr>

            <tr>
                <td><b>Github :</b></td>
                <td> <input type="text" name="github" value="<?php echo $et['Github'] ?>" > </td>
            </tr>
            
            <tr>
                <td></td>
                 <td><input type="submit"  value="Enregistrer" > </td>
                
            </tr>
        </table>
    </form>
</div>
</center>
</body>
</html>




