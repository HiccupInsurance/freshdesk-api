<?php

namespace Hiccup\FreshdeskApi\Api;

use Hiccup\FreshdeskApi\Model\ContactModel;

class ContactApi extends BaseApi
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
     * Get contact by ID
     *
     * @param integer $id
     * @return ContactModel
     */
    public function getContact($id): ContactModel
    {
        $response = $this->client->get(sprintf('/api/v2/contacts/%d', $id));

        if ($response->getStatusCode() !== 200) {
            // throw exception here
        }

        return $this->deserialize((string) $response->getBody(), ContactModel::class);
    }
}
