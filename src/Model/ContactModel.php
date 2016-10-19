<?php

namespace Hiccup\FreshdeskApi\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ContactModel
 *
 * @package Hiccup\FreshdeskApi\Model
 * @Serializer\ExclusionPolicy("all")
 */
class ContactModel
{

    #----------------------------------------------------------------------------------------------
    # Properties
    #----------------------------------------------------------------------------------------------

    /**
     * Set to true if the contact has been verified
     *
     * @var boolean
     *
     * @Serializer\Expose()
     * @Serializer\Type("boolean")
     */
    private $active;

    /**
     * Address of the contact
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $address;

    /**
     * ID of the company to which this contact belongs
     *
     * @var integer
     *
     * @Serializer\Expose()
     * @Serializer\Type("integer")
     */
    private $companyId;

    /**
     * Set to true if the contact has been deleted.
     * Note that this attribute will only be present for deleted contacts
     *
     * @var boolean
     *
     * @Serializer\Expose()
     * @Serializer\Type("boolean")
     */
    private $deleted;

    /**
     * A short description of the contact
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $description;

    /**
     * Primary email address of the contact.
     * If you want to associate additional email(s) with this contact, use the other_emails attribute
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $email;

    /**
     * ID of the contact
     *
     * @var integer
     *
     * @Serializer\Expose()
     * @Serializer\Type("integer")
     */
    private $id;

    /**
     * Job title of the contact
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $jobTitle;

    /**
     * Language of the contact
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $language;

    /**
     * Mobile number of the contact
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $mobile;

    /**
     * Name of the contact
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $name;

    /**
     * Additional emails associated with the contact
     *
     * @var array
     *
     * @Serializer\Expose()
     * @Serializer\Type("array")
     */
    private $otherEmails;

    /**
     * Telephone number of the contact
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $phone;

    /**
     * Tags associated with this contact
     *
     * @var array
     *
     * @Serializer\Expose()
     * @Serializer\Type("array")
     */
    private $tags;

    /**
     * Time zone in which the contact resides
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $timeZone;

    /**
     * Twitter handle of the contact
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $twitterId;

    /**
     * Set to true if the contact can see all tickets that are associated with the company to which he belong
     *
     * @var boolean
     *
     * @Serializer\Expose()
     * @Serializer\Type("booleab")
     */
    private $viewAllTickets;

    /**
     * Contact creation timestamp
     *
     * @var \DateTime
     *
     * @Serializer\Expose()
     * @Serializer\Type("DateTime")
     */
    private $createdAt;

    /**
     * Contact updated timestamp
     *
     * @var \DateTime
     *
     * @Serializer\Expose()
     * @Serializer\Type("DateTime")
     */
    private $updatedAt;

    #----------------------------------------------------------------------------------------------
    # Relation Properties
    #----------------------------------------------------------------------------------------------

    /**
     * Avatar of the contact
     *
     * @var AvatarModel
     *
     * @Serializer\Expose()
     * @Serializer\Type("Hiccup\FreshdeskApi\Model\AvatarModel")
     */
    private $avatar;

    #----------------------------------------------------------------------------------------------
    # Properties Accessor
    #----------------------------------------------------------------------------------------------

    /**
     * @return boolean
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return int
     */
    public function getCompanyId(): int
    {
        return $this->companyId;
    }

    /**
     * @param int $companyId
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
    }

    /**
     * @return boolean
     */
    public function isDeleted(): bool
    {
        return $this->deleted;
    }

    /**
     * @param boolean $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getJobTitle(): string
    {
        return $this->jobTitle;
    }

    /**
     * @param string $jobTitle
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getMobile(): string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
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
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getOtherEmails(): array
    {
        return $this->otherEmails;
    }

    /**
     * @param array $otherEmails
     */
    public function setOtherEmails($otherEmails)
    {
        $this->otherEmails = $otherEmails;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return array
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return string
     */
    public function getTimeZone(): string
    {
        return $this->timeZone;
    }

    /**
     * @param string $timeZone
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }

    /**
     * @return string
     */
    public function getTwitterId(): string
    {
        return $this->twitterId;
    }

    /**
     * @param string $twitterId
     */
    public function setTwitterId($twitterId)
    {
        $this->twitterId = $twitterId;
    }

    /**
     * @return boolean
     */
    public function isViewAllTickets(): bool
    {
        return $this->viewAllTickets;
    }

    /**
     * @param boolean $viewAllTickets
     */
    public function setViewAllTickets($viewAllTickets)
    {
        $this->viewAllTickets = $viewAllTickets;
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
    public function setCreatedAt($createdAt)
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
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return AvatarModel
     */
    public function getAvatar(): AvatarModel
    {
        return $this->avatar;
    }

    /**
     * @param AvatarModel $avatar
     */
    public function setAvatar(AvatarModel $avatar)
    {
        $this->avatar = $avatar;
    }
}
