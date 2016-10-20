<?php

namespace Hiccup\FreshdeskApi\Api;

use Hiccup\FreshdeskApi\Model\ContactModel;

/**
 * Class ContactApi
 * @package Hiccup\FreshdeskApi\Api
 */
final class ContactApi extends BaseApi
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
    public function get($id): ContactModel
    {
        return $this->getRequest(sprintf('contacts/%d', $id), ContactModel::class);
    }

    /**
     * @param ContactModel $contact
     * @return ContactModel
     */
    public function create(ContactModel $contact): ContactModel
    {
        return $this->postRequest('contacts', $contact);
    }

    /**
     * @param array $filters
     * @return ContactModel[]
     * @see http://developer.freshdesk.com/api/#list_all_contacts
     */
    public function list(array $filters): array
    {
        return $this->getListRequest('/contacts', ContactModel::class, $filters);
    }
}
