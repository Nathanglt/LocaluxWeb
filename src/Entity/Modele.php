<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modele
 *
 * @ORM\Table(name="MODELE", indexes={@ORM\Index(name="I_FK_MODELE_TARIFICATION", columns={"ID_REL_2"})})
 * @ORM\Entity
 */
class Modele
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $libelle = 'NULL';

    /**
     * @var \Tarification
     *
     * @ORM\ManyToOne(targetEntity="Tarification")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_REL_2", referencedColumnName="ID")
     * })
     */
    private $idRel2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getIdRel2(): ?Tarification
    {
        return $this->idRel2;
    }

    public function setIdRel2(?Tarification $idRel2): self
    {
        $this->idRel2 = $idRel2;

        return $this;
    }


}
