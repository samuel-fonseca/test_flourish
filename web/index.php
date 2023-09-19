<?php

use App\Application;
use App\Models\User;

include __DIR__ . '/../vendor/autoload.php';

$env = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$env->load();

/**
 * @var Application $application
 */
$application = new Application();
$application->run();


$user = new User();
$user->setName('Sam Fonseca');
$user->setEmail('samfonseca@test.com');
$user->setPassword(fCryptography::hashPassword('secret'));
$user->store();

var_dump($user);
