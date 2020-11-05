<?php

namespace App\Entity;

use App\Repository\PersonneRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonneRepository::class)
 */
class Personne
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $gsm;

    /**
     * @ORM\Column(type="integer")
     */
    private $typepieceidentite;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $ndepieceidentite;

    /**
     * @ORM\Column(type="date")
     */
    private $datedenaissance;

    /**
     * @ORM\Column(type="boolean")
     */
    private $sexe;

    /**
     * @ORM\ManyToOne(targetEntity="Voyage")
     * @ORM\JoinColumn(name="voyages_id", referencedColumnName="id")
     */
    private $voyages;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getGsm(): ?int
    {
        return $this->gsm;
    }

    public function setGsm(int $gsm): self
    {
        $this->gsm = $gsm;

        return $this;
    }

    public function getTypepieceidentite(): ?int
    {
        return $this->typepieceidentite;
    }

    public function setTypepieceidentite(int $typepieceidentite): self
    {
        $this->typepieceidentite = $typepieceidentite;

        return $this;
    }

    public function getNdepieceidentite(): ?string
    {
        return $this->ndepieceidentite;
    }

    public function setNdepieceidentite(string $ndepieceidentite): self
    {
        $this->ndepieceidentite = $ndepieceidentite;

        return $this;
    }

    public function getDatedenaissance(): ?\DateTimeInterface
    {
        return $this->datedenaissance;
    }

    public function setDatedenaissance(\DateTimeInterface $datedenaissance): self
    {
        $this->datedenaissance = $datedenaissance;

        return $this;
    }

    public function getSexe(): ?bool
    {
        return $this->sexe;
    }

    public function setSexe(bool $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getVoyages(): ?Voyage
    {
        return $this->voyages;
    }

    public function setVoyages(?Voyage $voyages): self
    {
        $this->voyages = $voyages;

        return $this;
    }
}
