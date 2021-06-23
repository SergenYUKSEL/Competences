<?php
class Manager
{
    private $_db;

    public function __construct($db)
    {
        $this->setDb($db);
    }


    public function get($situation)
    {
        $id = (int) $id;

	    $q = $this->_db->query('SELECT id, nom, date_debut, details, date_creation, duree, type_duree FROM situation WHERE id = '.$id);
	    $donnees = $q->fetch(PDO::FETCH_ASSOC);

	    return new Situation($donnees['id'],$donnees['nom'],$donnees['date_debut'],$donnees['details'],$donnees['date_creation'],$donnees['duree'],$donnees['type_duree']);
	}

    public function add(Situation $situation)
	{
	$q = $this->_db->prepare('INSERT INTO Situation(id, nom, date_debut, details, date_creation, duree, type_duree) VALUES(:id, :nom, :date_debut, :details, :date_creation, :duree, :type_duree)');

	$q->bindValue(':id', $situation->getid(), PDO::PARAM_INT);
	$q->bindValue(':nom', $situation->getnom());
	$q->bindValue(':date_debut', $situation->getdate_debut());
	$q->bindValue(':details', $situation->getdetails());
	$q->bindValue(':date_creation', $situation->getdate_creation());
	$q->bindValue(':duree', $situation->getduree());
	$q->bindValue(':type_duree', $situation->gettype_duree());

	$q->execute();
    }

    public function getList()
	{
	$situation = [];

	$q = $this->_db->query('SELECT id, nom, date_debut, details, date_creation, duree, type_duree FROM situation ORDER BY nom');

	while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
	{
	  $situation[] = new Situation($donnees);
	}

	return $situation;
	}

	public function add(Activite $activite)
	{
	$q = $this->_db->prepare('INSERT INTO Activite(id_activite, nom) VALUES(:id_activite, :nom,)');

	$q->bindValue(':id', $activite->getid(), PDO::PARAM_INT);
	$q->bindValue(':nom', $activite->getnom());

	$q->execute();
    }

	public function add(Bloc $bloc)
	{
	$q = $this->_db->prepare('INSERT INTO Bloc(id_bloc, nom) VALUES(:id_bloc, :nom)');

	$q->bindValue(':id', $bloc->getid(), PDO::PARAM_INT);
	$q->bindValue(':nom', $bloc->getnom());


	$q->execute();
    }

	public function add(Competences $competence)
	{
	$q = $this->_db->prepare('INSERT INTO Competences(id_competence, nom, detail) VALUES(:id_competence, :nom, :detail)');

	$q->bindValue(':id', $competence->getid(), PDO::PARAM_INT);
	$q->bindValue(':nom', $competence->getnom());
	$q->bindValue(':detail', $competence->getdetail());


	$q->execute();
	}

	public function add(Contexte $contexte)
	{
	$q = $this->_db->prepare('INSERT INTO Contexte(id_contexte, contexte) VALUES(:id_contexte, :contexte)');

	$q->bindValue(':id_contexte', $contexte->getid(), PDO::PARAM_INT);
	$q->bindValue(':contexte', $contexte->getcontexte());


	$q->execute();
	}

	public function add(Lien $lien)
	{
	$q = $this->_db->prepare('INSERT INTO Liens(id_liens, URI, details) VALUES(:id_liens, :URI, :details)');

	$q->bindValue(':id_liens', $lien->getid(), PDO::PARAM_INT);
	$q->bindValue(':URI', $lien->getURI());
	$q->bindValue(':details', $lien->getdetails());

	$q->execute();
	}

	public function add(Options $options)
	{
	$q = $this->_db->prepare('INSERT INTO options(id_options, options) VALUES(:id_liens, :options)');

	$q->bindValue(':id_options', $options->getid(), PDO::PARAM_INT);
	$q->bindValue(':options', $options->getoptions());

	$q->execute();
	}

	public function add(Type_de_compte $type_de_compte)
	{
	$q = $this->_db->prepare('INSERT INTO type_de_compte(id_type_compte, type_compte) VALUES(:id_type_compte, :type_compte)');

	$q->bindValue(':id_type_compte', $type_de_compte->getid_type_compte(), PDO::PARAM_INT);
	$q->bindValue(':type_compte', $type_de_compte->gettype_compte());

	$q->execute();
	}

	public function add(Utilisateur $utilisateur)
	{
	$q = $this->_db->prepare('INSERT INTO Utilisateur(id_EGNOM, nom, prenom, mdp, type_de_compte, options) VALUES(:id_EGNOM, :nom, :prenom, :mdp, :type_de_compte, :options)');

	$q->bindValue(':id_EGNOM', $utilisateur->getid(), PDO::PARAM_INT);
	$q->bindValue(':nom', $utilisateur->getnom());
	$q->bindValue(':prenom', $utilisateur->getprenom());
	$q->bindValue(':mdp', $utilisateur->getmdp());
	$q->bindValue(':type_de_compte', $utilisateur->gettype_de_compte());
	$q->bindValue(':options', $utilisateur->getoptions());

	$q->execute();
	}































}
