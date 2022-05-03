<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formulesanschauffeur
 *
 * @ORM\Table(name="FORMULESANSCHAUFFEUR")
 * @ORM\Entity
 */
class Formulesanschauffeur
{
    /**
     * @var float|null
     *
     * @ORM\Column(name="DUREE", type="float", precision=255, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $duree = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="NBKMSINCLUS", type="float", precision=255, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $nbkmsinclus = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $libelle = 'NULL';

    /**
     * @var \Formule
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Formule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID", referencedColumnName="ID")
     * })
     */
    private $id;

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

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getId(): ?Formule
    {
        return $this->id;
    }

    public function setId(?Formule $id): self
    {
        $this->id = $id;

        return $this;
    }


}
