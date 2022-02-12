<?php 
  require_once "verif1.php";

  require_once "head.html";
  require_once "MySQLSetting.inc";
  $code=$_GET['CNE'];
  $filliere=$_GET['FILLIERE'];

  $req="SELECT * from ETUDIANTS where CNE='$code'";

  $rs=mysqli_query($mysqli,$req) or die (mysqli_error($mysqli));
  $et=mysqli_fetch_assoc($rs);

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
  <h1>EDITER LES INFORMATIONS:</h1>
    <form action="edit2.php" method="post" enctype="multipart/form-data">
        <table class="table table-striped table-bordered">
            <tr>
                <td><b>CNE :</b></td>
                <td><input type="text" name="CNE" value="<?php echo $et['CNE'] ?>" readonly  ></td>
            </tr>
            <tr>
                <td><b>Nom :</b></td>
                <td><input type="text" name="nom" value="<?php echo $et['NOM'] ?>"></td>
            </tr>
            <tr>
                <td><b>Prenom :</b></td>
                <td> <input type="text" name="prenom" value="<?php echo $et['PRENOM'] ?>" > </td>
            </tr>
            <tr>
                <td><b>Ville :</b></td>
                <td><input type="text" name="ville" value="<?php echo $et['VILLE'] ?>"></td>
            </tr>
            <tr>
                <td><b>Fillere:</b></td>
                <td><select name="filliere" >
                    <option value="GIL1" <?php if($filliere=="GIL1") echo "selected" ?>>GIL1</option>
                    <option value="GIL2" <?php if($filliere=="GIL2") echo "selected" ?>>GIL2</option>
                    <option value="GIL3 <?php if($filliere=="GIL3") echo "selected" ?>">GIL3</option>
                    <option value="GINF1" <?php if($filliere=="GINF1") echo "selected" ?>>GINF1</option>
                    <option value="GINF2" <?php if($filliere=="GINF2") echo "selected" ?>>GINF2</option>
                    <option value="GINF3" <?php if($filliere=="GINF3") echo "selected" ?>>GINF3</option>
                    <option value="G3EI1" <?php if($filliere=="G3EI1") echo "selected" ?>>G3EI1</option>
                    <option value="G3EI1" <?php if($filliere=="G3EI2") echo "selected" ?>>G3EI2</option>
                    <option value="G3EI1" <?php if($filliere=="G3EI3") echo "selected" ?>>G3EI3</option>
                    <option value="GSEA1" <?php if($filliere=="GSEA1") echo "selected" ?>>GSEA1</option>
                    <option value="GSEA2" <?php if($filliere=="GSEA2") echo "selected" ?>>GSEA2</option>
                    <option value="GSEA3" <?php if($filliere=="GSEA3") echo "selected" ?>>GSEA3</option>
                    <option value="GSTR1" <?php if($filliere=="GSTR1") echo "selected" ?>>GSTR1</option>
                    <option value="GSTR2" <?php if($filliere=="GSTR2") echo "selected" ?>>GSTR2</option>
                    <option value="GSTR3" <?php if($filliere=="GSTR3") echo "selected" ?>>GSTR3</option>


                </td>
  </select>
            </tr>
            <tr>
                <td><b>Email :</b></td>
                <td><input type="text" name="email" value="<?php echo $et['EMAIL'] ?>"></td>
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

