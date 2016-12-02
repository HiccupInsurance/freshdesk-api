<?php

namespace Hiccup\FreshdeskApi\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class TicketModel
 *
 * A ticket is an issue raised by a requester that need to be solved.
 * It could be an urgent, high-priority problem exposing a security vulnerability.
 * It could also be low priority question about a free T-shirt.
 * Tickets are assigned to agents based on the agent's expertise and on the subject of the ticket.
 *
 * @package Hiccup\FreshdeskApi\Model
 * @Serializer\ExclusionPolicy("all")
 */
class TicketModel
{

    #----------------------------------------------------------------------------------------------
    # Constants
    #----------------------------------------------------------------------------------------------

    const SOURCE_EMAIL = 1;
    const SOURCE_PORTAL = 2;
    const SOURCE_PHONE = 3;
    const SOURCE_CHAT = 7;
    const SOURCE_MOBIHELP = 8;
    const SOURCE_FEEDBACK_WIDGET = 9;
    const SOURCE_OUTBOUND_EMAIL = 10;
    const SOURCE_ECOMMERCE = 11;

    const STATUS_OPEN = 2;
    const STATUS_PENDING = 3;
    const STATUS_RESOLVED = 4;
    const STATUS_CLOSED = 5;

    const PRIORITY_LOW = 1;
    const PRIORITY_MEDIUM = 2;
    const PRIORITY_HIGH = 3;
    const PRIORITY_URGENT = 4;

    #----------------------------------------------------------------------------------------------
    # Properties
    #----------------------------------------------------------------------------------------------

    /**
     * Ticket attachments. The total size of these attachments cannot exceed 15MB.
     *
     * @var array
     *
     * @Serializer\Expose()
     * @Serializer\Type("array")
     */
    private $attachments;

    /**
     * Email address added in the 'cc' field of the incoming ticket email
     *
     * @var array
     *
     * @Serializer\Expose()
     * @Serializer\Type("array")
     */
    private $ccEmails;

    /**
     * ID of the company to which this ticket belongs
     *
     * @var int
     *
     * @Serializer\Expose()
     * @Serializer\Type("array")
     */
    private $companyId;

    /**
     * Key value pairs containing the names and values of custom fields. Read more here
     *
     * @var array
     * @see https://support.freshdesk.com/support/solutions/articles/216548
     *
     * @Serializer\Expose()
     * @Serializer\Type("array")
     */
    private $customFields;

    /**
     * Set to true if the ticket has been deleted/trashed.
     * Deleted tickets will not be displayed in any views except the "deleted" filter
     *
     * @var bool
     *
     * @Serializer\Expose()
     * @Serializer\Type("boolean")
     */
    private $deleted;

    /**
     * HTML content of the ticket
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $description;

    /**
     * Content of the ticket in plain text
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $descriptionText;

    /**
     * Timestamp that denotes when the ticket is due to be resolved
     *
     * @var \DateTime
     *
     * @Serializer\Expose()
     * @Serializer\Type("DateTime")
     */
    private $dueBy;

    /**
     * Email address of the requester.
     * If no contact exists with this email address in Freshdesk, it will be added as a new contact.
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $email;

    /**
     * ID of email config which is used for this ticket.
     *
     * @var integer
     *
     * @Serializer\Expose()
     * @Serializer\Type("integer")
     */
    private $emailConfigId;

    /**
     * Facebook ID of the requester. A contact should exist with this facebook_id in Freshdesk.
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $facebookId;

    /**
     * Timestamp that denotes when the first response is due
     *
     * @var \DateTime
     *
     * @Serializer\Expose()
     * @Serializer\Type("DateTime")
     */
    private $frDueBy;

    /**
     * Set to true if the ticket has been escalated as the result of first response time being breached
     *
     * @var bool
     *
     * @Serializer\Expose()
     * @Serializer\Type("boolean")
     */
    private $frEscalated;

    /**
     * Email address(e)s added while forwarding a ticket
     *
     * @var array
     *
     * @Serializer\Expose()
     * @Serializer\Type("array")
     */
    private $fwdEmails;

