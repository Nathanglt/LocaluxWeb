<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formulesanschauffeur
 *
 * @ORM\Table(name="FORMULESANSCHAUFFEUR")
 * @ORM\Entity
 */
class Formulesanschauffeur extends Formule
{
    /**
     * @var float|null
     *
     * @ORM\Column(name="DUREE", type="float", precision=255, scale=2, nullable=true)
     */
    private $duree;

    /**
     * @var float|null
     *
     * @ORM\Column(name="NBKMSINCLUS", type="float", precision=255, scale=2, nullable=true)
     */
    private $nbkmsinclus;


    public function getDuree(): ?float
    {
        return $this->duree;
    }

    public function setDuree(?float $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getNbkmsinclus(): ?float
    {
        return $this->nbkmsinclus;
    }

    public function setNbkmsinclus(?float $nbkmsinclus): self
    {
        $this->nbkmsinclus = $nbkmsinclus;

        return $this;
    }


}
