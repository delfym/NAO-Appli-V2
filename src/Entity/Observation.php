<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Datetime;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ObservationRepository")
 */
class Observation
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
    private $geographic_coordinates;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $observation_title;

    /**
     * @ORM\Column(type="text")
     */
    private $comment;

    /**
     * @ORM\Column(type="datetime")
     */
    private $post_date;

    /**
     * @ORM\Column(type="datetime")
     */
    private $validation_date;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $delete_date;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $reason_of_delete;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\AppUsers", inversedBy="observations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Birds", inversedBy="observations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $bird;

    public function __construct()
    {
        $this->post_date = new Datetime();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getGeographicCoordinates(): ?string
    {
        return $this->geographic_coordinates;
    }

    public function setGeographicCoordinates(string $geographic_coordinates): self
    {
        $this->geographic_coordinates = $geographic_coordinates;

        return $this;
    }

    public function getObservationTitle(): ?string
    {
        return $this->observation_title;
    }

    public function setObservationTitle(string $observation_title): self
    {
        $this->observation_title = $observation_title;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getPostDate(): ?\DateTimeInterface
    {
        return $this->post_date;
    }

    public function setPostDate(\DateTimeInterface $post_date): self
    {
        $this->post_date = $post_date;

        return $this;
    }

    public function getValidationDate(): ?\DateTimeInterface
    {
        return $this->validation_date;
    }

    public function setValidationDate(\DateTimeInterface $validation_date): self
    {
        $this->validation_date = $validation_date;

        return $this;
    }

    public function getDeleteDate(): ?\DateTimeInterface
    {
        return $this->delete_date;
    }

    public function setDeleteDate(?\DateTimeInterface $delete_date): self
    {
        $this->delete_date = $delete_date;

        return $this;
    }

    public function getReasonOfDelete(): ?string
    {
        return $this->reason_of_delete;
    }

    public function setReasonOfDelete(?string $reason_of_delete): self
    {
        $this->reason_of_delete = $reason_of_delete;

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

    public function getBird(): ?Birds
    {
        return $this->bird;
    }

    public function setBird(?Birds $bird): self
    {
        $this->bird = $bird;

        return $this;
    }
}