    /**
     * ID of the group to which the ticket has been assigned
     *
     * @var integer
     *
     * @Serializer\Expose()
     * @Serializer\Type("integer")
     */
    private $groupId;

    /**
     * Unique ID of the ticket
     *
     * @var integer
     *
     * @Serializer\Expose()
     * @Serializer\Type("integer")
     */
    private $id;

    /**
     * Set to true if the ticket has been escalated for any reason
     *
     * @var bool
     *
     * @Serializer\Expose()
     * @Serializer\Type("boolean")
     */
    private $isEscalated;

    /**
     * Name of the requester
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $name;

    /**
     * Phone number of the requester.
     * If no contact exists with this phone number in Freshdesk, it will be added as a new contact.
     * If the phone number is set and the email address is not, then the name attribute is mandatory.
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $phone;

    /**
     * Priority of the ticket
     *
     * @var integer
     *
     * @Serializer\Expose()
     * @Serializer\Type("integer")
     */
    private $priority;

    /**
     * ID of the product to which the ticket is associated
     *
     * @var integer
     *
     * @Serializer\Expose()
     * @Serializer\Type("integer")
     */
    private $productId;

    /**
     * Email address added while replying to a ticket
     *
     * @var array
     *
     * @Serializer\Expose()
     * @Serializer\Type("array")
     */
    private $replyCcEmails;

    /**
     * User ID of the requester.
     * For existing contacts, the requester_id can be passed instead of the requester's email.
     *
     * @var integer
     *
     * @Serializer\Expose()
     * @Serializer\Type("integer")
     */
    private $requesterId;

    /**
     * ID of the agent to whom the ticket has been assigned
     *
     * @var integer
     *
     * @Serializer\Expose()
     * @Serializer\Type("integer")
     */
    private $responderId;

    /**
     * The channel through which the ticket was created
     *
     * @var integer
     *
     * @Serializer\Expose()
     * @Serializer\Type("integer")
     */
    private $source;

    /**
     * Set to true if the ticket has been marked as spam
     *
     * @var bool
     *
     * @Serializer\Expose()
     * @Serializer\Type("boolean")
     */
    private $spam;

    /**
     * Status of the ticket
     *
     * @var integer
     *
     * @Serializer\Expose()
     * @Serializer\Type("integer")
     */
    private $status;

    /**
     * Subject of the ticket
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $subject;

    /**
     * Tags that have been associated with the ticket
     *
     * @var array
     *
     * @Serializer\Expose()
     * @Serializer\Type("array")
     */
    private $tags;

    /**
     * Email addresses to which the ticket was originally sent
     *
     * @var array
     *
     * @Serializer\Expose()
     * @Serializer\Type("array")
     */
    private $toEmails;

    /**
     * Twitter handle of the requester.
     * If no contact exists with this handle in Freshdesk, it will be added as a new contact.
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $twitterId;

    /**
     * Helps categorize the ticket according to the different kinds of issues your support team deals with.
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $type;

    /**
     * Ticket creation timestamp
     *
     * @var \DateTime
     *
     * @Serializer\Expose()
     * @Serializer\Type("DateTime")
     */
    private $createdAt;

    /**
     * Ticket updated timestamp
     *
     * @var \DateTime
     *
     * @Serializer\Expose()
     * @Serializer\Type("DateTime")
     */
    private $updatedAt;

    #----------------------------------------------------------------------------------------------
    # Properties accessor
    #----------------------------------------------------------------------------------------------

    /**
     * @return array
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }

    /**
     * @param array $attachments
     */
    public function setAttachments(array $attachments)
    {
        $this->attachments = $attachments;
    }

    /**
     * @return array
     */
    public function getCcEmails(): array
    {
        return $this->ccEmails;
    }

