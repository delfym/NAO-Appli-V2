<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Datetime;
use App\Validator\Constraints as Constr;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ForgotPasswordRepository")
 */
class ForgotPassword
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Constr\MailExist
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $unique_key;

    /**
     * @ORM\Column(type="datetime")
     */
    private $request_date;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\AppUsers", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
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

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getUniqueKey(): ?string
    {
        return $this->unique_key;
    }

    public function setUniqueKey(string $unique_key): self
    {
        $this->unique_key = $unique_key;

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

    public function setUser(AppUsers $user): self
    {
        $this->user = $user;

        return $this;
    }
}
