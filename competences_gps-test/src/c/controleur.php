<?php 
function chargerClasse($classe)
{
    require $classe .'.php';
}

spl_autoload_register('chargerClasse');

require '/var/www/html/src/m/Competencesphp/Model/ConnectBdd.php';


//si le formulaire est envoyé ("envoyé" signifie que le bouton submit est cliqué)
if(isset($_POST['valider'])){
    //vérifie si tous les champs sont bien  pris en compte:
    //on peut combiner isset() pour valider plusieurs champs à la fois
                    //tout est précisés correctement, on inscrit le membre dans la base de données si le pseudo n'est pas déjà utilisé par un autre utilisateur
                    //d'abord il faut créer une connexion à la base de données dans laquelle on souhaite l'insérer:
                    $mysqli=mysqli_connect('localhost','root','password','competences');//'serveur','nom d'utilisateur','pass','nom de la table'
                    if(!$mysqli) {
                        echo "Erreur connexion BDD";
                        //Dans ce script, je pars du principe que les erreurs ne sont pas affichées sur le site, vous pouvez donc voir qu'elle erreur est survenue avec mysqli_error(), pour cela décommentez la ligne suivante:
                        echo "<br>Erreur retournée: ".mysqli_error($mysqli);
                    } else {

                        $A=htmlentities($_POST['nom_situation'],ENT_QUOTES,"UTF-8");//htmlentities avec ENT_QUOTES permet de sécuriser la requête pour éviter les injections SQL, UTF-8 pour dire de convertir en ce format
                        $B=htmlentities($_POST['contexte'],ENT_QUOTES,"UTF-8");
                        $C=htmlentities($_POST['duree'],ENT_QUOTES,"UTF-8");
                        $D=htmlentities($_POST['details'],ENT_QUOTES,"UTF-8");
                        $E=htmlentities($_POST['uri'],ENT_QUOTES,"UTF-8");
                        $F=htmlentities($_POST['details_uri'],ENT_QUOTES,"UTF-8");
                        $G=htmlentities($_POST['details_competences'],ENT_QUOTES,"UTF-8");
                        $H=htmlentities($_POST['date_debut'],ENT_QUOTES,"UTF-8");
                        //insertion du membre dans la base de données:
                        if(mysqli_query($mysqli,"INSERT INTO realisation SET nom='$A', contexte='$B', duree='$C', detail='$D', date_debut='$H', id_utilisateur='1'")){
                            echo "Inscrit avec succès!";
                            $TraitementFini=true;//pour cacher le formulaire
                        } else {
                            echo "Une erreur est survenue, merci de réessayer ou contactez-nous si le problème persiste.";
                            echo "<br>Erreur retournée: ".mysqli_error($mysqli);
                        }
                    }
}
$bdd = ConnectBdd();
$reponse = requestBDD($bdd, 'SELECT * FROM bloc');
    
$req = requestBDD($bdd, 'SELECT * FROM activite ');
    
$req_comp = requestBDD($bdd, 'SELECT * FROM competence');

function test($identifiant){
    try {
        $iduser=$_SESSION['id_utilisateur'];
        $bdd =ConnectBdd();
        $req_verification =$bdd->prepare('SELECT identifiant FROM competence
        JOIN competence_visee ON competence.id_competence = competence_visee.id_competence
        JOIN realisation ON competence_visee.id_realisation = realisation.id_realisation
        WHERE realisation.id_utilisateur = :id_utilisateur');
        $req_verification -> execute (array(
            'id_utilisateur'=>$iduser));
        while ($donnees =$req_verification->fetch()) {
            $identifiant_competence = $donnees ['identifiant'];
            $resultat = " ";
            if ($identifiant === $identifiant_competence) {
            $resultat = "Validé";
            }
           return $resultat; }
           
        }
        
        catch (Exeption $e) {
            die('Erreur : ' .$e->getMessage());
        }
}
