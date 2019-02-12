<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Hillel\Http\HttpRequest;

$httpRequest = new HttpRequest('POST', '/test', [], json_encode(['user' => 'name']));
$httpRequest = $httpRequest->withHeader('content-type', 'application/json');
var_dump($httpRequest->getBody()->getContents());
var_dump($httpRequest->getHeaders());