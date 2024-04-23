<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\StateRepository;
use JMS\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: StateRepository::class)]
class State
{
    #[ORM\Column(name: "id", type: "integer", nullable: false, options: ["unsigned" => true])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private  $id;


    #[ORM\Column(name: "name", type: "string", length: 255, nullable: false)]
    private string $name;

    #[ORM\Column(name: "country_code", type: "string", length: 2, nullable: false, options: ["fixed" => true])]
    private string $countryCode;

    #[ORM\Column(name: "fips_code", type: "string", length: 255, nullable: true)]
    private ?string $fipsCode;

    #[ORM\Column(name: "iso2", type: "string", length: 255, nullable: true)]
    private ?string $iso2;

    #[ORM\Column(name: "type", type: "string", length: 191, nullable: true)]
    private ?string $type;

    #[ORM\Column(name: "latitude", type: "decimal", precision: 10, scale: 8, nullable: true)]
    private ?string $latitude;

    #[ORM\Column(name: "longitude", type: "decimal", precision: 11, scale: 8, nullable: true)]
    private ?string $longitude;


    #[ORM\Column(name: "created_at", type: "datetime", nullable: true)]
    private ?\DateTime $createdAt;

    #[ORM\Column(name: "updated_at", type: "datetime", nullable: false, options: ["default" => "CURRENT_TIMESTAMP"])]
    private \DateTime $updatedAt;   

    #[ORM\Column(name: "flag", type: "boolean", nullable: false, options: ["default" => true])]
    private bool $flag = true;

    #[ORM\Column(name: "wikiDataId", type: "string", length: 255, nullable: true, options: ["comment" => "Rapid API GeoDB city"])]
    private ?string $wikidataid;

    /**
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;
/*     #[ORM\ManyToOne(targetEntity: Country::class, inversedBy:'states')]
    #[ORM\JoinColumn(name: "country_id", referencedColumnName: "id")]

    private Country $country; */

public function getId(): ?int
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

public function getCountryCode(): ?string
{
    return $this->countryCode;
}

public function setCountryCode(string $countryCode): static
{
    $this->countryCode = $countryCode;

    return $this;
}

public function getFipsCode(): ?string
{
    return $this->fipsCode;
}

public function setFipsCode(?string $fipsCode): static
{
    $this->fipsCode = $fipsCode;

    return $this;
}

public function getIso2(): ?string
{
    return $this->iso2;
}

public function setIso2(?string $iso2): static
{
    $this->iso2 = $iso2;

    return $this;
}

public function getType(): ?string
{
    return $this->type;
}

public function setType(?string $type): static
{
    $this->type = $type;

    return $this;
}

public function getLatitude(): ?string
{
    return $this->latitude;
}

public function setLatitude(?string $latitude): static
{
    $this->latitude = $latitude;

    return $this;
}

public function getLongitude(): ?string
{
    return $this->longitude;
}

public function setLongitude(?string $longitude): static
{
    $this->longitude = $longitude;

    return $this;
}

public function getCreatedAt(): ?\DateTimeInterface
{
    return $this->createdAt;
}

public function setCreatedAt(?\DateTimeInterface $createdAt): static
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
