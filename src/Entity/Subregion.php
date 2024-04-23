<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\SubregionRepository;
use JMS\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: SubregionRepository::class)]
class Subregion
{
 
    #[ORM\Column(name: "id", type: "integer", nullable: false, options: ["unsigned" => true])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private $id;


    #[ORM\Column(name: "name", type: "string", length: 100, nullable: false)]
    private string $name;

    #[ORM\Column(name: "translations", type: Types::TEXT, length: 65535, nullable: true)]
    private ?string $translations;

    #[ORM\Column(name: "created_at", type: "datetime", nullable: true)]
    private ?\DateTime $createdAt;

    #[ORM\Column(name: "updated_at", type: "datetime", nullable: false, options: ["default" => "CURRENT_TIMESTAMP"])]
    private \DateTime $updatedAt;

    #[ORM\Column(name: "flag", type: "boolean", nullable: false, options: ["default" => true])]
    private bool $flag = true;

    #[ORM\Column(name: "wikiDataId", type: "string", length: 255, nullable: true, options: ["comment" => "Rapid API GeoDB city"])]
    private ?string $wikidataid;

    /**
     * @var \Region
     *
     * @ORM\ManyToOne(targetEntity="Region")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     * })
     */
    private $region;

/*     #[ORM\ManyToOne(targetEntity: Region::class , inversedBy:'subregions')]
    #[ORM\JoinColumn(name: "region_id", referencedColumnName: "id")]

    private $region; */

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

public function getTranslations(): ?string
{
    return $this->translations;
}

public function setTranslations(?string $translations): static
{
    $this->translations = $translations;

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
