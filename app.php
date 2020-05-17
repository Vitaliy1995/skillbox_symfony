<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application('Say hello application');

$application->add(new \App\SayHelloTo());

$application->run();
