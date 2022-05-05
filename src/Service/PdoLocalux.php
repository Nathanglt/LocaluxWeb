<?php

namespace App\Service;

use PDO;
use App\Entity\Locationavecchauffeur;
use App\Entity\Formulesanschauffeur;
use App\Entity\Modele;
use App\Entity\Vehicule;

class PdoLocalux
{
	private static $monPdo;


	public function __construct()
	{

		$serveur = 'mysql:host=192.168.64.101:3306';
		$bdd = 'dbname=Localux';
		$user = 'administrateur';
		$mdp = 'password';
		PdoLocalux::$monPdo = new PDO(
			$serveur . ';' . $bdd,
			$user,
			$mdp
		);
		PdoLocalux::$monPdo->query("SET CHARACTER SET utf8");
	}

	
	function getLesLocationsByChauffeurDispo()
	{
		$req = "SELECT * from MODELE
		INNER JOIN VEHICULE ON MODELE.ID = VEHICULE.ID_REL_3
		INNER JOIN LOCATION on VEHICULE.ID = LOCATION.ID
		INNER JOIN LOCATIONAVECCHAUFFEUR on LOCATION.NUMLOCATION = LOCATIONAVECCHAUFFEUR.NUMLOCATION
		WHERE COUNT(LOCATIONAVECCHAUFFEUR) != 0 ";
		$res = PdoLocalux::$monPdo->prepare($req);
		$res->execute();
		$lesLignes = $res->fetchAll();
		$hackathon = [];
		foreach ($lesLignes as $uneLigne) {
			$hackathon[] = new Locationavecchauffeur($uneLigne);
		}

		return $hackathon;
	}

	function getLibFormule()
	{
		$req = "SELECT * from FORMULESANSCHAUFFEUR";
		$res = PdoLocalux::$monPdo->prepare($req);
		$res->execute();
		$lesLignes = $res->fetchAll();
		$formule = [];
		foreach ($lesLignes as $uneLigne) {
			$formule[] = new Formulesanschauffeur($uneLigne);
		}

		return $formule;
	}



}