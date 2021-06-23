<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>competences</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/situation.css">
  <link rel="stylesheet" href="css/competences.css">
  <link rel="stylesheet" href="css/comp.css">
  <script src="script.js"></script>
</head>
<body>
    <?php require("menu.php") ?>
<div class="flex_container">
    <?php require("leftmenu.php") ?>

<table class="competencestable">
<tr>
    <th>Numéro Bloc</th>
    <th>Nom Bloc </th>
</tr>
<?php
$mysqli=mysqli_connect('localhost','root','password','competences');
$sql=mysqli_query($mysqli,"SELECT identifiant, nom FROM competence ORDER BY identifiant");
while($row = mysqli_fetch_array($sql))
{
    $identifiant=$row['identifiant'];
    $nom=$row['nom'];

   echo 
       '<tr>
            <td>'.$identifiant.'</td>
            <td>'.$nom.'</td>
        </tr> <br>';
    }  
?>
</table>
</body>
</html>