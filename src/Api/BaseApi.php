<?php

namespace Hiccup\FreshdeskApi\Api;

use GuzzleHttp\Client;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;

class BaseApi
{

    #----------------------------------------------------------------------------------------------
    # Protected Properties
    #----------------------------------------------------------------------------------------------

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    #----------------------------------------------------------------------------------------------
    # Magic methods
    #----------------------------------------------------------------------------------------------

    /**
     * @param string $baseUrl
     * @param string $apiKey
     */
    public function __construct($baseUrl, $apiKey)
    {
        $this->client = new Client([
            'base_uri' => $baseUrl,
            'auth' => [$apiKey, 'X'],
            'headers' => ['Content-Type' => 'application/json']
        ]);

        $this->serializer = SerializerBuilder::create()->build();
    }

    #----------------------------------------------------------------------------------------------
    # Protected methods
    #----------------------------------------------------------------------------------------------

    /**
     * @param string $data
     * @param string $className
     * @return mixed
     */
    protected function deserialize($data, $className)
    {
        return $this->serializer->deserialize($data, $className, 'json');
    }
}
