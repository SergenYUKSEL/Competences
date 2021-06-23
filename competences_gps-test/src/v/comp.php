<?php session_start ();?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Compétences</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/competences.css">
        <link rel="stylesheet" href="css/comp.css">
        <link rel="stylesheet" href="css/situation.css">
    <script src="script.js"></script>
    </head>
    <body>
    <?php 
    $mysqli=mysqli_connect('localhost', 'root', 'password', 'competences');
    $sql=mysqli_query($mysqli,"SELECT * FROM competences INNER JOIN activite ON competences.id_activite=activite.id_activite
    INNER JOIN bloc ON activite.id_bloc = bloc.id_bloc ");

    while($row = mysqli_fetch_array($sql))
    {
        $bloc = $row['id_bloc'];
        $activite = $row['id_activite'];
        $detail = $row['detail'];

        echo
            '<tr>
                <td> '.$bloc. '</td>
                <td> '.$activite. '</td> 
                <td> '.$detail. '</td>
            </tr>';

    }
    ?>
        <header>
            <?php require("menu.php") ?>
        </header>
    <div class ='flex_container'>
        <?php require("leftmenu.php") ?>
        <div class="rightbloc">
            <div class="titlecomp">
            <h2>Bienvenue</h2>
            </div>
            <?php echo($bloc) ?> <p> Sur ce site vous pourrez gérer vos réalisations et valider des compétences utiliser dans ces réalisations  </p>
            <div class="mediumbloc">
                <div class="competencebloc">
                <?php echo($detail)?>
                </div>
            </div>
        </div> 
        </div>
    </div>
    </body>
</html>