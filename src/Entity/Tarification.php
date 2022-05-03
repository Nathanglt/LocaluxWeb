<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarification
 *
 * @ORM\Table(name="TARIFICATION")
 * @ORM\Entity
 */
class Tarification
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
     * @var float|null
     *
     * @ORM\Column(name="TARIF", type="float", precision=255, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $tarif = NULL;

    public function getId(): ?int
    {
        return $this->id;
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


}
