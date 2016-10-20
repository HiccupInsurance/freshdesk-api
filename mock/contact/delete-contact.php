<?php

require_once '../base.php';

use Hiccup\FreshdeskApi\Api\ContactApi;

$contactApi = new ContactApi(BASE_URL, API_KEY);

var_dump($contactApi->delete(16002132714));
