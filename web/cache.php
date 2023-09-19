<?php

include __DIR__.'/../vendor/autoload.php';

$cache = new fCache('directory', __DIR__.'/../cache');
$message = $cache->remember('message', fn () => 'Hello World', 2);

echo 'from cache: '.$cache->get('message');
echo PHP_EOL;
sleep(3);
echo 'trying to fetch directly from cache after expiration: '.$cache->get('message');
