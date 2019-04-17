<?php
/**
 * Copyright (c) 2018. Tiziano Formica
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

trait CommonTrait
{
    /**
     * @var int
     *
     * @ORM\Id()
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var boolean
     * @ORM\Column(name="flg_enable", type="boolean", nullable=true)
     */
    protected $flgEnable=false;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     * @Gedmo\Timestampable(on="create")
     * @Assert\DateTime()
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     * @Gedmo\Timestampable(on="update")
     * @Assert\DateTime()
     */
    protected $updatedAt;

    /**
     * @return bool
     */
    public function isNew()
    {
        return null === $this->id;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return \get_class($this) . '#' . ($this->isNew() ? 'new' : $this->id);
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isFlgEnable()
    {
        return $this->flgEnable;
    }

    /**
     * @param bool $flgEnable
     */
    public function setFlgEnable(bool $flgEnable)
    {
        $this->flgEnable = $flgEnable;
    }
}
