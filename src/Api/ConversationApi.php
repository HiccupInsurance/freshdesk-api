<?php

namespace Hiccup\FreshdeskApi\Api;

use Hiccup\FreshdeskApi\Model\ConversationModel;

class ConversationApi extends BaseApi
{

    #----------------------------------------------------------------------------------------------
    # Magic methods
    #----------------------------------------------------------------------------------------------

    /**
     * @param string $baseUrl
     * @param string $apiKey
     */
    public function __construct($baseUrl, $apiKey)
    {
        parent::__construct($baseUrl, $apiKey);
    }

    #----------------------------------------------------------------------------------------------
    # Public methods
    #----------------------------------------------------------------------------------------------

    /**
     * @param int $ticketId
     * @param ConversationModel $model
     * @return mixed
     */
    public function createReply(int $ticketId, ConversationModel $model)
    {
        return $this->postRequest(sprintf('tickets/%d/reply', $ticketId), $model);
    }

    /**
     * By default, any note that you add will be private.
     * If you wish to add a public note, set the parameter to false.
     *
     * @param int $ticketId
     * @param ConversationModel $model
     * @return ConversationModel
     */
    public function createNote(int $ticketId, ConversationModel $model)
    {
        return $this->postRequest(sprintf('tickets/%d/notes', $ticketId), $model);
    }

    /**
     * @param int $id
     * @param ConversationModel $model
     * @return ConversationModel
     */
    public function update(int $id, ConversationModel $model)
    {
        return $this->putRequest(sprintf('conversations/%d', $id), $model);
    }

    /**
     * @param int $id
     */
    public function delete(int $id)
    {
        $this->deleteRequest(sprintf('conversations/%d', $id));
    }
}
