<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Datetime;
//use App\Validator\Constraints as ValAssert;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

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
     * ORM\Column(type="string", length=255) PLUS PRIS EN COMPTE
     * ValAssert\GeoCoo
     */
    //private $geographic_coordinates;

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
     * @ORM\Column(type="datetime", nullable=true)
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

    /**
     * @ORM\Column(type="integer")
     */
    private $geo_latitude;

    /**
     * @ORM\Column(type="integer")
     */
    private $geo_longitude;

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

    public function getGeoLatitude(): ?int
    {
        return $this->geo_latitude;
    }

    public function setGeoLatitude(int $geo_latitude): self
    {
        $this->geo_latitude = $geo_latitude;

        return $this;
    }

    public function getGeoLongitude(): ?int
    {
        return $this->geo_longitude;
    }

    public function setGeoLongitude(int $geo_longitude): self
    {
        $this->geo_longitude = $geo_longitude;

        return $this;
    }

    /**
     * @Assert\Callback
     */
    public function validate(ExecutionContextInterface $context)
    {
        if (is_numeric($this->getGeoLongitude()))  
        {
            if (is_numeric($this->getGeoLatitude())) 
            {
                if ($this->getGeoLatitude() >= -90 && $this->getGeoLatitude() <= 90) 
                {
                    if (false === $this->getGeoLongitude() >= -180 && $this->getGeoLongitude() <= 180) 
                    {
                        $context->buildViolation('Longitude invalide')
                        ->atPath('geo_latitude')
                        ->addViolation();
                    }
                }
                else
                {
                    $context->buildViolation('Latitude invalide')
                    ->atPath('geo_latitude')
                    ->addViolation();
                }          
            }
            else
            {
                $context->buildViolation('Latitude invalide')
                    ->atPath('geo_latitude')
                    ->addViolation();
            }
        }
        else
        {
                $context->buildViolation('Longitude invalide')
                    ->atPath('geo_longitude')
                    ->addViolation();
        }


    }// peut aussi etre externalisée, mais vu que l'on injecte aucun service pas la peine
}
