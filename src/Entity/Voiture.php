<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VoitureRepository::class)
 */
class Voiture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30 , unique=true)
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=30)

     */
    private $marque;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $couleur;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $carburant;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datemiseencirculation;

    /**
     * @ORM\Column(type="boolean")
     */
    private $disponibilite;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombredeplace;

    /**
     * @ORM\OneToOne(targetEntity=Emplacement::class, mappedBy="idvoiture", cascade={"persist", "remove"})
     */
    private $emplacement;

    /**
     * @ORM\ManyToOne(targetEntity=Contrat::class, inversedBy="voitures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $contrat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): self
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getCarburant(): ?string
    {
        return $this->carburant;
    }

    public function setCarburant(?string $carburant): self
    {
        $this->carburant = $carburant;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDatemiseencirculation(): ?\DateTimeInterface
    {
        return $this->datemiseencirculation;
    }

    public function setDatemiseencirculation(\DateTimeInterface $datemiseencirculation): self
    {
        $this->datemiseencirculation = $datemiseencirculation;

        return $this;
    }

    public function getDisponibilite(): ?bool
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(bool $disponibilite): self
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    public function getNombredeplace(): ?int
    {
        return $this->nombredeplace;
    }

    public function setNombredeplace(int $nombredeplace): self
    {
        $this->nombredeplace = $nombredeplace;

        return $this;
    }

    public function getEmplacement(): ?Emplacement
    {
        return $this->emplacement;
    }

    public function setEmplacement(Emplacement $emplacement): self
    {
        // set the owning side of the relation if necessary
        if ($emplacement->getIdvoiture() !== $this) {
            $emplacement->setIdvoiture($this);
        }

        $this->emplacement = $emplacement;

        return $this;
    }

    public function getContrat(): ?Contrat
    {
        return $this->contrat;
    }

    public function setContrat(?Contrat $contrat): self
    {
        $this->contrat = $contrat;

        return $this;
    }
}
