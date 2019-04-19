<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Timestampable\Traits\Timestampable;
use Symfony\Component\Serializer\Annotation\Groups;
use Entity\Translation\ClientTranslation;

/**
 * @ORM\Entity()
 * @ORM\Table(name="client")
 * @ApiResource(
 *     normalizationContext={"groups"={"read"}},
 *     denormalizationContext={"groups"={"write"}},
 * )
 * @Gedmo\TranslationEntity(class="Entity\Translation\ClientTranslation")
 */
class Client
{
    use CommonTrait;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     * @Groups({"read", "write"})
     */
    private $name;

    /**
     * @GEDMO\Slug(fields={"name"}, updatable=true)
     * @ORM\Column(name="slug", type="string", length=255)
     * @Groups({"none"})
     */
    private $slug;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
    
    public function getTranslations()
    {
        return $this->translations;
    }
    
    public function addTranslation(ClientTranslation $t)
    {
        if (!$this->translations->contains($t)) {
            $this->translations[] = $t;
            $t->setObject($this);
        }
    }

}
