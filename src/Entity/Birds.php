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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $synonymes_chresonymes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom_vernaculaire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $statut;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $regne;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $classe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ordre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $famille;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $CD_REF;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $CD_NOM;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Observation", mappedBy="bird_id", orphanRemoval=true)
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

    public function setSynonymesChresonymes(?string $synonymes_chresonymes): self
    {
        $this->synonymes_chresonymes = $synonymes_chresonymes;

        return $this;
    }

    public function getNomVernaculaire(): ?string
    {
        return $this->nom_vernaculaire;
    }

    public function setNomVernaculaire(?string $nom_vernaculaire): self
    {
        $this->nom_vernaculaire = $nom_vernaculaire;

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

    public function setRegne(?string $regne): self
    {
        $this->regne = $regne;

        return $this;
    }

    public function getClasse(): ?string
    {
        return $this->classe;
    }

    public function setClasse(?string $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    public function getOrdre(): ?string
    {
        return $this->ordre;
    }

    public function setOrdre(?string $ordre): self
    {
        $this->ordre = $ordre;

        return $this;
    }

    public function getFamille(): ?string
    {
        return $this->famille;
    }

    public function setFamille(?string $famille): self
    {
        $this->famille = $famille;

        return $this;
    }

    public function getCDREF(): ?int
    {
        return $this->CD_REF;
    }

    public function setCDREF(?int $CD_REF): self
    {
        $this->CD_REF = $CD_REF;

        return $this;
    }

    public function getCDNOM(): ?int
    {
        return $this->CD_NOM;
    }

    public function setCDNOM(?int $CD_NOM): self
    {
        $this->CD_NOM = $CD_NOM;

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
            $observation->setBirdId($this);
        }

        return $this;
    }

    public function removeObservation(Observation $observation): self
    {
        if ($this->observations->contains($observation)) {
            $this->observations->removeElement($observation);
            // set the owning side to null (unless already changed)
            if ($observation->getBirdId() === $this) {
                $observation->setBirdId(null);
            }
        }

        return $this;
    }
}
