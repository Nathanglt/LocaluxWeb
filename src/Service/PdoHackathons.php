<?php

namespace App\Service;

use PDO;
use App\Entity\Hackathon;
use App\Entity\Evenement;

class PdoHackathons
{
	private static $monPdo;


	public function __construct()
	{

		$serveur = 'mysql:host=127.0.0.1:3307';
		$bdd = 'dbname=hackathon';
		$user = 'root';
		$mdp = '';
		PdoHackathons::$monPdo = new PDO(
			$serveur . ';' . $bdd,
			$user,
			$mdp
		);
		PdoHackathons::$monPdo->query("SET CHARACTER SET utf8");
	}


}