<?php

namespace App\Entity;

use App\Repository\PaysRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PaysRepository::class)
 */
class Pays
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $alpha2;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $alpha3;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $nomengb;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $nomfrfr;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pays", mappedBy="pays")
     */
    private $voyages;

    public function __construct()
    {
        $this->voyages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(int $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getAlpha2(): ?string
    {
        return $this->alpha2;
    }

    public function setAlpha2(string $alpha2): self
    {
        $this->alpha2 = $alpha2;

        return $this;
    }

    public function getAlpha3(): ?string
    {
        return $this->alpha3;
    }

    public function setAlpha3(string $alpha3): self
    {
        $this->alpha3 = $alpha3;

        return $this;
    }

    public function getNomengb(): ?string
    {
        return $this->nomengb;
    }

    public function setNomengb(string $nomengb): self
    {
        $this->nomengb = $nomengb;

        return $this;
    }

    public function getNomfrfr(): ?string
    {
        return $this->nomfrfr;
    }

    public function setNomfrfr(string $nomfrfr): self
    {
        $this->nomfrfr = $nomfrfr;

        return $this;
    }

    /**
     * @return Collection|Pays[]
     */
    public function getVoyages(): Collection
    {
        return $this->voyages;
    }

    public function addVoyage(Pays $voyage): self
    {
        if (!$this->voyages->contains($voyage)) {
            $this->voyages[] = $voyage;
            $voyage->setPays($this);
        }

        return $this;
    }

    public function removeVoyage(Pays $voyage): self
    {
        if ($this->voyages->removeElement($voyage)) {
            // set the owning side to null (unless already changed)
            if ($voyage->getPays() === $this) {
                $voyage->setPays(null);
            }
        }

        return $this;
    }
}
