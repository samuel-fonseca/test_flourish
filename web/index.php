<?php

use App\Application;

include __DIR__ . '/../vendor/autoload.php';

$env = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$env->load();

/**
 * @var Application $application
 */
$application = new Application();
$application->run();

echo PHP_EOL;
echo '<h1>Running on PHP '.phpversion().'</h1>';
