<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BirdsRepository")
 */
class Birds
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_de_reference;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $synonymes_chresonymes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_verniculaire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $statut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $regne;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $classe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ordre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $family;

    /**
     * @ORM\Column(type="integer")
     */
    private $cd_ref;

    /**
     * @ORM\Column(type="integer")
     */
    private $cd_nom;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Observation", mappedBy="bird")
     */
    private $observations;

    public function __construct()
    {
        $this->observations = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNomDeReference(): ?string
    {
        return $this->nom_de_reference;
    }

    public function setNomDeReference(string $nom_de_reference): self
    {
        $this->nom_de_reference = $nom_de_reference;

        return $this;
    }

    public function getSynonymesChresonymes(): ?string
    {
        return $this->synonymes_chresonymes;
    }

    public function setSynonymesChresonymes(string $synonymes_chresonymes): self
    {
        $this->synonymes_chresonymes = $synonymes_chresonymes;

        return $this;
    }

    public function getNomVerniculaire(): ?string
    {
        return $this->nom_verniculaire;
    }

    public function setNomVerniculaire(string $nom_verniculaire): self
    {
        $this->nom_verniculaire = $nom_verniculaire;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getRegne(): ?string
    {
        return $this->regne;
    }

    public function setRegne(string $regne): self
    {
        $this->regne = $regne;

        return $this;
    }

    public function getClasse(): ?string
    {
        return $this->classe;
    }

    public function setClasse(string $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    public function getOrdre(): ?string
    {
        return $this->ordre;
    }

    public function setOrdre(string $ordre): self
    {
        $this->ordre = $ordre;

        return $this;
    }

    public function getFamily(): ?string
    {
        return $this->family;
    }

    public function setFamily(string $family): self
    {
        $this->family = $family;

        return $this;
    }

    public function getCdRef(): ?int
    {
        return $this->cd_ref;
    }

    public function setCdRef(int $cd_ref): self
    {
        $this->cd_ref = $cd_ref;

        return $this;
    }

    public function getCdNom(): ?int
    {
        return $this->cd_nom;
    }

    public function setCdNom(int $cd_nom): self
    {
        $this->cd_nom = $cd_nom;

        return $this;
    }

    /**
     * @return Collection|Observation[]
     */
    public function getObservations(): Collection
    {
        return $this->observations;
    }

    public function addObservation(Observation $observation): self
    {
        if (!$this->observations->contains($observation)) {
            $this->observations[] = $observation;
            $observation->setBird($this);
        }

        return $this;
    }

    public function removeObservation(Observation $observation): self
    {
        if ($this->observations->contains($observation)) {
            $this->observations->removeElement($observation);
            // set the owning side to null (unless already changed)
            if ($observation->getBird() === $this) {
                $observation->setBird(null);
            }
        }

        return $this;
    }
}
