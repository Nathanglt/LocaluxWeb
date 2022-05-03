<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locationsanschauffeur
 *
 * @ORM\Table(name="LOCATIONSANSCHAUFFEUR", indexes={@ORM\Index(name="I_FK_LOCATIONSANSCHAUFFEUR_FORMULESANSCHAUFFEUR", columns={"ID"})})
 * @ORM\Entity
 */
class Locationsanschauffeur
{
    /**
     * @var float|null
     *
     * @ORM\Column(name="NBKMDEPART", type="float", precision=255, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $nbkmdepart = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NBKMRETOUR", type="string", length=32, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $nbkmretour = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATELOCATION", type="date", nullable=true, options={"default"="NULL"})
     */
    private $datelocation = 'NULL';

    /**
     * @var float|null
     *
     * @ORM\Column(name="MONTANTREGLE", type="float", precision=255, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $montantregle = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHREDEPARTPREVU", type="date", nullable=true, options={"default"="NULL"})
     */
    private $datehredepartprevu = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHRERETOURPREVU", type="date", nullable=true, options={"default"="NULL"})
     */
    private $datehreretourprevu = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHREDEPARTREEL", type="date", nullable=true, options={"default"="NULL"})
     */
    private $datehredepartreel = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEHRERETOURREEL", type="date", nullable=true, options={"default"="NULL"})
     */
    private $datehreretourreel = 'NULL';

    /**
     * @var \Location
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Location")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NUMLOCATION", referencedColumnName="NUMLOCATION")
     * })
     */
    private $numlocation;

    /**
     * @var \Formulesanschauffeur
     *
     * @ORM\ManyToOne(targetEntity="Formulesanschauffeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID", referencedColumnName="ID")
     * })
     */
    private $id;

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

    public function getDatelocation(): ?\DateTimeInterface
    {
        return $this->datelocation;
    }

    public function setDatelocation(?\DateTimeInterface $datelocation): self
    {
        $this->datelocation = $datelocation;

        return $this;
    }

    public function getMontantregle(): ?float
    {
        return $this->montantregle;
    }

    public function setMontantregle(?float $montantregle): self
    {
        $this->montantregle = $montantregle;

        return $this;
    }

    public function getDatehredepartprevu(): ?\DateTimeInterface
    {
        return $this->datehredepartprevu;
    }

    public function setDatehredepartprevu(?\DateTimeInterface $datehredepartprevu): self
    {
        $this->datehredepartprevu = $datehredepartprevu;

        return $this;
    }

    public function getDatehreretourprevu(): ?\DateTimeInterface
    {
        return $this->datehreretourprevu;
    }

    public function setDatehreretourprevu(?\DateTimeInterface $datehreretourprevu): self
    {
        $this->datehreretourprevu = $datehreretourprevu;

        return $this;
    }

    public function getDatehredepartreel(): ?\DateTimeInterface
    {
        return $this->datehredepartreel;
    }

    public function setDatehredepartreel(?\DateTimeInterface $datehredepartreel): self
    {
        $this->datehredepartreel = $datehredepartreel;

        return $this;
    }

    public function getDatehreretourreel(): ?\DateTimeInterface
    {
        return $this->datehreretourreel;
    }

    public function setDatehreretourreel(?\DateTimeInterface $datehreretourreel): self
    {
        $this->datehreretourreel = $datehreretourreel;

        return $this;
    }

    public function getNumlocation(): ?Location
    {
        return $this->numlocation;
    }

    public function setNumlocation(?Location $numlocation): self
    {
        $this->numlocation = $numlocation;

        return $this;
    }

    public function getId(): ?Formulesanschauffeur
    {
        return $this->id;
    }

    public function setId(?Formulesanschauffeur $id): self
    {
        $this->id = $id;

        return $this;
    }


}
