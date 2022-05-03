<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Vehicule;

/**
 * Location
 *
 * @ORM\Table(name="LOCATION", indexes={@ORM\Index(name="I_FK_LOCATION_VEHICULE", columns={"ID"}), @ORM\Index(name="I_FK_LOCATION_CLIENT", columns={"ID_1"})})
 * @ORM\Entity
 */
class Location
{
    /**
     * @var int
     *
     * @ORM\Column(name="NUMLOCATION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numlocation;

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
     * @var \Vehicule
     *
     * @ORM\ManyToOne(targetEntity="Vehicule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID", referencedColumnName="ID")
     * })
     */
    private $id;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_1", referencedColumnName="ID")
     * })
     */
    private $id1;

    public function getNumlocation(): ?int
    {
        return $this->numlocation;
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

    public function getId(): ?Vehicule
    {
        return $this->id;
    }

    public function setId(?Vehicule $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getId1(): ?Client
    {
        return $this->id1;
    }

    public function setId1(?Client $id1): self
    {
        $this->id1 = $id1;

        return $this;
    }


}
