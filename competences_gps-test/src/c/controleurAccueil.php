<?php 
if (isset($_POST['submitAccueil'])) {
    if (isset($_POST['choixAccueil'])) {
        if ($_POST['choixAccueil']==="creation"){
            setcookie('pageAccueil', 'creation_situation', time() + 365*24*3600, null, null, false, true);
        }
        if ($_POST['choixAccueil']==="gestion"){
            setcookie('pageAccueil', 'Situation', time() + 365*24*3600, null, null, false, true);
        }
        if ($_POST['choixAccueil']==="competence"){
            setcookie('pageAccueil', 'competences', time() + 365*24*3600, null, null, false, true);
        }
        if ($_POST['choixAccueil']==="synthese"){
            setcookie('pageAccueil', 'synthese_competence', time() + 365*24*3600, null, null, false, true);
        }
    }
}

header ('Location:../v/choix_page_accueil.php');