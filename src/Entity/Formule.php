<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formule
 *
 * @ORM\Table(name="FORMULE", indexes={@ORM\Index(name="I_FK_FORMULE_TARIFICATION", columns={"ID_REL_1"})})
 * @ORM\Entity
 */
class Formule
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=32, nullable=false, options={"fixed"=true})
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
     *   @ORM\JoinColumn(name="ID_REL_1", referencedColumnName="ID")
     * })
     */
    private $idRel1;

    public function getId(): ?string
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

    public function getIdRel1(): ?Tarification
    {
        return $this->idRel1;
    }

    public function setIdRel1(?Tarification $idRel1): self
    {
        $this->idRel1 = $idRel1;

        return $this;
    }


}
