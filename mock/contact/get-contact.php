<?php

require_once '../base.php';

use Hiccup\FreshdeskApi\Api\ContactApi;

$api = new ContactApi(BASE_URL, API_KEY);

var_dump($api->getContact(16001743065));
