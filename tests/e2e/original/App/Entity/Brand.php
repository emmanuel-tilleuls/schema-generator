<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiProperty;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * A brand is a name used by an organization or business person for labeling a product, product group, or similar.
 *
 * @see https://schema.org/Brand
 */
#[ORM\Entity]
#[ApiResource(iri: 'https://schema.org/Brand')]
class Brand
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    /**
     * The name of the item.
     *
     * @see https://schema.org/name
     */
    #[ORM\Column(type: 'text', nullable: true)]
    #[ApiProperty(iri: 'https://schema.org/name')]
    private ?string $name = null;

    /**
     * A slogan or motto associated with the item.
     *
     * @see https://schema.org/slogan
     */
    #[ORM\Column(type: 'text', nullable: true)]
    #[ApiProperty(iri: 'https://schema.org/slogan')]
    private ?string $slogan = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setSlogan(?string $slogan): void
    {
        $this->slogan = $slogan;
    }

    public function getSlogan(): ?string
    {
        return $this->slogan;
    }
}
