<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Client
 *
 * @ORM\Table(name="CLIENT")
 * @ORM\Entity
 */
abstract class Client extends User
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="TEL", type="integer", nullable=true)
     */
    private $tel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMAIL", type="string", length=55, nullable=true, options={"fixed"=true})
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RUE", type="string", length=55, nullable=true, options={"fixed"=true})
     */
    private $rue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CP", type="integer", nullable=true)
     */
    private $cp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VILLE", type="string", length=55, nullable=true, options={"fixed"=true})
     */
    private $ville;

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(?int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(?string $rue): self
    {
        $this->rue = $rue;

        return $this;
    }

    public function getCp(): ?int
    {
        return $this->cp;
    }

    public function setCp(?int $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

}
