<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formuleavecchauffeur
 *
 * @ORM\Table(name="FORMULEAVECCHAUFFEUR")
 * @ORM\Entity
 */
class Formuleavecchauffeur
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="LIEU", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $lieu = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TARIF", type="float", precision=255, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $tarif = NULL;

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

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getTarif(): ?float
    {
        return $this->tarif;
    }

    public function setTarif(?float $tarif): self
    {
        $this->tarif = $tarif;

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
