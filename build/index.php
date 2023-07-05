<?php

use Oxyzal\OpenDataPg\Api;

require_once __DIR__ . '/../vendor/autoload.php';

$api = new Api();

var_dump($api->getNameAgent());