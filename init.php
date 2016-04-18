<?php

// Import the necessary classes
use Illuminate\Database\Capsule\Manager as Capsule;

$config = Kohana::$config->load('sentinel');

// Setup a new Eloquent Capsule instance
$capsule = new Capsule;
$capsule->addConnection($config['database']);

$capsule->bootEloquent();
