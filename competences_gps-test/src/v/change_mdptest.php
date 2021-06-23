
<?php
session_start();
$id = $_SESSION["id_utilisateur"];
$con = mysqli_connect('localhost','root','password','competences') or die('Unable To connect');
if(count($_POST)>0) {
$result = mysqli_query($con,"SELECT * from utilisateur WHERE name='" . $id . "'");
$row=mysqli_fetch_array($result);
if($_POST["currentPassword"] == $row["mdp"] && $_POST["newPassword"] == $row["confirmPassword"] ) {
mysqli_query($con,"UPDATE utilisateur set mdp='" . $_POST["newPassword"] . "' WHERE name='" . $id . "'");
$message = "Mot de passe changer avec succès !";
} else{
 $message = "Mot de passe incorrect !";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Changement de mot de passe :</title>
<link rel="stylesheet" href="/style.css">

</head>
<body>
    <h3 class="logintitle">Changement de mot de passe : </h3>
    <div class="login"><?php if(isset($message)) { echo $message; } ?></div>
        <form method="post" action="">
            <label> Mot de passe actuel : </label>
            <br>
            <input class="logininput" type="password" name="currentPassword"><span id="currentPassword" class="required"></span>
            <br>
            <label> Nouveau mot de passe : </label> 
            <br>
            <input class="logininput" type="password" name="newPassword"><span id="newPassword" class="required"></span>
            <br>
            <label> Confirmer le mot de passe : </label>
                <br>
            <input class="logininput" type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
            <br><br>
            <input type="submit" value="valider">
        </form>
    </div>
    <br>
    <br>
</body>
</html>

