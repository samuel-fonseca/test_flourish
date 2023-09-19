<?php

namespace App;

use fORM;
use fDatabase;
use fMessaging;
use fORMDatabase;

class Application
{
    public function __construct()
    {
        fORMDatabase::attach(new fDatabase(
            'postgresql',
            $_ENV['DB_NAME'],
            $_ENV['DB_USER'],
            $_ENV['DB_PASS'],
            $_ENV['DB_HOST'],
        ));

        /**
         * Potential issue - namespace for Models doesn't work
         * Flourish will look for app\models\users instead of users
         */
        fORM::mapClassToTable('App\Models\User', 'users');

        // create a nice message
        fMessaging::create('success', '/', 'Application created!');
    }

    public function run()
    {
        fMessaging::show('success', '/');
    }
}
