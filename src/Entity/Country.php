<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CountryRepository;
use JMS\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: CountryRepository::class)]
class Country
{

    #[ORM\Column(name: "id", type: "integer", nullable: false, options: ["unsigned" => true])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private  $id;


    #[ORM\Column(name: "name", type: "string", length: 100, nullable: false)]
    private string $name;


    #[ORM\Column(name: "iso3", type: "string", length: 3, nullable: true, options: ["fixed" => true])]
    private ?string $iso3;

    #[ORM\Column(name: "numeric_code", type: "string", length: 3, nullable: true, options: ["fixed" => true])]
    private ?string $numericCode;
    


    #[ORM\Column(name: "iso2", type: "string", length: 2, nullable: true, options: ["fixed" => true])]
    private ?string $iso2;

    
    #[ORM\Column(name: "phonecode", type: "string", length: 255, nullable: true)]
    private ?string $phonecode;



    #[ORM\Column(name: "capital", type: "string", length: 255, nullable: true)]
    private ?string $capital;


    #[ORM\Column(name: "currency", type: "string", length: 255, nullable: true)]
    private ?string $currency;


    #[ORM\Column(name: "currency_name", type: "string", length: 255, nullable: true)]
    private ?string $currencyName;



    #[ORM\Column(name: "currency_symbol", type: "string", length: 255, nullable: true)]
    private ?string $currencySymbol;


    #[ORM\Column(name: "tld", type: "string", length: 255, nullable: true)]
    private ?string $tld;


    #[ORM\Column(name: "native", type: "string", length: 255, nullable: true)]
    private ?string $native;



    #[ORM\Column(name: "region", type: "string", length: 255, nullable: true)]
    private ?string $region;

    #[ORM\Column(name: "subregion", type: "string", length: 255, nullable: true)]
    private ?string $subregion;
    

    #[ORM\Column(name: "nationality", type: "string", length: 255, nullable: true)]
    private ?string $nationality;



    #[ORM\Column(name: "timezones", type: Types::TEXT, length: 65535, nullable: true)]
    private ?string $timezones;

    #[ORM\Column(name: "translations", type: Types::TEXT, length: 65535, nullable: true)]
    private ?string $translations;

    #[ORM\Column(name: "latitude", type: "decimal", precision: 10, scale: 8, nullable: true)]
    private ?string $latitude;
    

    #[ORM\Column(name: "longitude", type: "decimal", precision: 11, scale: 8, nullable: true)]
    private ?string $longitude;

    #[ORM\Column(name: "emoji", type: "string", length: 191, nullable: true)]
    private ?string $emoji;
    
    #[ORM\Column(name: "emojiU", type: "string", length: 191, nullable: true)]
    private ?string $emojiu;
    

    #[ORM\Column(name: "created_at", type: "datetime", nullable: true)]
    private ?\DateTimeInterface $createdAt;
    
    #[ORM\Column(name: "updated_at", type: "datetime", nullable: false, options: ["default" => "CURRENT_TIMESTAMP"])]
    private \DateTimeInterface $updatedAt;
    

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
    private $region2;

    /**
     * @var \Subregion
     *
     * @ORM\ManyToOne(targetEntity="Subregion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="subregion_id", referencedColumnName="id")
     * })
     */
    private $subregion2;


/*     #[ORM\ManyToOne(targetEntity: Region::class, inversedBy: 'countries')]
    #[ORM\JoinColumns(name: "region_id", referencedColumnName: "id")]
    private ?Region $region2;

    #[ORM\ManyToOne(targetEntity: Subregion::class, inversedBy: 'countries')]
    #[ORM\JoinColumn(name: "subregion_id", referencedColumnName: "id")]

    private ?Subregion $subregion2; */

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

public function getIso3(): ?string
{
    return $this->iso3;
}

public function setIso3(?string $iso3): static
{
    $this->iso3 = $iso3;

    return $this;
}

public function getNumericCode(): ?string
{
    return $this->numericCode;
}

public function setNumericCode(?string $numericCode): static
{
    $this->numericCode = $numericCode;

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

public function getPhonecode(): ?string
{
    return $this->phonecode;
}

public function setPhonecode(?string $phonecode): static
{
    $this->phonecode = $phonecode;

    return $this;
}

public function getCapital(): ?string
{
    return $this->capital;
}

public function setCapital(?string $capital): static
{
    $this->capital = $capital;

    return $this;
}

public function getCurrency(): ?string
{
    return $this->currency;
}

public function setCurrency(?string $currency): static
{
    $this->currency = $currency;

    return $this;
}

public function getCurrencyName(): ?string
{
    return $this->currencyName;
}

public function setCurrencyName(?string $currencyName): static
{
    $this->currencyName = $currencyName;

    return $this;
}

public function getCurrencySymbol(): ?string
{
    return $this->currencySymbol;
}

public function setCurrencySymbol(?string $currencySymbol): static
{
    $this->currencySymbol = $currencySymbol;

    return $this;
}

public function getTld(): ?string
{
    return $this->tld;
}

public function setTld(?string $tld): static
{
    $this->tld = $tld;

    return $this;
}

public function getNative(): ?string
{
    return $this->native;
}

public function setNative(?string $native): static
{
    $this->native = $native;

    return $this;
}

public function getRegion(): ?string
{
    return $this->region;
}

public function setRegion(?string $region): static
{
    $this->region = $region;

    return $this;
}

public function getSubregion(): ?string
{
    return $this->subregion;
}

public function setSubregion(?string $subregion): static
{
    $this->subregion = $subregion;

    return $this;
}

public function getNationality(): ?string
{
    return $this->nationality;
}

public function setNationality(?string $nationality): static
{
    $this->nationality = $nationality;

    return $this;
}

public function getTimezones(): ?string
{
    return $this->timezones;
}

public function setTimezones(?string $timezones): static
{
    $this->timezones = $timezones;

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

public function getEmoji(): ?string
{
    return $this->emoji;
}

public function setEmoji(?string $emoji): static
{
    $this->emoji = $emoji;

    return $this;
}

public function getEmojiu(): ?string
{
    return $this->emojiu;
}

public function setEmojiu(?string $emojiu): static
{
    $this->emojiu = $emojiu;

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
