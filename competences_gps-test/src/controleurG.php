<?php 
if (isset($_SESSION['id_utilisateur'])) {
    if ($_SESSION['type_compte'] == 'collaborateur') {
        header('Location: creation_situation.php');
    }
    if ($_SESSION['type_compte'] == 'rh') {
        header('Location: rh.php');
    }
}
else {
    header('Location: login.php');
}