<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locationsanschauffeur
 *
 * @ORM\Table(name="LOCATIONSANSCHAUFFEUR", indexes={@ORM\Index(name="I_FK_LOCATIONSANSCHAUFFEUR_FORMULESANSCHAUFFEUR", columns={"ID"})})
 * @ORM\Entity
 */
class Locationsanschauffeur extends Location
{
    /**
     * @var float|null
     *
     * @ORM\Column(name="NBKMDEPART", type="float", precision=255, scale=2, nullable=true)
     */
    private $nbkmdepart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NBKMRETOUR", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nbkmretour;


    public function getNbkmdepart(): ?float
    {
        return $this->nbkmdepart;
    }

    public function setNbkmdepart(?float $nbkmdepart): self
    {
        $this->nbkmdepart = $nbkmdepart;

        return $this;
    }

    public function getNbkmretour(): ?string
    {
        return $this->nbkmretour;
    }

    public function setNbkmretour(?string $nbkmretour): self
    {
        $this->nbkmretour = $nbkmretour;

        return $this;
    }


}
