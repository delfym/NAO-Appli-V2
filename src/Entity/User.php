<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Table(name="app_users")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface, \Serializable
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
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $role;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $last_notif_check;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Observation", mappedBy="user")
     */
    private $observations;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $mail;

    public function __construct()
    {
        $this->observations = new ArrayCollection();
        $this->role = 'ROLE_USER';
    }


    public function getId()
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getLastNotifCheck(): ?\DateTimeInterface
    {
        return $this->last_notif_check;
    }

    public function setLastNotifCheck(?\DateTimeInterface $last_notif_check): self
    {
        $this->last_notif_check = $last_notif_check;

        return $this;
    }

    /*public function getObservation(): ?Observation
    {
        return $this->observation;
    }*/

    /*public function setObservation(?Observation $observation): self
    {
        $this->observation = $observation;

        return $this;
    }*/

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
            $observation->setUser($this);
        }

        return $this;
    }

    public function removeObservation(Observation $observation): self
    {
        if ($this->observations->contains($observation)) {
            $this->observations->removeElement($observation);
            // set the owning side to null (unless already changed)
            if ($observation->getUser() === $this) {
                $observation->setUser(null);
            }
        }

        return $this;
    }

    public function getUsername()
    {
        return $this->pseudo;
    }

    public function getSalt()
    {
        return null;
    }

    public function getRoles()
    {
        return array($this->role);
    }

    /*public function getPassword()
    {
        return $this->password;
        existe deja pas la peine de redeclarer
    }*/

    public function eraseCredentials()
    {
        //Sert à effecer des donnés sensibles sur l'instance en court avant qu'elle ne se fasse serialiser ou flusher en BDD. 
        //Utile sur un mdp en claire par ex
    }

    public function serialize() //donnés enregistrées en session
    {
        return serialize(array(
            $this->id,
            $this->pseudo,
            $this->password,
        ));
    }

    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->pseudo,
            $this->password,
        ) = unserialize($serialized, ['allowed_classes' => false]);
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }




}
