<?php

require('vendor/autoload.php');

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'socialmedia',
    'username'  => 'root',
    'password'  => 'root',
    'charset'   => 'utf8mb3_bin',
    // 'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();

require('graphql/boot.php');