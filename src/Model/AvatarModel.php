<?php

namespace Hiccup\FreshdeskApi\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AvatarModel
 * @package Hiccup\FreshdeskApi\Model
 * @Serializer\ExclusionPolicy("all")
 */
class AvatarModel
{

    #----------------------------------------------------------------------------------------------
    # Properties
    #----------------------------------------------------------------------------------------------

    /**
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $avatarUrl;

    /**
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $contentType;

    /**
     * @var integer
     *
     * @Serializer\Expose()
     * @Serializer\Type("integer")
     */
    private $id;

    /**
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $name;

    /**
     * @var integer
     *
     * @Serializer\Expose()
     * @Serializer\Type("integer")
     */
    private $size;

    /**
     * @var \DateTime
     *
     * @Serializer\Expose()
     * @Serializer\Type("DateTime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @Serializer\Expose()
     * @Serializer\Type("DateTime")
     */
    private $updatedAt;

    #----------------------------------------------------------------------------------------------
    # Properties Accessor
    #----------------------------------------------------------------------------------------------

    /**
     * @return string
     */
    public function getAvatarUrl(): string
    {
        return $this->avatarUrl;
    }

    /**
     * @param string $avatarUrl
     */
    public function setAvatarUrl(string $avatarUrl)
    {
        $this->avatarUrl = $avatarUrl;
    }

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     */
    public function setContentType(string $contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->size = $size;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
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
    public function getUpdatedAt(): \DateTime
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
}
