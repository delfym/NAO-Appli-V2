<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity(repositoryClass="App\Repository\AppUsersRepository")
 * @UniqueEntity("mail")
 * @UniqueEntity("username")
 */
class AppUsers implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=80, nullable=true)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=80, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=80, nullable=true)
     */
    private $role;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $password;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $last_notif_check;

    /**
     * @ORM\Column(type="string", length=100, unique=true, nullable=true)
     */
    private $mail;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Observation", mappedBy="user")
     */
    private $observations;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $MailValidationDate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $adminRequest;

    public function __construct()
    {
        $this->observations = new ArrayCollection();
        $this->role = 'ROLE_USER';
        $this->isActive = true;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): self
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

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

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

    public function getSalt()
    {
        return null; 
    }

    public function getRoles()
    {
        return array($this->role);
    }

    public function eraseCredentials()
    {
        //Sert à effacer des infos sensibles avant stockage (session, bdd ...)
    }

    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            $this->isActive,
        ));
    }

    public function unserialize($serialized)
    {
        list(
            $this->id,
            $this->username,
            $this->password,
            $this->isActive,
        ) = unserialize($serialized, ['allowed_classes' => false]);
    }

    public function getMailValidationDate(): ?\DateTimeInterface
    {
        return $this->MailValidationDate;
    }

    public function setMailValidationDate(?\DateTimeInterface $MailValidationDate): self
    {
        $this->MailValidationDate = $MailValidationDate;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getAdminRequest(): ?\DateTimeInterface
    {
        return $this->adminRequest;
    }

    public function setAdminRequest(?\DateTimeInterface $adminRequest): self
    {
        $this->adminRequest = $adminRequest;

        return $this;
    }
}
