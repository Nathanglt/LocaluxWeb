<?php

namespace App\Service;

use PDO;
use App\Entity\Locationavecchauffeur;
use App\Entity\Modele;
use App\Entity\Vehicule;

class PdoHackathons
{
	private static $monPdo;


	public function __construct()
	{

		$serveur = 'mysql:host=192.168.64.101:3006';
		$bdd = 'dbname=Localux';
		$user = 'administrateur';
		$mdp = 'password';
		PdoHackathons::$monPdo = new PDO(
			$serveur . ';' . $bdd,
			$user,
			$mdp
		);
		PdoHackathons::$monPdo->query("SET CHARACTER SET utf8");
	}

	
	function getLesHackathons()
	{
		$req = "sELECT * FROM hackathon ";
		$res = PdoHackathons::$monPdo->prepare($req);
		$res->execute();
		$lesLignes = $res->fetchAll();
		$hackathon = [];
		foreach ($lesLignes as $uneLigne) {
			$hackathon[] = new Hackathon($uneLigne);
		}

		return $hackathon;
	}

}