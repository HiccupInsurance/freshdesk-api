<?php

require_once '../base.php';

use Hiccup\FreshdeskApi\Api\ContactApi;
use Hiccup\FreshdeskApi\Model\ContactModel;

$contactApi = new ContactApi(BASE_URL, API_KEY);

$contactModel = new ContactModel();
$contactModel->setName('Budi Arsana');
$contactModel->setEmail('budi.arsana@hiccup.com.au');

var_dump($contactApi->create($contactModel));
