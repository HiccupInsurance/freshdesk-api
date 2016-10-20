<?php

namespace Hiccup\FreshdeskApi\Api;

use GuzzleHttp\Client;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;

/**
 * Class BaseApi
 * @package Hiccup\FreshdeskApi\Api
 * @TODO: need strategy to handle exception
 */
abstract class BaseApi
{

    #----------------------------------------------------------------------------------------------
    # Constants
    #----------------------------------------------------------------------------------------------

    const BASE_PATH = '/api/v2/';

    #----------------------------------------------------------------------------------------------
    # Private Properties
    #----------------------------------------------------------------------------------------------

    /**
     * @var Client
     */
    private $client;

    /**
     * @var SerializerInterface
     */
    private $serializer;

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

    /**
     * Send GET request and return deserialized response
     *
     * @param string $path
     * @param string $className
     * @return mixed
     */
    protected function getRequest($path, $className)
    {
        $response = $this->client->get(self::BASE_PATH.$path);

        if ($response->getStatusCode() !== 200) {
            // throw exception here
        }

        return $this->deserialize((string) $response->getBody(), $className);
    }

    /**
     * Send POST request and return deserialized response
     *
     * @param string $path
     * @param mixed $model
     * @return mixed
     */
    protected function postRequest($path, $model)
    {
        $response = $this->client->post(
            self::BASE_PATH.$path,
            ['body' => $this->serializer->serialize($model, 'json')]
        );

        if ($response->getStatusCode() !== 200) {
            // throw exception here
        }

        return $this->deserialize((string) $response->getBody(), get_class($model));
    }

    /**
     * @param string $path
     * @param string $className
     * @param array $filters
     * @return array
     */
    protected function getListRequest($path, $className, array $filters): array
    {
        $queryParameters = [];

        foreach($filters as $key => $filter) {
            $queryParameters[] = sprintf('%s=%s', $key, urlencode($filter));
        }

        $response = $this->client->get(sprintf(
            '%s%s?%s',
            self::BASE_PATH,
            $path,
            implode('&', $queryParameters)
        ));

        if ($response->getStatusCode() !== 200) {
            // throw exception here
        }

        return $this->deserialize((string) $response->getBody(), sprintf('array<%s>', $className));
    }
}
