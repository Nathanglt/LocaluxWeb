<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locationavecchauffeur
 *
 * @ORM\Table(name="LOCATIONAVECCHAUFFEUR", indexes={@ORM\Index(name="I_FK_LOCATIONAVECCHAUFFEUR_FORMULEAVECCHAUFFEUR", columns={"ID"})})
 * @ORM\Entity
 */
class Locationavecchauffeur extends Location
{
    
}
