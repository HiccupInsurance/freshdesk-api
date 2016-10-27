<?php

namespace Hiccup\FreshdeskApi\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ConversationModel
 *
 * Conversations consist of replies as well as public and private notes added to a ticket.
 * Notes are non-invasive ways of sharing updates about a ticket amongst agents and customers.
 * Private notes are for collaboration between agents and are not visible to the customer.
 * Public notes are visible to, and can be created by, both customers and agents.
 *
 * @package Hiccup\FreshdeskApi\Model
 * @Serializer\ExclusionPolicy("all")
 */
class ConversationModel
{

    #----------------------------------------------------------------------------------------------
    # Constants
    #----------------------------------------------------------------------------------------------

    const SOURCE_REPLY = 0;
    const SOURCE_NOTE = 2;
    const SOURCE_TWEET = 5;
    const SOURCE_SURVEY = 6;
    const SOURCE_FACEBOOK = 7;
    const SOURCE_EMAIl = 8;
    const SOURCE_PHONE = 9;
    const SOURCE_MOBIHELP = 10;
    const SOURCE_ECOMMERCE = 11;

    #----------------------------------------------------------------------------------------------
    # Properties
    #----------------------------------------------------------------------------------------------

    /**
     * Attachments associated with the conversation. The total size of all of a ticket's attachments cannot exceed 15MB.
     *
     * @var array
     *
     * @Serializer\Expose()
     * @Serializer\Type("array")
     */
    private $attachments;

    /**
     * Content of the conversation in HTML
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $body;

    /**
     * Content of the conversation in plain text
     *
     * @var string
     *
     * @Serializer\Expose()
     * @Serializer\Type("string")
     */
    private $bodyText;

    /**
     * ID of the conversation
     *
     * @var integer
     *
     * @Serializer\Expose()
     * @Serializer\Type("integer")
     */
    private $id;

    /**
     * Set to true if a particular conversation should appear as being created from outside (i.e., not through web portal)
     *
     * @var bool
     *
     * @Serializer\Expose()
     * @Serializer\Type("boolean")
     */
    private $incoming;

    /**
     * Email addresses of agents/users who need to be notified about this conversation
     *
     * @var array
     *
     * @Serializer\Expose()
     * @Serializer\Type("array")
     */
    private $toEmails;

    /**
     * Set to true if the note is private
     *
     * @var bool
     *
     * @Serializer\Expose()
     * @Serializer\Type("boolean")
     */
    private $private;

    /**
     * Denotes the type of the conversation.
     *
     * @var integer
     *
     * @Serializer\Expose()
     * @Serializer\Type("integer")
     */
    private $source;

    /**
     * ID of the ticket to which this conversation is being added
     *
     * @var integer
     *
     * @Serializer\Expose()
     * @Serializer\Type("integer")
     */
    private $ticketId;

    /**
     * ID of the agent/user who is adding the conversation
     *
     * @var integer
     *
     * @Serializer\Expose()
     * @Serializer\Type("integer")
     */
    private $userId;

    /**
     * Conversation creation timestamp
     *
     * @var \DateTime
     *
     * @Serializer\Expose()
     * @Serializer\Type("DateTime")
     */
    private $createdAt;

    /**
     * Conversation updated timestamp
     *
     * @var \DateTime
     *
     * @Serializer\Expose()
     * @Serializer\Type("DateTime")
     */
    private $updateAt;

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
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody(string $body)
    {
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getBodyText(): string
    {
        return $this->bodyText;
    }

    /**
     * @param string $bodyText
     */
    public function setBodyText(string $bodyText)
    {
        $this->bodyText = $bodyText;
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
    public function isIncoming(): bool
    {
        return $this->incoming;
    }

    /**
     * @param boolean $incoming
     */
    public function setIncoming(bool $incoming)
    {
        $this->incoming = $incoming;
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
     * @return boolean
     */
    public function isPrivate(): bool
    {
        return $this->private;
    }

    /**
     * @param boolean $private
     */
    public function setPrivate(bool $private)
    {
        $this->private = $private;
    }

    /**
     * @return int
     */
    public function getSource(): integer
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
     * @return int
     */
    public function getTicketId(): int
    {
        return $this->ticketId;
    }

    /**
     * @param int $ticketId
     */
    public function setTicketId(int $ticketId)
    {
        $this->ticketId = $ticketId;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId)
    {
        $this->userId = $userId;
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
    public function getUpdateAt(): \DateTime
    {
        return $this->updateAt;
    }

    /**
     * @param \DateTime $updateAt
     */
    public function setUpdateAt(\DateTime $updateAt)
    {
        $this->updateAt = $updateAt;
    }
}
