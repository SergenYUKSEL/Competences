<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/situation.css">
    <link rel="stylesheet" href="css/competences.css">
    <title>COMPETENCES</title>
</head>
<body>
    <?php require("menu.php") ?>
<div class="flex_container">
    <?php require("leftmenu.php") ?>

    <div class="rightbloc">
        <div class="titlesituation">
            <h2>Gestion des réalisations</h2>
        </div>
<?php
$mysqli=mysqli_connect('localhost','root','password','competences');
$sql=mysqli_query($mysqli,"SELECT nom, contexte, date_debut, duree, duree_type, detail, date_creation FROM realisation ");
while($row = mysqli_fetch_array($sql))
{
    $creation=$row['date_creation'];
    $debut=$row['date_debut'];
    $nom=$row['nom'];
    $contexte=$row['contexte'];
    $duree=$row['duree'];
    $duree_type=$row['duree_type'];
    $detail=$row['detail'];
   echo 
       '<tr>
            <td>'.$creation.'</td>
            <td>'.$debut.'</td>
            <td>'.$nom.'</td>
            <td>'.$contexte.'</td>
            <td>'.$duree.'</td>
            <td>'.$duree_type.'</td>
            <td>'.$detail.'</td>
		 <a href="Situation.php?supprimer">supprimer</a>
       </tr>';

}
echo ' </table>  ';
if(isset($_GET['supprimer'])){
    if($_GET['supprimer']!="ok"){
        echo "<p>Êtes-vous sûr de vouloir supprimer votre Situation définitivement?</p>
        <br>
        <a href='Situation.php?supprimer=ok' style='color:red'>OUI</a> - <a href='Situation.php' style='color:green'>NON</a>";
        //on supprime la réalisation avec "DELETE"
        if(mysqli_query($mysqli,"DELETE FROM realisation WHERE nom='$nom'")){
            echo "Votre Situation vient d'être supprimé définitivement.";
        }
    }
}
?>
    <div>
</div>

</body>
</html>