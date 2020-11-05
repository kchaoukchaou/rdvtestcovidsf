<?php

namespace App\Entity;

use App\Repository\VoyageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VoyageRepository::class)
 */
class Voyage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $datedevoyage;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $numerobillet;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pays", inversedBy="voyages")
     */
    private $pays;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatedevoyage(): ?\DateTimeInterface
    {
        return $this->datedevoyage;
    }

    public function setDatedevoyage(\DateTimeInterface $datedevoyage): self
    {
        $this->datedevoyage = $datedevoyage;

        return $this;
    }

    public function getNumerobillet(): ?string
    {
        return $this->numerobillet;
    }

    public function setNumerobillet(string $numerobillet): self
    {
        $this->numerobillet = $numerobillet;

        return $this;
    }

    public function getPays(): ?Pays
    {
        return $this->pays;
    }

    public function setPays(?Pays $pays): self
    {
        $this->pays = $pays;

        return $this;
    }
}
