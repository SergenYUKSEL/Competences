<?php session_start ();?>
<?php 
require '../c/controleur.php';?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Compétences</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/competences.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script src="script.js"></script>
    </head>
    <body>
        <header>
            <?php require("menu.php") ?>
        </header>
        <div class ='flex_container'>
        <?php require("leftmenu.php") ?>
            <div class="rightmenu">
                <main>
                    <form method='post' action='creation_situation.php'>
                    <h2 class="rightborder">Description de la situation professionelle</h2>
                    <div class="rightsubtitle">
                        <div>
                            <label>Nom situation</label>
                        </div>
                        <div>
                            <input type="text"name="nom_situation" placeholder="Nom de la situation"/>
                        </div>
                    </div>
                    </br>
                    <div class="rightsubtitle">
                        <div>
                            <label>Contexte</label>
                        </div>
                        <div>
                            <SELECT name="contexte">
                                <OPTION>Atelier</OPTION>
                                <OPTION>TP</OPTION>
                                <OPTION>Stage 1</OPTION>
                                <OPTION>Stage 2</OPTION>
                                <OPTION>Personnel</OPTION>
                            </SELECT>
                        </div>
                    </div>
                    </br>
                    <div class="rightsubtitle">
                        <div>
                            <label for="date_debut">Date début</label>
                            <input type='date'name='date_debut'/>
                            <label for="duree">Durée</label>
                            <input type="number" name="duree"/>
                            <select name = "duree_unite">
                                    <option> jour(s) </option>
                                    <option> semaine(s) </option>
                                    <option> mois </option>
                                    <option> an(s) </option>
                            </select>
                        </div>
                    </div>
                    </br>
                    <div class="rightsubtitle">
                        <div>
                            <label for="details">Détails</label>
                        </div>
                        <div>
                            <textarea name="details" rows="10" cols="100" wrap="hard" maxlength="255"></textarea>
                        </div>
                        <div>
                            <input type="reset" value="effacer"/>
                        </div>
                    </div>
                    <h2 class="rightborder">Accès aux éléments justificatifs</h2>
                    <div class="rightsubtitle">
                        <div>
                            <label for="uri">URI</label>
                        </div>
                        <div>
                            <input class="largeinput" type="text" name="uri"/>
                        </div>
                    </div>
                    <div class="rightsubtitle">
                        <div>
                            <label for="details_uri">Détails</label>
                        </div>
                        <div>
                            <textarea name="details_uri"rows="5" cols="100" maxlength="50"></textarea>
                        </div>
                        <div>
                            <input type="reset" value="effacer"/>
                        </div>
                    </div>
                    <input type="button" value="ajouter"/>
                    <h2 class="rightborder">Compétences mises en oeuvre</h2>
                    <div class="rightsubtitle">
                        <SELECT name='bloc'>
                        <?php while ($donnees = $reponse->fetch()) { 
                            echo "<option value='" . $donnees['identifiant'] . "'>" . $donnees['identifiant'] . '-' . $donnees['nom'] . "</option>"; 
                        }?>
                        </SELECT>
                        <SELECT name='Activite'>
                            <?php while ($donnees = $req->fetch()) { 
                                echo "<option value='" . $donnees['identifiant'] . "'>" . $donnees['identifiant'] . '-' . $donnees['nom']. "</option>"; 
                            }?>
                        </SELECT>
                        <SELECT name='Compétence'>
                            <?php while ($donnees = $req_comp->fetch()) {
                                echo "<option value='" . $donnees['identifiant'] . "'>" . $donnees['identifiant']. '-' . $donnees['nom']  ."</option>"; 
                            }?>
                        </SELECT>
                        <div>
                            <label for="details_competence">Détails</label>
                        </div>
                        <div>
                            <textarea name="details_competence" rows="5" cols="100" maxlength="255"></textarea>
                        </div>
                    </div>
                    <input class="rightsubtitle" type="submit" name="valider"value="enregistrer"/>
                    </form>
                </main>
            </div>
        </div>
    </body>
</html>