    /**
     * @param array $ccEmails
     */
    public function setCcEmails(array $ccEmails)
    {
        $this->ccEmails = $ccEmails;
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
    public function setCompanyId(int $companyId)
    {
        $this->companyId = $companyId;
    }

    /**
     * @return array
     */
    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    /**
     * @param array $customFields
     */
    public function setCustomFields(array $customFields)
    {
        $this->customFields = $customFields;
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
    public function setDeleted(bool $deleted)
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
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescriptionText(): string
    {
        return $this->descriptionText;
    }

    /**
     * @param string $descriptionText
     */
    public function setDescriptionText(string $descriptionText)
    {
        $this->descriptionText = $descriptionText;
    }

    /**
     * @return \DateTime
     */
    public function getDueBy(): \DateTime
    {
        return $this->dueBy;
    }

    /**
     * @param \DateTime $dueBy
     */
    public function setDueBy(\DateTime $dueBy)
    {
        $this->dueBy = $dueBy;
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
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getEmailConfigId(): int
    {
        return $this->emailConfigId;
    }

    /**
     * @param int $emailConfigId
     */
    public function setEmailConfigId(int $emailConfigId)
    {
        $this->emailConfigId = $emailConfigId;
    }

    /**
     * @return string
     */
    public function getFacebookId(): string
    {
        return $this->facebookId;
    }

    /**
     * @param string $facebookId
     */
    public function setFacebookId(string $facebookId)
    {
        $this->facebookId = $facebookId;
    }

    /**
     * @return \DateTime
     */
    public function getFrDueBy(): \DateTime
    {
        return $this->frDueBy;
    }

    /**
     * @param \DateTime $frDueBy
     */
    public function setFrDueBy(\DateTime $frDueBy)
    {
        $this->frDueBy = $frDueBy;
    }

    /**
     * @return boolean
     */
    public function isFrEscalated(): bool
    {
        return $this->frEscalated;
    }

    /**
     * @param boolean $frEscalated
     */
    public function setFrEscalated(bool $frEscalated)
    {
        $this->frEscalated = $frEscalated;
    }

    /**
     * @return int
     */
    public function getGroupId(): int
    {
        return $this->groupId;
    }

    /**
     * @param int $groupId
     */
    public function setGroupId(int $groupId)
    {
        $this->groupId = $groupId;
    }

    /**
     * @return array
     */
    public function getFwdEmails(): array
    {
        return $this->fwdEmails;
    }

    /**
     * @param array $fwdEmails
     */
    public function setFwdEmails(array $fwdEmails)
    {
        $this->fwdEmails = $fwdEmails;
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
     * @return boolean
     */
    public function isIsEscalated(): bool
    {
        return $this->isEscalated;
    }

    /**
     * @param boolean $isEscalated
     */
    public function setIsEscalated(bool $isEscalated)
    {
        $this->isEscalated = $isEscalated;
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
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     */
    public function setPriority(int $priority)
    {
        $this->priority = $priority;
    }

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     */
    public function setProductId(int $productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return array
     */
    public function getReplyCcEmails(): array
    {
        return $this->replyCcEmails;
    }

    /**
     * @param array $replyCcEmails
     */
    public function setReplyCcEmails(array $replyCcEmails)
    {
        $this->replyCcEmails = $replyCcEmails;
    }

    /**
     * @return int
     */
    public function getRequesterId(): int
    {
        return $this->requesterId;
    }

    /**
     * @param int $requesterId
     */
    public function setRequesterId(int $requesterId)
    {
        $this->requesterId = $requesterId;
    }

    /**
     * @return int
     */
    public function getResponderId(): int
    {
        return $this->responderId;
    }

    /**
     * @param int $responderId
     */
    public function setResponderId(int $responderId)
    {
        $this->responderId = $responderId;
    }

    /**
     * @return int
     */
    public function getSource(): int
    {
        return $this->source;
    }

    /**
     * @param int $source
     */
    public function setSource(int $source)
    {
        $this->source = $source;
    }

    /**
     * @return boolean
     */
    public function isSpam(): bool
    {
        return $this->spam;
    }

    /**
     * @param boolean $spam
     */
    public function setSpam(bool $spam)
    {
        $this->spam = $spam;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject(string $subject)
    {
        $this->subject = $subject;
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
    public function setTags(array $tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return array
     */
    public function getToEmails(): array
    {
        return $this->toEmails;
    }

    /**
     * @param array $toEmails
     */
    public function setToEmails(array $toEmails)
    {
        $this->toEmails = $toEmails;
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
    public function setTwitterId(string $twitterId)
    {
        $this->twitterId = $twitterId;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
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
