<?php 
  require_once "verif1.php";

  require_once "head.html";
  require_once "MySQLSetting.inc";
 
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
    <form action="ajout.php" method="post" enctype="multipart/form-data">
        <table  class="table table-striped table-bordered">
            <tr>
                <td><b>CNE :</b></td>
                <td><input type="text" name="CNE" required></td>
            </tr>
            <tr>
                <td><b>Nom :</b></td>
                <td><input type="text" name="nom" ></td>
            </tr>
            <tr>
                <td><b>Prenom :</b></td>
                <td> <input type="text" name="prenom" > </td>
            </tr>
            <tr>
                <td><b>Ville :</b></td>
                <td><input type="text" name="ville" ></td>
            </tr>
            <tr>
                <td><b>Fillere:</b></td>
                <td><select name="filliere" >
                    <option value="GIL1">GIL1</option>
                    <option value="GIL2">GIL2</option>
                    <option value="GIL3">GIL3</option>
                    <option value="GINF1">GINF1</option>
                    <option value="GINF2">GINF2</option>
                    <option value="GINF3">GINF3</option>
                    <option value="G3EI1">G3EI1</option>
                    <option value="G3EI1">G3EI2</option>
                    <option value="G3EI1">G3EI3</option>
                    <option value="GSEA1">GSEA1</option>
                    <option value="GSEA2">GSEA2</option>
                    <option value="GSEA3">GSEA3</option>
                    <option value="GSTR1">GSTR1</option>
                    <option value="GSTR2">GSTR2</option>
                    <option value="GSTR3">GSTR3</option>


                </td>
  </select>
            </tr>
            <tr>
                <td><b>Email :</b></td>
                <td><input type="text" name="email" ></td>
            </tr>
            <tr>
                <td><b>Photo :</b></td>
                <td> <input type="file" name="photo" accept=".jpg,.jpeg,.png,.gif" > </td>
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

