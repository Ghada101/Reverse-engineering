<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Groups;
use App\Repository\CityRepository;

#[ORM\Entity(repositoryClass: CityRepository::class)]

class City
{
    #[ORM\Column(name: "id", type: "integer", nullable: false, options: ["unsigned" => true])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private $id;


    #[ORM\Column(type: "string", length: 255, nullable: false)]
    private string $name;


    #[ORM\Column(type: "string", length: 255)]
    private $stateCode;


    #[ORM\Column(type: "string", length: 2, nullable: false, options: ["fixed" => true])]
    private $countryCode;


    #[ORM\Column(type: "decimal", precision: 10, scale: 8, nullable: false)]
    private $latitude;

  
    #[ORM\Column(name: "longitude", type: "decimal", precision: 11, scale: 8, nullable: false)]
    private $longitude;


    #[ORM\Column(name: "created_at", type: "datetime", nullable: false, options: ["default" => "2014-01-01 06:31:01"])]
    private \DateTime $createdAt;

   
    #[ORM\Column(name: "updated_at", type: "datetime", nullable: false, options: ["default" => "CURRENT_TIMESTAMP"])]
    private \DateTime $updatedAt;


    #[ORM\Column(name: "flag", type: "boolean", nullable: false, options: ["default" => "1"])]
    private bool $flag = true;



    #[ORM\Column(name: "wikiDataId", type: "string", length: 255, nullable: true, options: ["comment" => "Rapid API GeoDB city"])]
    private ?string $wikidataid;



/* 
    #[ORM\ManyToOne(targetEntity: "State", inversedBy: 'cities')]
    #[ORM\JoinColumn(name: "state_id", referencedColumnName: "id")]
    private ?State $state; */

    /**
     * @var \State
     *
     * @ORM\ManyToOne(targetEntity="State")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     * })
     */
    private $state;

    /* #[ORM\ManyToOne(targetEntity: "Country", inversedBy: 'cities')]
    #[ORM\JoinColumn(name: "country_id", referencedColumnName: "id")]
    private ?Country $country; */

    /**
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getStateCode(): ?string
    {
        return $this->stateCode;
    }

    public function setStateCode(string $stateCode): static
    {
        $this->stateCode = $stateCode;

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode): static
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): static
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): static
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function isFlag(): ?bool
    {
        return $this->flag;
    }

    public function setFlag(bool $flag): static
    {
        $this->flag = $flag;

        return $this;
    }

    public function getWikidataid(): ?string
    {
        return $this->wikidataid;
    }

    public function setWikidataid(?string $wikidataid): static
    {
        $this->wikidataid = $wikidataid;

        return $this;
    }
    

}
