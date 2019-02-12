<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Hillel\Cache\Cache;

$cache = new Cache();

$item = $cache->getItem('database_user')
    ->set([
        'user' => 'vasia',
        'email' => 'vasia@mail.com'
    ])
    ->expiresAfter(60);

$cache->save($item);

if ($cache->getItem('database_user')->isHit()) {
    var_dump($cache->getItem('database_user'));
} else {
    echo "Cache missed" . PHP_EOL;
}
