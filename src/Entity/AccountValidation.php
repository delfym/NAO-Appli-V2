<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Datetime;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AccountValidationRepository")
 */
class AccountValidation
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
    private $validation_key;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail;

    /**
     * @ORM\Column(type="datetime")
     */
    private $request_date;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\AppUsers", cascade={"persist"})
     */
    private $user;

    public function __construct()
    {
        $this->request_date = new Datetime();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getValidationKey(): ?string
    {
        return $this->validation_key;
    }

    public function setValidationKey(string $validation_key): self
    {
        $this->validation_key = $validation_key;

        return $this;
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

    public function getRequestDate(): ?\DateTimeInterface
    {
        return $this->request_date;
    }

    public function setRequestDate(\DateTimeInterface $request_date): self
    {
        $this->request_date = $request_date;

        return $this;
    }

    public function getUser(): ?AppUsers
    {
        return $this->user;
    }

    public function setUser(?AppUsers $user): self
    {
        $this->user = $user;

        return $this;
    }
}
