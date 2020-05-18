<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new \App\SayHelloTo());
$application->add(new \App\RepeatPhrase());
$application->add(new \App\AskQuestionPrintAnswer());

$application->run();
