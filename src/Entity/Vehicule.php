<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="VEHICULE", indexes={@ORM\Index(name="I_FK_VEHICULE_MODELE", columns={"ID_REL_3"})})
 * @ORM\Entity
 */
class Vehicule
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="IMMATRICULATION", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $immatriculation;

    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Modele
     *
     * @ORM\ManyToOne(targetEntity="Modele")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_REL_3", referencedColumnName="ID")
     * })
     */
    private $idRel3;

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(?string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdRel3(): ?Modele
    {
        return $this->idRel3;
    }

    public function setIdRel3(?Modele $idRel3): self
    {
        $this->idRel3 = $idRel3;

        return $this;
    }


}
