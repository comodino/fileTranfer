<?php
namespace Entity\Translation;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Translatable\Entity\MappedSuperclass\AbstractTranslation;
use Knp\Doctrine

/**
 * @ORM\Table(name="client_translations", indexes={
 *      @ORM\Index(name="client_translation_idx", columns={"locale", "object_class", "field", "foreign_key"})
 * })
 * @ORM\Entity(repositoryClass="Gedmo\Translatable\Entity\Repository\TranslationRepository")
 */
class ClientTranslation extends AbstractTranslation
{
    /**
     * All required columns are mapped through inherited superclass
     */
}