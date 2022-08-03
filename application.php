#!/usr/bin/env php

<?php

use Acme\GetMovieInformationCommand;
use Symfony\Component\Console\Application;

require __DIR__.'/vendor/autoload.php';

$app = new Application('Movie Information finder');

$app->add(new GetMovieInformationCommand);

$app->run();